<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestDoucument\StoreRequestDocument;
use App\Http\Requests\users\MassDestroyUserRequest;
use App\Models\Role;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\users\StoreUserRequest;
use App\Http\Requests\users\SubmitRequest;
use App\Http\Requests\users\UpdateUserRequest;
use App\Mail\RequestDocument as MailRequestDocument;
use App\Mail\UserCreatedMailable as Nurse;
use App\Models\Brand;
use App\Models\RequestDocument;
use App\Models\UserDocument;
use App\Models\UserEducationalDocument;
use App\Models\UserGeneralDocument;
use Exception;
use Illuminate\Support\Facades\Hash;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use stdClass;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords('users');
    }

    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $users = User::where('id','!=',3)->orderBy('id', 'desc')->get();
            return datatables()->of($users)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->avatar) ? $data->avatar : 'assets/images/users/avator.png') . '">';
                })->addColumn('action', function ($data) {
                    $edit = '';
                    $duplicate = '';
                    $view = '';
                    $delete = '';
                    if (Gate::allows('user_edit')) {
                        $edit = '<a title="Edit" href="' . route('admin.users.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    }
                    if (Gate::allows('user_show')) {
                        $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';
                    }
                    if (Gate::allows('user_delete')) {
                        $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>&nbsp;';
                    }
                    if (Gate::allows('user_edit')) {
                        $document = '<a title="Document" href="' . route('admin.users.view-document', $data->id) . '" type="button" name="document" id="' . $data['id'] . '" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i></a>';
                    }
                    return $edit . $view . $delete . $document;
                })->rawColumns(['checkbox', 'action', 'image'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.users.list')->with($content);
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::where('id', '!=', 1)->latest()->get()->pluck('title', 'id');
        $title = $this->title;
        return view('admin.users.create', compact('roles', 'title'));
    }


    public function store(StoreUserRequest $request)
    {
        // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $password =  Str::random(8);
            $hashed_random_password = Hash::make($password);
            $user = $request->all();
            $user['password'] = $hashed_random_password;
            $user = User::create($user);
            // $user->save();
            $user->roles()->sync(4);
            Mail::to($user)->send(new Nurse($user, $password));
            if(isset(auth()->user()->id) == 1){
                return redirect()->route('admin.users.index')->withToastSuccess('User Created Successfully!');
            }
            else{
                return redirect()->route('front');
            }
            // return redirect()->route('admin.users.index')->withToastSuccess('User Created Successfully!');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function show(User $user)
    {
        return \response()->json($user);
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $roles = Role::where('id', '!=', 1)->latest()->get()->pluck('title', 'id');
        $user->load('roles');
        $title = $this->title;
        return view('admin.users.edit', compact('user', 'title'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update(handleFilesIfPresent(\request()->segment(2), $request->validated(), $user));
        $user->save();
        return redirect()->route('admin.users.index')->withToastSuccess('User Updated Successfully!');
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user->delete();
        return \response()->json('User Deleted Successfully!');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return \response()->json('Selected records Deleted Successfully.');
    }

    public function uploadDocument(DocumentStoreRequest $request, $id)
    {
        try {
            $data = $request->all();
            if (request()->segment(3) == 'general-document') {
                // return $request->all();
                $data['user_id'] = $id;
                $documetSave = UserGeneralDocument::create(handleFiles('general-documents', $data));
            } else if (request()->segment(3) == 'educational-document') {
                // return $request->all();
                $data['user_id'] = $id;
                $documetSave = UserEducationalDocument::create(handleFiles('educational-documents', $data));
            }
            return  redirect()->route('admin.users.index')->withToastSuccess('Documents Uploaded Successfully');
        } catch (Exception $ex) {
            return  redirect()->route('admin.users.index')->withToastError($ex->getMessage());
        }

        // $document = [];
        // if ($request->hasFile('general_file')) {
        //     $generalFiles = handleFiles(\request()->segment(2), $request->file('general_file'));
        //     foreach ($generalFiles as $file) {
        //         array_push($document, [
        //             'file_path' => $file,
        //             'status' => '0',
        //             'user_id' => $id,
        //         ]);
        //     }
        // }
        // if ($request->hasFile('education_file')) {
        //     $educationalFiles = handleFiles(\request()->segment(2), $request->file('education_file'));
        //     foreach ($educationalFiles as $file) {
        //         array_push($document, [
        //             'file_path' => $file,
        //             'status' => '1',
        //             'user_id' => $id,
        //         ]);
        //     }
        // }
        // $title = $this->title;
        // $uploadDocument = UserDocument::insert($document);


    }
    public function viewDocument($id)
    {
        $title = $this->title;
        $docments = new stdClass;
        $documents['educationalDocument'] = UserEducationalDocument::where('user_id', $id)->get();
        $documents['generalDocument'] = UserGeneralDocument::where('user_id', $id)->get();
        // $documents = UserEducationalDocument::where('user_id', $id)->get();
        // $generalDocuments = UserGeneralDocument::where('user_id', $id)->get();
        // return $documents;
        // array_merge($documents,$generalDocuments);
        // return $document;
        return  view('admin.users.view-user-document', compact('id', 'title', 'documents'));
    }
    // public function deleteEducationDocument(Request $request)
    // {
    //     $document = UserEducationalDocument::find($request->file_id);
    //     $document->delete();
    //     File::delete(public_path($document->file_path));
    //     return \response()->json('File Deleted Successfully!');
    // }
    // public function deleteGeneralDocument(Request $request)
    // {
    //     $document = UserGeneralDocument::find($request->file_id);
    //     File::delete(public_path($document->file_path));
    //     $document->delete();
    //     return \response()->json('File Deleted Successfully!');
    // }

    public function createDocument($id)
    {
        try {
            // return request()->segment(2);
            $title = $this->title;
            return view('admin.users.upload-user-document', compact('id', 'title'));
        } catch (Exception $ex) {
            return redirect()->route('users')->withToastError($ex->getMessage());
        }
    }
    public function createDocumentByUser()
    {
        // return request()->segment(2);
        if (request()->segment(2) == 'educational-documents') {
            return 'educational';
        } elseif (request()->segment(2) == 'general-documents') {
            return 'general';
        }

        request()->segment(2);
        $title = $this->title;
        $documents = UserDocument::where('user_id', auth()->user()->id)->get();

        return  view('user.document-view', compact('title', 'documents'));
    }


    public function documentRequest()
    {
        $title = $this->title;
        return view('user.document-request', compact('title'));
    }
    public function documentRequestStore(StoreRequestDocument $request)
    {
        try {
            $data = $request->validated();
            $data["user_id"] = auth()->user()->id;
            RequestDocument::create($data);
            $data["user"] = auth()->user();
            Mail::to("kumarasnani997@gmail.com")->send(new MailRequestDocument($data));
            return redirect()->back()->withToastSuccess('Data Insert Successfully!');
        } catch (Exception $ex) {
            return $ex->getMessage();
            return redirect()->back()->withToastError("error", "something went wrong");
        }
    }


    public function generalDocument()
    {
        $title = 'General Documents';
        $documents = UserGeneralDocument::where('user_id', auth()->user()->id)->get();
        return  view('user.general-documents.list', compact('title', 'documents'));
    }
    public function educationalDocument()
    {
        $title = 'Educational Documents';
        $documents = UserEducationalDocument::where('user_id', auth()->user()->id)->get();
        return  view('user.educational-documents.list', compact('title', 'documents'));
    }

    // public function storeEducationalDocument(Request $request)
    // {

    //     // $document = handleFiles(\request()->segment(2), $request->file('general_file'));
    //     try {
    //         $data = $request->all();
    //         $data['user_id'] = auth()->user()->id;
    //         $document = UserEducationalDocument::create(handleFiles('educational-documents', $data));
    //         return redirect()->route('users.eduactional-documents')->withToastSuccess('Data Insert Successfully!');
    //     } catch (Exception $ex) {
    //         return $ex->getMessage();
    //     }
    //     // $document = UserEducationalDocument::create($request->all());
    // }
    // public function storeGeneralDocument(Request $request)
    // {
    //     try {
    //         $data = $request->all();
    //         $data['user_id'] = auth()->user()->id;
    //         $document = UserGeneralDocument::create(handleFiles('general-documents', $data));
    //         return redirect()->route('users.general-documents')->withToastSuccess('Data Insert Successfully!');
    //     } catch (Exception $ex) {
    //         return $ex->getMessage();
    //     }
    // }

    // public function createGeneralDocument()
    // {
    //     $title = $this->title;
    //     return view('user.general-documents.create', compact('title'));
    // }
    // public function createEducationalDocument()
    // {
    //     $title = $this->title;
    //     return view('user.educational-documents.create', compact('title'));
    // }
    public function deleteDocument(Request $request)
    {
        abort_if(Gate::denies('user_document_delete_access_admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            if ($request->file_type == 'education') {
                $document = UserEducationalDocument::find($request->file_id);
                $document->delete();
                File::delete(public_path($document->file_path));
            } else if ($request->file_type == 'general') {
                $document = UserGeneralDocument::find($request->file_id);
                $document->delete();
                File::delete(public_path($document->file_path));
            }

            return  response()->json('Data Deleted Successfully');
        } catch (Exception $ex) {
            return response()->json($ex->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Http\Requests\front\documents\DocumentDeleteRequest;
use App\Http\Requests\front\documents\DocumentStoreRequest;
use App\Http\Requests\front\documents\EducationalDocumentDeleteRequest;
use App\Http\Requests\front\documents\GeneralDocumentDeleteRequest;
use App\Http\Requests\users\UpdateUserRequest;
use App\Models\User;
use App\Models\UserDocument;
use App\Models\UserEducationalDocument;
use App\Models\UserGeneralDocument;
use Exception;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords('user');
    }
    final public function editProfile(): View
    {
        $title = 'Profile';
        return view('admin.users.edit-profile', compact('title'));
    }

    // public function submitDocument(Request $request)
    // {
    //     $id = auth()->user()->id;
    //     $document = [];
    //     if ($request->hasFile('general_file')) {
    //         $generalFiles = handleFiles(\request()->segment(2), $request->file('general_file'));
    //         foreach ($generalFiles as $file) {
    //             array_push($document, [
    //                 'file_path' => $file,
    //                 'status' => '0',
    //                 'user_id' => $id,
    //             ]);
    //         }
    //     }
    //     if ($request->hasFile('education_file')) {
    //         $educationalFiles = handleFiles(\request()->segment(2), $request->file('education_file'));
    //         foreach ($educationalFiles as $file) {
    //             array_push($document, [
    //                 'file_path' => $file,
    //                 'status' => '1',
    //                 'user_id' => $id,
    //             ]);
    //         }
    //     }
    //     $uploadDocument = UserDocument::insert($document);
    //     return redirect()->route('users.upload-documents');
    // }

    public function updateProfile(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->back()->withToastSuccess('Data Updated Successfully!');
    }

    public function deleteEducationDocument(EducationalDocumentDeleteRequest $request)
    {
        abort_if(Gate::denies('educational_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $document = UserEducationalDocument::find($request->file_id);
            $document->delete();
            File::delete(public_path($document->file_path));
            return \response()->json('File Deleted Successfully!');
        } catch (Exception $ex) {
            return \response()->json($ex->getMessage());
        }
    }
    public function deleteGeneralDocument(GeneralDocumentDeleteRequest $request)
    {
        abort_if(Gate::denies('general_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $document = UserGeneralDocument::find($request->file_id);
            File::delete(public_path($document->file_path));
            $document->delete();
            return \response()->json('File Deleted Successfully!');
        } catch (Exception $ex) {
            return \response()->json($ex->getMessage());
        }
        $document = UserGeneralDocument::find($request->file_id);
        File::delete(public_path($document->file_path));
        $document->delete();
        return \response()->json('File Deleted Successfully!');
    }

    public function generalDocument()
    {
        abort_if(Gate::denies('general_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $title = 'General Documents';
            $documents = UserGeneralDocument::where('user_id', auth()->user()->id)->get();
            return  view('user.general-documents.list', compact('title', 'documents'));
        } catch (Exception $ex) {
            return redirect()->back()->withToastError($ex->getMessage());
        }
    }
    public function educationalDocument()
    {
        abort_if(Gate::denies('educational_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $title = 'Educational Documents';
            $documents = UserEducationalDocument::where('user_id', auth()->user()->id)->get();
            return  view('user.educational-documents.list', compact('title', 'documents'));
        } catch (Exception $ex) {
            return redirect()->back()->withToastError($ex->getMessage());
        }
    }

    public function createGeneralDocument()
    {
        abort_if(Gate::denies('general_document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $title = $this->title;
            return view('user.general-documents.create', compact('title'));
        } catch (Exception $ex) {
            return redirect()->back()->withToastError($ex->getMessage());
        }
    }
    public function createEducationalDocument()
    {
        abort_if(Gate::denies('educational_document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $title = $this->title;
            return view('user.educational-documents.create', compact('title'));
        } catch (Exception $ex) {
            return redirect()->back()->withToastError($ex->getMessage());
        }
    }

    public function storeEducationalDocument(DocumentStoreRequest $request)
    {
        abort_if(Gate::denies('educational_document_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            $document = UserEducationalDocument::create(handleFiles('educational-documents', $data));
            return redirect()->route('users.eduactional-documents')->withToastSuccess('Data Insert Successfully!');
        } catch (Exception $ex) {
            return redirect()->route('users.eduactional-documents')->withToastError($ex->getMessage());
        }
    }
    public function storeGeneralDocument(DocumentStoreRequest $request)
    {
        abort_if(Gate::denies('general_document_store'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            $document = UserGeneralDocument::create(handleFiles('general-documents', $data));
            return redirect()->route('users.general-documents')->withToastSuccess('Data Insert Successfully!');
        } catch (Exception $ex) {
            return redirect()->route('users.general-documents')->withToastError($ex->getMessage());
        }
    }

    public function userDashboard()
    {
        try {
            $educationalDocument = UserEducationalDocument::where('user_id', auth()->user()->id)->count();
            $generalDocument = UserEducationalDocument::where('user_id', auth()->user()->id)->count();
            // return redirect()->route('admin.page-listing-for-intro',compact('generalDocument','educationalDocument'));
            return view('user.dashboard', compact('generalDocument', 'educationalDocument'));
        } catch (Exception $ex) {
            return redirect()->back()->withToastError($ex->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\front\forms\StoreFormRequest;
use App\Http\Requests\front\forms\UpdateFormRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class FormController extends Controller
{

    public function __construct()
    {
        $this->title = ucwords('page');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $forms =Form::latest()->get();
        // return $forms;
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $forms = Form::latest()->get();
            return datatables()->of($forms)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('action', function ($data) {
                    $edit = '';
                    $duplicate = '';
                    $view = '';
                    $delete = '';

                    $edit = '<a title="Edit" href="' . route('admin.forms.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';

                    $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';

                    $delete = '<button  title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    return $edit . $view . $delete;
                })->rawColumns(['checkbox', 'action'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.forms.list')->with($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $content['title'] = $this->title;
        return view('admin.front.forms.create')->with($content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $form = Form::create(handleFiles(\request()->segment(2), $request->validated()));
            return redirect()->route('admin.' . \request()->segment(2) . '.index')->withToastSuccess('Form Added Successfully!');
        } catch (Exception $e) {
            return redirect()->back()->withToastError('Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $news = Form::find($id);
        return \response()->json($form);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $content['title'] = $this->title;

        return view('admin.front.forms.edit', compact('form'))->with($content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $form->update(handleFiles(request()->segment(2), $request->validated()));
            return redirect()->route('admin.' . \request()->segment(2) . '.index')->withToastSuccess('Form Updated Successfully!');
        } catch (Exception $e) {
            return redirect()->back()->withToastError('Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $form->delete();
        return \response()->json('Form Deleted Successfully!');
    }
}

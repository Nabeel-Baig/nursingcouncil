<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\slide\StoreSlideRequest;
use App\Http\Requests\front\slide\UpdateSlideRequest;
use App\Models\CardDetail;
use App\Models\Slide;
use App\Models\Slider;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = ucwords('slides');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // ========================================
        // slide image is 1400 width and 600 height
        $slider = Slider::find($id);
        $content['title'] = $this->title;
        return view('admin.front.slides.create', compact('slider'))->with($content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreSlideRequest $request)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->slider_id == 1) {
            $image = getimagesize($request->slide_image);
            $width = $image[0];
            $height = $image[1];
            if (!($width >= 800  && $height >= 600)) {
                return redirect(url('admin/slides/showAllById', $request->slider_id))->withToastError('Enter Correct Size (1400 width and 600 height)');
            }
        }
        $slide = Slide::create(handleFiles(\request()->segment(2), $request->all()));
        $slide->save();
        return redirect(url('admin/slides/showAllById', $request->slider_id))->withToastSuccess('Slide Created Successfully');;
    }


    public function slidesShowedBySlider($id)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax()) {
            $slides = Slide::where('slider_id', $id)->get();
            return datatables()->of($slides)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })
                ->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset($data->slide_image) . '">';
                })
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $view = '';
                    $delete = '';
                    // ===============
                    $edit = '<a title="Edit" href="' . route('admin.slides.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    // ==============
                    return $edit . $view . $delete;
                })
                ->rawColumns(['action', 'image', 'checkbox'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.slides.list-all', compact('id'))->with($content);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $title = $this->title;
        return view('admin.front.slides.edit', compact('slide', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateSlideRequest $request, Slide $slide)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // slide image is 800 width and 600 height
        // return $slide;
        if ($request->slider_id == 1) {
            $image = getimagesize($request->slide_image);
            $width = $image[0];
            $height = $image[1];
            if (!($width >= 800  && $height >= 600)) {
                return redirect(url('admin/slides/showAllById', $request->slider_id))->withToastError('Enter Correct Size (1400 width and 600 height)');
            }
        }
        $slide->update(handleFiles(\request()->segment(2), $request->all()));
        return redirect(url('admin/slides/showAllById', $slide->slider_id))->withToastSuccess('Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // ===================================
        $slideCheck = Slide::where('slider_id', $slide->slider_id)->count('id');
        if ($slideCheck <= 3) {
            return \response()->json('You are not able to delete the sides less then 3');
        } else {
            $slide->delete();
            return \response()->json('Slide Deleted Successfully!');
        }
    }
}

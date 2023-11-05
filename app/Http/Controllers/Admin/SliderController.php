<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = ucwords('sliders');
    }
    public function index()
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if (request()->ajax()) {
            $slider = Slider::with('slides','page')->withCount('slides')->orderBy('id', 'desc')->get();
            return datatables()->of($slider)
                ->addColumn('slides_count', function ($data){
                    return '<a title="View Slides" href="' . url('admin/slides/showAllById/' . $data->id) . '" >' . $data->slides_count . '</a>&nbsp;';
                })
                ->addColumn('action', function ($data) {
                    $viewAll = '';
                        $viewAll = '<a title="Edit" href="' . route('admin.sliders.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    return $viewAll;
                })->rawColumns(['action','slides_count'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.sliders.list')->with($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = $this->title;
        return view('admin.front.sliders.edit', compact('slider','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        abort_if(Gate::denies('slider_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $slider->update($request->all());
        return redirect()->route('admin.sliders.index')->withToastSuccess('Slider Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}

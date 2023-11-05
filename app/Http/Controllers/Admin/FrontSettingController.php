<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\news\NewsSaveRequest;
use App\Http\Requests\front\news\NewsUpdateRequest;
use App\Http\Requests\front\news\SettingUpdateRequest;
use App\Http\Requests\front\setting\SettingUpdateRequest as SettingSettingUpdateRequest;
use App\Models\FrontSetting;
use App\Models\NewAndUpdate;
use App\Models\News;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class FrontSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = ucwords('setting');
    }
    public function index()
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $content['title'] = $this->title;
        return view('admin.front.front-setting.list')->with($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
     {

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(NewsSaveRequest $request)
    public function store(NewsSaveRequest $request)
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newAndUpdates = News::create($request->validated());

        return redirect()->route('admin.news-updates.index')->withToastSuccess('Data Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $front_setting = FrontSetting::first();
        $title = $this->title;
        return view('admin.front.front-setting.form', compact('title', 'front_setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(SettingSettingUpdateRequest $request,$id)
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $front_setting = FrontSetting::find($id);
        $front_setting->update(handleFilesIfPresent(request()->segment(2), $request->all(), $front_setting));
        return redirect()->route('admin.front-setting.edit',$front_setting->id)->withToastSuccess('Setting Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}

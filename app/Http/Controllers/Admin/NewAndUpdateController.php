<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\news\NewsDeleteRequest;
use App\Http\Requests\front\news\NewsSaveRequest;
use App\Http\Requests\front\news\NewsUpdateRequest;
use App\Models\NewAndUpdate;
use App\Models\News;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class NewAndUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = ucwords('news');
    }
    public function index()
    {
        // abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $news = News::orderBy('id', 'desc')->get();
            return datatables()->of($news)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })->addColumn('action', function ($data) {
                    $edit = '';
                    $duplicate = '';
                    $view = '';
                    $delete = '';

                    $edit = '<a title="Edit" href="' . route('admin.news-updates.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';

                    $view = '<button title="View" type="button" name="view" id="' . $data['id'] . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;';

                    $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    return $edit . $view . $delete;
                })->rawColumns(['checkbox', 'action', 'image'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.news-updates.list')->with($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $title = $this->title;
        return view('admin.front.news-updates.create', compact('title'));
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
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news = News::create($request->validated());

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
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $news = News::find($id);
        return \response()->json($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $newAndUpdate = News::find($id);
        $title = $this->title;
        return view('admin.front.news-updates.edit', compact('newAndUpdate', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */

    public function update(NewsUpdateRequest $request, $id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $news = News::find($id);
        $dataForUpdation = $request->validated();
        $news->news_title = $dataForUpdation['news_title'];
        $news->news_sub_title = $dataForUpdation['news_sub_title'];
        $news->news_details = $dataForUpdation['news_details'];
        if(isset($dataForUpdation['web_link'])){
            $news->web_link = $dataForUpdation['web_link'];
        }
        $news->save();
        return redirect()->route('admin.news-updates.index')->withToastSuccess('Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewAndUpdate  $newAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $news = News::find($id);
        $news->delete();
        return \response()->json('Data Deleted Successfully!');
    }


    public function massDestroy(NewsDeleteRequest $request)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        News::whereIn('id', request('ids'))->delete();
        return \response()->json('Selected records Deleted Successfully.');
    }
}

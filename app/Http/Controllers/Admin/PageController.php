<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\page\UpdatePageInroduction;
use App\Http\Requests\front\page\PageContentRequest;
use App\Models\Page;
use App\Models\PageIntroduction;
use App\Models\PagesContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = ucwords('page');
    }
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax()) {
            $pages = Page::orderBy('id', 'desc')->get();
            return datatables()->of($pages)
                ->addColumn('slides_count', function ($data) {
                    return '<a title="View Slides" href="' . url('admin/slides/showAllById/' . $data->id) . '" >' . $data->slides_count . '</a>&nbsp;';
                })
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $edit = '<a title="Edit" href="#" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    return $edit;
                })->rawColumns(['action'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.pages.list')->with($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $title = $this->title;
        return view('admin.front.pages.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $page = Page::create($request->all());
        $page->save();
        return redirect(route('admin.pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
    public function editPageContent()
    {
    }

    public function listingPageContent()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $pages = PagesContent::with('page')->whereNotNull('page_content')->orderBy('id', 'desc')->get();
            return datatables()->of($pages)
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $edit = '<a title="Edit" href="' . route('admin.edit-page-content.edit', $data->page->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    return $edit;
                })->rawColumns(['action'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.pages-content.list-page-with-content')->with($content);
    }
    public function updatePageContentData(PageContentRequest $request, $id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $page = PagesContent::where('page_id', $id)->first();
        $page->page_content = $request->page_content;
        $page->update();
        $content['title'] = $this->title;
        return redirect(route('admin.page-listing-for-content'))->withToastSuccess('Data Updated Successfully!');
    }
    public function editPageContentData($id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $page = PagesContent::with('page')->where('page_id', $id)->first();
        $content['title'] = $this->title;
        return view('admin.front.pages-content.edit-page-with-content', compact('page'))->with($content);
    }

    public function editPageIntroductionData($id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $pageIntroData = PageIntroduction::with('page')->where('page_id', $id)->first();
        $content['title'] = $this->title;
        return view('admin.front.pages-content.edit-page-with-introduction', compact('pageIntroData'))->with($content);
    }

    public function listingPageIntro()
    {
        // return 'hello';
        // return $pages = PageIntroduction::with('page')->whereNotNull('sub_title')->latest()->get();
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $pages = PageIntroduction::with('page')->whereNotNull('sub_title')->latest()->get();
            return datatables()->of($pages)
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $edit = '<a title="Edit" href="' . route('admin.edit-page-introduction.edit', $data->page->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    return $edit;
                })->rawColumns(['action'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.pages-content.list-page-with-introduction')->with($content);
    }

    public function updatePageIntroductionData(UpdatePageInroduction $request, $id)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $page = PageIntroduction::where('page_id', $id)->first();
        $page->update(handleFiles('page-info', $request->all()));
        $content['title'] = $this->title;
        return redirect(route('admin.page-listing-for-intro'))->withToastSuccess('Data Updated Successfully!');
    }
}

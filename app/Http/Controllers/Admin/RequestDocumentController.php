<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RequestDocument;
use Illuminate\Http\Request;

class RequestDocumentController extends Controller
{
    public function __construct()
    {
        $this->title = ucwords(str_replace('-', ' ', request()->segment(2)));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $documents = RequestDocument::with("user")->get();
            return datatables()->of($documents)->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.request-document.list')->with($content);
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
     * @param  \App\Models\RequestDocument  $requestDocument
     * @return \Illuminate\Http\Response
     */
    public function show(RequestDocument $requestDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestDocument  $requestDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestDocument $requestDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestDocument  $requestDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestDocument $requestDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestDocument  $requestDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestDocument $requestDocument)
    {
        //
    }
}

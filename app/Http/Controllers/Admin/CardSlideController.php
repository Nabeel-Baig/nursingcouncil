<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\card\StoreSlideRequest;
use App\Http\Requests\front\card\UpdateSlideRequestt;
// use App\Http\Requests\front\card\UpdateSlideRequest;
// use App\Http\Requests\front\card\UpdateSlideRequest;
use App\Models\Card;
use App\Models\CardDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CardSlideController extends Controller
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
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $card = Card::find($id);
        $content['title'] = $this->title;
        return view('admin.front.card-slides.create', compact('card'))->with($content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlideRequest $request)
    {
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $cardSlide = CardDetail::create($request->validated());
            return redirect(url('admin/cards/showAllById', $request->card_id))->withToastSuccess('Slide Created Successfully');
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardDetail  $cardDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CardDetail $cardDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardDetail  $cardDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $cardSlide = CardDetail::find($id);
        $title = $this->title;
        return view('admin.front.card-slides.edit', compact('cardSlide', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CardDetail  $cardDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlideRequestt $request, $id)
    {
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $cardDetail = CardDetail::find($id);
        $cardDetail->update($request->validated());
        return redirect(url('admin/cards/showAllById', $cardDetail->card_id))->withToastSuccess('Data Updated Successfully');
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        try {
            $slideCheck = CardDetail::where('id', $id)->first();
            $slideCount = $slideCheck->where('card_id', $slideCheck->card_id)->count('id');
            if ($slideCount <= 3) {
                return \response()->json('You are not able to delete the sides less then 3');
            } else {
                $slideCheck->delete();
                // return \response()->json($slideCheck);
                return \response()->json('Slide Deleted Successfully!');
            }
        } catch (Exception $ex) {
            return response()->json($ex->getMessage());
        }
    }

    public function slidesShowedByCards($id)
    {
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $cards = CardDetail::where('card_id', $id)->get();
            return datatables()->of($cards)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data['id'] . '">';
                })
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $view = '';
                    $delete = '';
                    // ===============
                    $edit = '<a title="Edit" href="' . route('admin.card-slides.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    $delete = '<button title="Delete" type="button" name="delete" id="' . $data['id'] . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                    // ==============
                    return $edit . $view . $delete;
                })
                ->rawColumns(['action', 'checkbox'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.card-slides.list-all', compact('id'))->with($content);
    }
}

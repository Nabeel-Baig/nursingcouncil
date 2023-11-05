<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = ucwords('cards');
    }
    public function index()
    {
        // $cards = Card::with('cardsslides','page')->withCount('cardsslides')->orderBy('id', 'desc')->get();
        // return $cards;
        abort_if(Gate::denies('card_managment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $cards = Card::with('cardsslides','page')->withCount('cardsslides')->orderBy('id', 'desc')->get();
            return datatables()->of($cards)
                ->addColumn('cardsslides_count', function ($data){
                    return '<a title="View Cards Slides" href="' . url('admin/cards/showAllById/' . $data->id) . '" >' . $data->cardsslides_count . '</a>&nbsp;';
                })
                ->addColumn('action', function ($data) {
                    $viewAll = '';
                        $viewAll = '<a title="Edit" href="' . route('admin.cards.edit', $data->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>&nbsp;';
                    return $viewAll;
                })->rawColumns(['action','cardsslides_count'])->make(true);
        }
        $content['title'] = $this->title;
        return view('admin.front.cards.list')->with($content);
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
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}

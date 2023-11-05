@extends('layouts.front-master')
@section('main-content')
    <main>


        <section class="recentPages p-0 bg-white  mt-5">
            <div class="container">
                <div class="row">
                    <div class="mainContent">
                        <div class="row">
                            @foreach ($forms as $form)
                                <div class="col-lg-6 mb-3">
                                    <div class="updatePageCard shadow border rounded p-3">
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <i class="fas fa-print fa-2x"></i>
                                            </div>
                                            <div class="col-11">
                                                <a target="_blank" href="{{asset("$form->attachment")}}">{{$form->title}}</a>
                                                <br>
                                                <span>{{$form->description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <div class="modal fade aboutVideo" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://www.youtube.com/embed/gXaZ2U_BuoE" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.master')
@section('title') Edit {{ $title }} @endsection
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') {{ $title }} @endslot
        @slot('title') {{ "Edit ".$title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.card-slides.update',[$cardSlide->id]) }}" class="custom-validation">
                        @csrf
                        @method('PUT')
                        {{-- ========================== --}}
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','Title')) }}</label>
                            <input type="text" class="form-control @error('card_title') parsley-error @enderror" name="card_title"
                                   id="card_title" placeholder="{{ ucwords(str_replace('_',' ','title')) }}" value="{{ $cardSlide->card_title }}" required/>
                            @error('card_title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Details</label>
                            {{-- <input type="text"  value="{{ $cardSlide->card_details }}" required/> --}}

                            <textarea class="form-control @error('card_details') parsley-error @enderror"
                            name="card_details" id="card_details" placeholder="{{ ucwords(str_replace('_',' ','Detail')) }}" cols="10" rows="5">{{ $cardSlide->card_details }}</textarea>
                            @error('slide_sub_title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <input type="hidden" value="{{ $cardSlide->card_id }}"> --}}

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
@endsection
@section('script-bottom')


@endsection

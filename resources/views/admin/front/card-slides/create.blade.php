@extends('layouts.master')
@section('title') Create {{ $title }} @endsection
@section('css')
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') {{ $title }} @endslot
        @slot('title') {{ "Create ".$title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.card-slides.store') }}" class="custom-validation"
                          enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="card_id" value="{{ $card->id }}">
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','Title')) }}</label>
                            <input type="text" class="form-control @error('card_title') parsley-error @enderror" name="card_title"
                                   id="card_title" placeholder="{{ ucwords(str_replace('_',' ','title')) }}" value="{{ old('card_title') }}" required/>
                            @error('card_title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Detail</label>
                            <textarea class="form-control @error('card_details') parsley-error @enderror"
                            name="card_details" id="card_details" placeholder="{{ ucwords(str_replace('_',' ','detail')) }}" value="{{ old('card_details') }}" cols="10" rows="5"></textarea>
                            {{-- <input type="text" /> --}}
                            @error('card_details')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
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
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>

    {{-- =================================================================================== --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
    {{-- =================================================================================== --}}
@endsection
@section('script-bottom')
<script>
</script>

@endsection


@extends('layouts.master')
@section('title') Edit {{ $title }} @endsection
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
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

                    <form method="POST" action="{{ route('admin.sliders.update',[$slider->id]) }}" class="custom-validation">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','page slider')) }}</label>
                            <input type="text" class="form-control @error('page_slider_name') parsley-error @enderror"
                                   name="page_slider_name" id="page_slider_name" placeholder="{{ ucwords(str_replace('_',' ','page_slider_name')) }}" value="{{ old('page_slider_name', $slider->page_slider_name ?? '') }}"/>
                            @error('page_slider_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','Sub Title')) }}</label>
                            <input type="text" class="form-control @error('slider_title') parsley-error @enderror"
                                   name="slider_title" id="slider_title" placeholder="{{ ucwords(str_replace('_',' ','slider_title')) }}" value="{{ old('news_sub_title', $slider->slider_title ?? '') }}"/>
                            @error('slider_title')
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
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
@endsection
@section('script-bottom')
<script>
        $(document).ready(function() {

        $('#technig').summernote({

        height:300,

        });
        });
</script>

@endsection

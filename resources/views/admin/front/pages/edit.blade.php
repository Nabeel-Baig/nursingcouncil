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

                    <form method="POST" action="{{ route('admin.slides.update',[$slide->id]) }}" class="custom-validation">
                        @csrf
                        @method('PUT')
                        {{-- ========================== --}}
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','Title')) }}</label>
                            <input type="text" class="form-control @error('slide_title') parsley-error @enderror" name="slide_title"
                                   id="slide_title" placeholder="{{ ucwords(str_replace('_',' ','title')) }}" value="{{ $slide->slide_title }}" required/>
                            @error('slide_title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Title</label>
                            <input type="text" class="form-control @error('slide_sub_title') parsley-error @enderror"
                                   name="slide_sub_title" id="slide_sub_title" placeholder="{{ ucwords(str_replace('_',' ','sub title')) }}" value="{{ $slide->slide_sub_title }}" required/>
                            @error('slide_sub_title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="file" id="avatar" class="dropify" name="slide_image" value="{{ old('slide_image') }}" data-height="200">
                            @error('slide_image')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- //////////////////// --}}
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
<script>
        // $(document).ready(function() {

        // $('#technig').summernote({

        // height:300,

        // });
        // });
        $(function () {
            $('#avatar').dropify({
                defaultFile: "{{ asset($slide->slide_image) }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            });
        })
</script>

@endsection

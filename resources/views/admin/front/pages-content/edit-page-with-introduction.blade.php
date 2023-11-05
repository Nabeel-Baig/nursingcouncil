@extends('layouts.master')
@section('title') Edit {{ $title }} @endsection
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
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
                    <div>
                        <b>Page Name :  </b> {{ str_replace('-',' ',$pageIntroData->page->page_name) }}
                    </div>
                    <form method="POST" action="{{ route('admin.edit-page-introduction.updatePageIntro',[$pageIntroData->page_id]) }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','Title')) }}</label>
                            <input type="text" class="form-control @error('title') parsley-error @enderror" name="title"
                                   id="title" placeholder="{{ ucwords(str_replace('_',' ','title')) }}" value="{{ $pageIntroData->title }}" required/>
                            @error('title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">

                            <br><label class="form-label">{{ ucwords(str_replace('_',' ','sub_title')) }}</label>
                            <textarea name="sub_title" id="sub_title" rows="5" cols="40" class="form-control"
                            required>{{ $pageIntroData->sub_title }}</textarea>
                            @error('sub_title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">

                            <br><label class="form-label">{{ ucwords(str_replace('_',' ','Detail')) }}</label>
                            <textarea name="detail" id="detail" rows="5" cols="40" class="form-control"
                            required>{{ $pageIntroData->detail }}</textarea>
                            @error('detail')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','link')) }}</label>
                            <input type="text" class="form-control @error('link') parsley-error @enderror" name="link"
                                   id="link" placeholder="{{ ucwords(str_replace('_',' ','link')) }}" value="{{ $pageIntroData->link }}" required/>
                            @error('link')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="file" id="image" class="dropify @error('image') parsley-error @enderror" name="image" value="{{ old('image') }}" data-height="200">
                            @error('image')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
@endsection
@section('script-bottom')
<script>
        $(document).ready(function() {

        $('#sub_title').summernote({

        height:150,

        });
        $('#detail').summernote({

        height:150,

        });

        });

        $(function () {
            $('#image').dropify({
                defaultFile: "{{ $pageIntroData->image }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            });
        })
</script>

@endsection

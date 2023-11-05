@extends('layouts.master')
@section('title')
    Create {{ $title }}
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            {{ $title }}
        @endslot
        @slot('title')
            {{ 'Create ' . $title }}
        @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.forms.update', $form->id) }}" class="custom-validation"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_', ' ', 'Title')) }}</label>
                            <input required type="text" class="form-control @error('title') parsley-error @enderror"
                                name="title" id="title" placeholder="{{ ucwords(str_replace('_', ' ', 'title')) }}"
                                value="{{ $form->title }}" required />
                            @error('title')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_', ' ', 'description')) }}</label>
                            <textarea required name="description" id="technig" rows="5" cols="40" class="form-control">{{ $form->description }}</textarea>
                            @error('description')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="file" id="attachment" class="dropify" name="attachment"
                                value="{{ old('attachment') }}" data-height="200">
                            @error('attachment')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
@endsection
@section('script-bottom')
    <script>
        $(function() {
            $('.dropify').dropify({
                defaultFile: "{{ asset($form->attachment) }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            });
        })
    </script>
@endsection

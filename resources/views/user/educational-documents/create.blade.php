@extends('layouts.master')
@section('title')
    Create {{ $title }}
@endsection
@section('css')
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            {{ $title }}
        @endslot
        @slot('title')
            {{ 'Update ' . $title }}
        @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('users.store-educational-documents') }}" class="custom-validation"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_', ' ', 'file_name')) }}</label>
                            <input type="text" class="form-control @error('file_name') parsley-error @enderror"
                                value="{{ old('file_name') }}" name="file_name" id="file_name"
                                placeholder="{{ ucwords(str_replace('_', ' ', 'file_name')) }}" required />
                            @error('file_name')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_', ' ', 'Educational Document')) }}</label>
                            <input type="file" id="file_path" class="dropify" name="file_path"
                                data-height="200" required>
                            @error('file_path')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
@endsection
@section('script-bottom')
    <script>
        $(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drop a file OR click',
                }
            });

        })
    </script>
    <script></script>
@endsection

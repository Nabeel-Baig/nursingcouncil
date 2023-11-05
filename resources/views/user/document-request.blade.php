@extends('layouts.master')
@section('title')
    Create {{ $title }}
@endsection
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            {{ $title }}
        @endslot
        @slot('title')
            {{ $title }}
        @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('users.document-request-store') }}" class="custom-validation">
                        @csrf

                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_', ' ', 'subject')) }}</label>
                            <input type="text" class="form-control @error('subject') parsley-error @enderror"
                                value="{{ old('subject') }}" name="subject" id="subject"
                                placeholder="{{ ucwords(str_replace('_', ' ', 'subject')) }}" required />
                            @error('subject')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_', ' ', 'detail')) }}</label>
                            {{-- <input type="text"
                                value="{{ $role->title ?? '' }}" name="title" id="title"
                                placeholder="{{ ucwords(str_replace('_', ' ', 'title')) }}" required /> --}}
                            <textarea class="form-control @error('detail') parsley-error @enderror" name="detail" placeholder="Details"
                                id="detail" cols="30" rows="5"></textarea>
                            @error('detail')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        &nbsp;

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit
                                </button>
                            </div>
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
@endsection
@section('script-bottom')
    <script>
        $(function() {
            $('.select2').select2();
            $('.select-all').click(function() {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })
            $('.deselect-all').click(function() {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        })
    </script>
@endsection

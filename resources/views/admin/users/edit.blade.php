@extends('layouts.master')
@section('title') Edit {{ $title }} @endsection
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
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

                    <form method="POST" action="{{ route('admin.users.update',[$user->id]) }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','first_name')) }}</label>
                            <input type="text" class="form-control @error('first_name') parsley-error @enderror" name="first_name"
                                   id="first_name" placeholder="{{ ucwords(str_replace('_',' ','first_name')) }}" value="{{ old('first_name', isset($user) ? $user->first_name : '') }}" required/>
                            @error('first_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','middle_name')) }}</label>
                            <input type="text" class="form-control @error('middle_name') parsley-error @enderror" name="middle_name"
                                   id="middle_name" placeholder="{{ ucwords(str_replace('_',' ','middle_name')) }}" value="{{ old('middle_name', isset($user) ? $user->middle_name : '') }}" required/>
                            @error('middle_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','last_name')) }}</label>
                            <input type="text" class="form-control @error('last_name') parsley-error @enderror" name="last_name"
                                   id="last_name" placeholder="{{ ucwords(str_replace('_',' ','last_name')) }}" value="{{ old('last_name', isset($user) ? $user->last_name : '') }}" required/>
                            @error('name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','email')) }}</label>
                            <input type="email" class="form-control @error('email') parsley-error @enderror"
                                   name="email" id="email" placeholder="{{ ucwords(str_replace('_',' ','email')) }}" value="{{ old('email', $user->email ?? '') }}"/>
                            @error('email')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','phone')) }}</label>
                            <input type="number" class="form-control @error('phone') parsley-error @enderror"
                                   name="phone" id="phone" placeholder="{{ ucwords(str_replace('_',' ','phone')) }}" value="{{ old('phone', $user->phone ?? '') }}" required/>
                            @error('phone')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            $('#avatar').dropify({
                defaultFile: "{{ asset($user->avatar) }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            });
        })
    </script>
@endsection

@extends('layouts.master')
@section('title') Create {{ $title }} @endsection
@section('css')
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
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

                    <form method="POST" action="{{ route('admin.users.store') }}" class="custom-validation"
                          enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="mb-3">
                            <label class="required" for="role">Select Roles</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select All</span>
                                <span class="btn btn-danger btn-xs deselect-all"
                                      style="border-radius: 0">Deselect All</span>
                            </div>
                            <select class="form-control select2 {{ $errors->has('roles') ? 'parsley-error' : '' }}"
                                    name="roles[]" id="roles" multiple required>
                                @foreach($roles as $id => $roles)
                                    <option value="{{ $id }}" {{ in_array($id, old('role', [])) ? 'selected' : '' }}>{{ $roles }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <span class="text-danger">{{ $errors->first('roles') }}</span>
                            @endif
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','select brand (Required)')) }}</label>
                            <select name="brand_id" id="brand_id" class="form-control @error('brand_id') parsley-error @enderror" required>
                                <option value="">{{ ucwords(str_replace('_',' ','select brand name')) }}</option>
                                @forelse($brands as $id => $brand)
                                    <option value="{{ $brand->id}}">{{ $brand->brand_name }}</option>
                                    @empty
                                @endforelse
                            </select>

                            @error('user_id')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','first_name')) }}</label>
                            <input type="text" class="form-control @error('first_name') parsley-error @enderror" name="first_name"
                                   id="first_name" placeholder="{{ ucwords(str_replace('_',' ','first_name')) }}" value="{{ old('first_name') }}" required/>
                            @error('first_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','middle_name')) }}</label>
                            <input type="text" class="form-control @error('middle_name') parsley-error @enderror" name="middle_name"
                                   id="middle_name" placeholder="{{ ucwords(str_replace('_',' ','middle_name')) }}" value="{{ old('middle_name') }}" required/>
                            @error('middle_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','last_name')) }}</label>
                            <input type="text" class="form-control @error('last_name') parsley-error @enderror" name="last_name"
                                   id="last_name" placeholder="{{ ucwords(str_replace('_',' ','last_name')) }}" value="{{ old('last_name') }}" required/>
                            @error('last_name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','email')) }}</label>
                            <input type="email" class="form-control @error('email') parsley-error @enderror"
                                   name="email" id="email" autocomplete="off" placeholder="{{ ucwords(str_replace('_',' ','email')) }}" value="{{ old('email') }}" required/>
                                   {{-- name="email" autocomplete="off" id="email" placeholder="{{ ucwords(str_replace('_',' ','email')) }}" value="{{ old('email') }}" required/> --}}
                            @error('email')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','phone')) }}</label>
                            <input type="number" class="form-control @error('phone') parsley-error @enderror"
                                   name="phone" id="phone" placeholder="{{ ucwords(str_replace('_',' ','phone')) }}" value="{{ old('phone') }}" required/>
                            @error('phone')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','dob')) }}</label>
                            <input type="date" class="form-control"
                                   name="dob" id="dob" placeholder="{{ ucwords(str_replace('_',' ','dob')) }}" value="{{ old('dob') }}"/>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','address')) }}</label>
                            <textarea class="form-control" name="address" id="address" placeholder="{{ ucwords(str_replace('_',' ','address')) }}">{{ old('address') }}</textarea>
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','General Documents')) }}</label>
                            <input type="file" id="general_file" class="dropify" name="general_file" data-height="200" multiple>
                            @error('general_file')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','Educational Documents')) }}</label>
                            <input type="file" id="education_file" class="dropify" name="education_file"  data-height="200" multiple>
                            @error('education_file')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div> --}}

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
        $(function () {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drop a file OR click',
                }
            });

        })
    </script>
@endsection

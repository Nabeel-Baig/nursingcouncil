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

                    <form method="POST" action="{{ route('admin.assigned-leads.store') }}" class="custom-validation"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
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
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','select main lead (Required)')) }}</label>
                            <select name="user_id" id="user_id" class="form-control @error('user_id') parsley-error @enderror" required>
                                <option value="">{{ ucwords(str_replace('_',' ','select main lead')) }}</option>
                                @forelse($mainLeads as $id => $mainLead)
                                    <option value="{{ $mainLead->id}}">{{ $mainLead->name }}</option>
                                    @empty
                                @endforelse
                            </select>
                            @error('user_id')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead name (Required)')) }}</label>
                            <input type="text" class="form-control @error('name') parsley-error @enderror"
                                   name="name" id="name" placeholder="{{ ucwords(str_replace('_',' ','name')) }}" value="{{ old('name') }}" required/>
                            @error('name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead email (Required)')) }}</label>
                            <input type="email" class="form-control @error('email') parsley-error @enderror"
                                   name="email" id="email" placeholder="{{ ucwords(str_replace('_',' ','email')) }}" value="{{ old('email') }}" required/>
                            @error('email')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead phone (Required)')) }}</label>
                            <input type="text" class="form-control @error('phone') parsley-error @enderror" name="phone"
                                   id="name" placeholder="{{ ucwords(str_replace('_',' ','phone')) }}" value="{{ old('phone') }}" required/>
                            @error('phone')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead_country')) }}</label>
                            <input type="text" class="form-control @error('lead_country') parsley-error @enderror" name="lead_country"
                                   id="lead_country" placeholder="{{ ucwords(str_replace('_',' ','lead_country')) }}" value="{{ old('lead_country') }}"/>
                            @error('lead_country')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead_state')) }}</label>
                            <input type="text" class="form-control @error('lead_state') parsley-error @enderror" name="lead_state"
                                   id="lead_state" placeholder="{{ ucwords(str_replace('_',' ','lead_state')) }}" value="{{ old('lead_state') }}"/>
                            @error('lead_state')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead_city')) }}</label>
                            <input type="text" class="form-control @error('lead_city') parsley-error @enderror" name="lead_city"
                                   id="lead_city" placeholder="{{ ucwords(str_replace('_',' ','lead_city')) }}" value="{{ old('lead_city') }}"/>
                            @error('lead_city')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead_company')) }}</label>
                            <input type="text" class="form-control @error('lead_company') parsley-error @enderror"
                                   name="lead_company" id="lead_company" placeholder="{{ ucwords(str_replace('_',' ','lead_company')) }}" value="{{ old('lead_company') }}"/>
                            @error('lead_company')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead_website')) }}</label>
                            <input type="text" class="form-control @error('lead_website') parsley-error @enderror"
                                   name="lead_website" id="lead_website" placeholder="{{ ucwords(str_replace('_',' ','lead_website')) }}" value="{{ old('lead_website') }}"/>
                            @error('lead_website')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_',' ','lead password')) }}</label>
                            <input type="text" class="form-control @error('password') parsley-error @enderror"
                                   name="password" id="password" placeholder="{{ ucwords(str_replace('_',' ','password')) }}" value="{{ old('password') }}"/>
                            @error('password')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="file" id="avatar" class="dropify" name="avatar" value="{{ old('avatar') }}" data-height="200">
                            @error('avatar')
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
        $(function () {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drop a file OR click',
                }
            });
            $('.select2').select2();
            $('.select-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })
            $('.deselect-all').click(function () {
                let $select2 = $(this).parent().siblings('.select2')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        })
    </script>
@endsection

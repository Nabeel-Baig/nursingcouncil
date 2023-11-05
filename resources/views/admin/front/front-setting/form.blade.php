@extends('layouts.master')
@section('title') Create {{ $title }} @endsection
@section('css')
    <!-- Plugins css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') {{ $title }} @endslot
        @slot('title') {{ "Edit ".$title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.front-setting.update', [$front_setting->id]) }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','name')) }}</label>
                            <input type="text" class="form-control @error('name') parsley-error @enderror"
                                   value="{{ $front_setting->name ?? '' }}" name="name" id="name"
                                   placeholder="{{ ucwords(str_replace('_',' ','name')) }}" required/>
                            @error('name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','title')) }}</label>
                            <input type="text" class="form-control @error('title') parsley-error @enderror"
                                   value="{{ $front_setting->title ?? '' }}" name="title" id="title"
                                   placeholder="{{ ucwords(str_replace('_',' ','title')) }}" required/>
                            @error('title')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','youtube_link')) }}</label>
                            <input type="text" class="form-control @error('youtube_link') parsley-error @enderror"
                                   value="{{ $front_setting->youtube_link ?? '' }}" name="youtube_link" id="youtube_link"
                                   placeholder="{{ ucwords(str_replace('_',' ','youtube_link')) }}" required/>
                            @error('youtube_link')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','facebook_link')) }}</label>
                            <input type="text" class="form-control @error('fb_link') parsley-error @enderror"
                                   value="{{ $front_setting->fb_link ?? '' }}" name="fb_link" id="fb_link"
                                   placeholder="{{ ucwords(str_replace('_',' ','facebook link')) }}" required/>
                            @error('fb_link')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','twitter_link')) }}</label>
                            <input type="text" class="form-control @error('twitter_link') parsley-error @enderror"
                                   value="{{ $front_setting->twitter_link ?? '' }}" name="twitter_link" id="twitter_link"
                                   placeholder="{{ ucwords(str_replace('_',' ','twitter_link')) }}" required/>
                            @error('twitter_link')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','insta_link')) }}</label>
                            <input type="text" class="form-control @error('insta_link') parsley-error @enderror"
                                   value="{{ $front_setting->insta_link ?? '' }}" name="insta_link" id="insta_link"
                                   placeholder="{{ ucwords(str_replace('_',' ','insta_link')) }}" required/>
                            @error('insta_link')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- ==================== --}}
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','contact_number')) }}</label>
                            <input type="text" class="form-control @error('contact_number') parsley-error @enderror"
                                   value="{{ $front_setting->contact_number ?? '' }}" name="contact_number" id="contact_number"
                                   placeholder="{{ ucwords(str_replace('_',' ','contact_number')) }}" required/>
                            @error('contact_number')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','contact_email')) }}</label>
                            <input type="email" class="form-control @error('contact_email') parsley-error @enderror"
                                   value="{{ $front_setting->contact_email ?? '' }}" name="contact_email" id="contact_email"
                                   placeholder="{{ ucwords(str_replace('_',' ','contact_email')) }}" required/>
                            @error('contact_email')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','location')) }}</label>
                            <input type="text" class="form-control @error('location') parsley-error @enderror"
                                   value="{{ $front_setting->location ?? '' }}" name="location" id="location"
                                   placeholder="{{ ucwords(str_replace('_',' ','location')) }}" required/>
                            @error('location')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','footer_info')) }}</label>
                            <input type="text" class="form-control @error('footer_info') parsley-error @enderror"
                                   value="{{ $front_setting->footer_info ?? '' }}" name="footer_info" id="footer_info"
                                   placeholder="{{ ucwords(str_replace('_',' ','footer_info')) }}" required/>
                            @error('footer_info')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','copyright_info')) }}</label>
                            <input type="text" class="form-control @error('copyright_info') parsley-error @enderror"
                                   value="{{ $front_setting->copyright_info ?? '' }}" name="copyright_info" id="copyright_info"
                                   placeholder="{{ ucwords(str_replace('_',' ','copyright_info')) }}" required/>
                            @error('copyright_info')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!--<div class="form-group">-->
                        <!--    <label>{{ ucwords(str_replace('_',' ','logo')) }}</label>-->
                        <!--    <input type="file" id="logo" class="dropify" name="logo" data-height="200">-->
                        <!--    @error('logo')-->
                        <!--    <span class="text-red">{{ $message }}</span>-->
                        <!--    @enderror-->
                        <!--</div>-->

                        <!--<div class="form-group">-->
                        <!--    <label>{{ ucwords(str_replace('_',' ','favicon')) }}</label>-->
                        <!--    <input type="file" id="favicon" class="dropify" name="favicon" data-height="200">-->
                        <!--    @error('favicon')-->
                        <!--    <span class="text-red">{{ $message }}</span>-->
                        <!--    @enderror-->
                        <!--</div>-->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            $('#logo').dropify({
                defaultFile: "{{ asset($front_setting->logo) }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            });

            $('#favicon').dropify({
                defaultFile: "{{ asset($front_setting->favicon) }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            })
        })
    </script>
@endsection

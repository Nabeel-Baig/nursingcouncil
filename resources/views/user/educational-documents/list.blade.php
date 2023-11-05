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
        {{ 'User' }}
        @endslot
        @slot('title')
            {{  $title ?? '' }}
        @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <a class="btn btn-info" href="{{ route('users.create-educational-documents') }}">Add</a>
                    </div>
                    {{-- <h4 class="card-title mb-4">Attached Files</h4> --}}
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle table-hover mb-0" id="file-table-uploaded">
                            <tbody id="file-table">
                                @foreach ($documents as $key => $file)
                                    <tr id='file-{{ $file->id }}'>
                                        <td style="width: 45px;">
                                            <div class="avatar-sm">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                                    #
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $file->file_name }}
                                                    </a></h5>
                                            {{-- <small>Size : 3.25 MB</small> --}}
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <a target="_blank" href="{{ URL::asset($file->file_path) }}"
                                                    class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                                <a type="button" onclick="deleteFile({{ $file->id }})"
                                                    class="text-dark"><i
                                                        class="text-danger bx bx-calendar-x h3 m-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{-- <form method="POST" action="{{ route('users.submit-document') }}" class="custom-validation"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_', ' ', 'General Documents')) }}</label>
                            <input type="file" id="general_file" class="dropify" name="general_file[]" data-height="200"
                                multiple>
                            @error('general_file')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ ucwords(str_replace('_', ' ', 'Educational Documents')) }}</label>
                            <input type="file" id="education_file" class="dropify" name="education_file[]"
                                data-height="200" multiple>
                            @error('education_file')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div>
                    </form> --}}

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div id="confirmModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
    <script>
        function deleteFile(fileId) {
            let url = '{{ route('users.document-educational.delete') }}';
            let rowIndex = 'table#file-table-uploaded tr#file-'+fileId;
            $('#confirmModal').modal('show');
            $(document).on('click', '#ok_delete', function() {

                $.ajax({
                    type: "post",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'file_id': fileId
                    },
                    success: function(data) {

                        console.log("success");
                        console.log(data);
                        $(rowIndex).remove();
                        $('#confirmModal').modal('hide');
                        toastr.success(data);
                    },
                    error: function(error) {
                        console.log("error");
                        console.log(error);
                        $('#confirmModal').modal('hide');
                    }
                })
            });
        }
    </script>
@endsection

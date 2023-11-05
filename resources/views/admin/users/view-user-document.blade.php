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
                    <div class="float-right">
                        <a class="btn btn-info" href="{{ route('admin.users.educational-document',$id) }}">Add a Educational Document</a>
                        <a class="btn btn-info" href="{{ route('admin.users.general-document',$id) }}">Add a General Document</a>
                    </div>
                    {{-- ======================================== --}}
                    {{-- <h4 class="card-title mb-4">Attached Files</h4> --}}
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle table-hover mb-0 file-table-uploaded">
                            <tbody id="file-table">
                                <h4 class="">Documents</h4>
                                @foreach ($documents['educationalDocument'] as $key => $file)
                                    <tr id='file-{{ $file->id }}'>
                                        <td style="width: 45px;">
                                            <div class="avatar-sm">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                                    {{-- <i class="bx bxs-file-doc"></i> --}}
                                                    #
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">
                                                    {{ $file->file_name }}</a></h5>
                                            {{-- <small>Size : 3.25 MB</small> --}}
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <a target="_blank" href="{{ URL::asset($file->file_path) }}"
                                                    class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                                <a type="button" onclick="deleteFile({{ $file->id }},'education')"
                                                    class="text-dark"><i
                                                        class="text-danger bx bx-calendar-x h3 m-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <h4 class="">General Files</h4> --}}
                                @foreach ($documents['generalDocument'] as $key => $file)
                                    <tr id='file-{{ $file->id }}'>
                                        <td style="width: 45px;">
                                            <div class="avatar-sm">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                                    {{-- <i class="bx bxs-file-doc"></i> --}}
                                                    #
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">
                                                    {{ $file->file_name }}</a></h5>
                                            {{-- <small>Size : 3.25 MB</small> --}}
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <a target="_blank" href="{{ URL::asset($file->file_path) }}"
                                                    class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                                <a type="button" onclick="deleteFile({{ $file->id }},'general')"
                                                    class="text-dark"><i
                                                        class="text-danger bx bx-calendar-x h3 m-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


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
        function deleteFile(fileId,fileType) {
            let url = '{{ route('admin.users.document.delete') }}';
            let rowIndex = 'table#file-table-uploaded tr#file-' + fileId;
            // alert(fileType);
            // return false;
            $('#confirmModal').modal('show');
            $(document).on('click', '#ok_delete', function() {

                $.ajax({
                    type: "post",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'file_id': fileId,
                        'file_type' : fileType
                    },
                    success: function(data) {
                        $('#confirmModal').modal('hide');
                        toastr.success(data);
                        $(rowIndex).remove();
                    },
                    error: function(error) {
                        $('#confirmModal').modal('hide');
                        toastr.success(error);
                    }
                })
            });
        }
    </script>
@endsection

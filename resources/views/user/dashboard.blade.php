@extends('layouts.master')
@section('css')
<script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


@endsection
@section('title') @lang('translation.Dashboards') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') User @endslot
        @slot('title') Dashboard @endslot
    @endcomponent
    <div class="">
        <div class="">
            <div class="container">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mini-stats-wid">
                                <div class="card-body border rounded  border-light">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">General Document</p>
                                            <h4 class="mb-0">{{ $generalDocument }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mini-stats-wid">
                                <div class="card-body border rounded  border-light">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Educational Document</p>
                                            <h4 class="mb-0">{{ $educationalDocument }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

    @section('script')

    @endsection
@endsection
@section('script-bottom')
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
{{-- ========================================= --}}


@endsection

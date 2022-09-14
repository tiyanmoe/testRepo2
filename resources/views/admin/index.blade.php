@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Dashboards')

    <div class="row layout-top-spacing">

        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <div class="col-12 text-center">
                        <img style="max-width: 300px" src="{{ asset('cork/assets/img/cv.png') }}">
                        <h1 class="">Selamat Datang di Admin Side CV</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-three">
                <div class="widget-heading">
                    <h5 class="">Summary</h5>

                </div>
                <div class="widget-content">

                    <div class="order-summary">

                        <div class="summary-list summary-income">
                            <div class="summery-info">
                                <div class="w-icon">
                                    <i data-feather="briefcase"></i>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Project <span class="summary-count"> </span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list summary-income">
                            <div class="summery-info">
                                <div class="w-icon">
                                    <i data-feather="users"></i>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Client <span class="summary-count"> </span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

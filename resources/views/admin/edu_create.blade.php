@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Educations')
    @php($bc2 = 'Create Educations')

    <div class="row layout-top-spacing">
        <div id="flActionButtons" class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Create Educations</h4>
                        </div>
                    </div>
                </div>
                    <form class="form-vertical" action="/edgo" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="widget-content widget-content-area col-12 row d-flex">
                            <div class="col-6">
                                <div class="form-group mb-4">
                                    <label class="control-label">Name:</label>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Year Start:</label>
                                    <input name="year_start" class="form-control yearpicker" type="text">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Year End:</label>
                                    <input name="year_end" class="form-control yearpicker" type="text">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Grade:</label>
                                    <select class="selectpicker form-control" name="grade" data-live-search="true">
                                        <option value="1">SD</option>
                                        <option value="2">SMP</option>
                                        <option value="3">SMA/K</option>
                                        <option value="4">College</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Address:</label>
                                    <input type="text" name="address" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Descriptions:</label>
                                    <textarea class="form-control" name="descriptions"></textarea>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $(".yearpicker").yearpicker()
        $(".yearpicker2").yearpicker()
    });
</script>
@endsection

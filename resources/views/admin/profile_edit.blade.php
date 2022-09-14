@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Profile')
    @php($bc2 = 'Edit Profile')

    <div class="row layout-top-spacing">
        <div id="flActionButtons" class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit Profile</h4>
                        </div>
                    </div>
                </div>
                @foreach($profiles as $profile)
                    <form class="form-vertical" action="/proup/{{ $profile->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="widget-content widget-content-area col-12 row d-flex">
                            <div class="col-6">
                                <div class="form-group mb-4">
                                    <label class="control-label">Name:</label>
                                    <input type="text" value="{{ $profile->name }}" name="name" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Birth Day:</label>
                                    <input id="basicFlatpickr" value="{{ $profile->birth_day }}" class="form-control flatpickr flatpickr-input active" type="text" name="birth_day">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Role:</label>
                                    <input type="text" value="{{ $profile->role }}" name="role" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Address:</label>
                                    <input type="text" value="{{ $profile->address }}" name="address" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Nation:</label>
                                    <input type="text" value="{{ $profile->nation }}" name="nation" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Email:</label>
                                    <input type="text" value="{{ $profile->email }}" name="email" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Phone:</label>
                                    <input type="text" value="{{ $profile->phone }}" name="phone" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">About Me:</label>
                                    <textarea class="form-control" name="about">{{ $profile->about }}</textarea>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3">

                            </div>
                            <div class="col-6">
                                <label class="control-label">Profile Photo:</label><br>
                                <img class="w-50" src="{{ asset('profile_photo/'.$profile->photo) }}" alt="avatar">
                                <div class="form-group mt-4">

                                    <div class="input-group control-group increment mb-4" >
                                        <input type="file" name="photo" class="form-control-file col-sm-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    {{--        <script type="text/javascript">--}}
    {{--            $(document).ready(function() {--}}
    {{--                $(".btn-success").click(function(){--}}
    {{--                    var html = $(".clone").html();--}}
    {{--                    $(".increment").after(html);--}}
    {{--                });--}}
    {{--                $("body").on("click",".btn-danger",function(){--}}
    {{--                    $(this).parents(".control-group").remove();--}}
    {{--                });--}}
    {{--            });--}}
    {{--        </script>--}}
    {{--    <script>--}}
    {{--        var f1 = flatpickr(document.getElementById('basicFlatpickr'));--}}
    {{--    </script>--}}
@endsection

@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Social Media')
    @php($bc2 = 'Edit Social Media')

    <div class="row layout-top-spacing">
        <div id="flActionButtons" class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit Social Media</h4>
                        </div>
                    </div>
                </div>
                @foreach($socials as $social)
                    <a href="/admin_side/social/edit/{{ $social->id }}" class="btn btn-primary float-right"><i class="fa fa-edit"></i> Edit</a>
                    <form class="form-vertical" action="/soup/{{ $social->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="widget-content widget-content-area col-12 row d-flex">
                            <div class="col-6">
                                <div class="form-group mb-4">
                                    <label class="control-label">Linked In:</label>
                                    <input readonly type="text" value="{{ $social->linkedin }}" name="linkedin" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Facebook:</label>
                                    <input readonly type="text" value="{{ $social->facebook }}" name="facebook" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Instagram:</label>
                                    <input readonly type="text" value="{{ $social->instagram }}" name="instagram" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Twitter:</label>
                                    <input readonly type="text" value="{{ $social->twitter }}" name="twitter" class="form-control" >
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

@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Portfolio')
    @php($bc2 = 'Tambah Portfolio')

        <div class="row layout-top-spacing">
            <div id="flActionButtons" class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-5">
                                <h4>Detail Portfolio</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        @foreach($projects as $project)
                            <div class="row">
                                <div class="table-responsive col-sm-8">
                                    <table class="table">
                                        <tr>
                                            <td><h5>Nama: </h5></td>
                                            <td><h5>{{ $project->p_name }}</h5></td>
                                        </tr>
                                        <tr>
                                            <td><h5>Tanggal: </h5></td>
                                            <td><h5>{{ date('F Y', strtotime($project->date)) }}</h5></td>
                                        </tr>
                                        <tr>
                                            <td><h5>Client: </h5></td>
                                            <td><h5>{{ $project->c_name }}</h5></td>
                                        </tr>
                                        <tr>
                                            <td><h5>Kategori: </h5></td>
                                            <td><h5>{{ $project->category }}</h5></td>
                                        </tr>
                                        <tr>
                                            <td><h5>Url: </h5></td>
                                            <td><h5>{{ $project->url }}</h5></td>
                                        </tr>
                                        <tr>
                                            <td><h5>Deskripsi: </h5></td>
                                            <td><h5>{{ $project->p_desc }}</h5></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Gambar Utama:</h5>
                                    <img style="max-width: 200px" src="{{ asset('project_images/'.$project->p_image) }}">
                                    <h5 class="mt-3 mb-3">Gambar Tambahan:</h5>
                                    @foreach(json_decode($project->s_images) as $image)
                                        <img class="mr-2" style="max-width: 200px" src="{{ asset('project_images/'.$image) }}">
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                            <a class="btn btn-primary ml-3 mt-5" href="/admin_side/project">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".btn-success").click(function(){
                    var html = $(".clone").html();
                    $(".increment").after(html);
                });
                $("body").on("click",".btn-danger",function(){
                    $(this).parents(".control-group").remove();
                });
            });
        </script>
    <script>
        var f1 = flatpickr(document.getElementById('basicFlatpickr'));
    </script>
@endsection

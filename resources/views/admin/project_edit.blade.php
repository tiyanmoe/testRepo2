@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Portfolio')
    @php($bc2 = 'Edit Portfolio')

        <div class="row layout-top-spacing">
            <div id="flActionButtons" class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-5">
                                <h4>Edit Portfolio</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        @foreach($projects as $project)
                            <form class="form-vertical" action="/projup/{{ $project->p_id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="control-label">Nama Project:</label>
                                    <input value="{{ $project->p_name }}" type="text" name="name" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Website:</label>
                                    <input value="{{ $project->url }}" type="text" name="url" value="https://" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Client:</label>
                                    <select class="selectpicker form-control" name="client_id" data-live-search="true">
                                        <option selected value="{{ $project->c_id }}">{{ $project->c_name }}</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Kategori:</label>
                                    <select class="selectpicker form-control" name="category[]" data-live-search="true" multiple>
                                        <option selected value="{{ $project->category }}">{{ $project->category }}</option>
                                        <option>Web Development</option>
                                        <option>Game Development</option>
                                        <option>Design Graphic</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Tanggal:</label>
                                    <input value="{{ $project->date }}" id="basicFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" name="date">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Deskripsi:</label>
                                    <textarea class="form-control" name="descriptions">{{ $project->p_desc }}</textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="control-label">Gambar Utama: {{ $project->p_image }}</label>

                                    <div class="input-group control-group increment mb-4" >
                                        <input value="{{ $project->p_image }}" type="file" name="p_image" class="form-control-file col-sm-3">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    @foreach(json_decode($project->s_images) as $image)
                                        <div class="control-group">
                                            <label class="control-label">Gambar Tambahan: {{ $image }}</label>
                                            <div class="input-group mb-4">
                                                <input value="{{ $image }}" type="file" name="s_images[]" class="form-control-file col-sm-3">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger" type="button"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="clone hide">
                                        <div class="control-group">
                                            <label class="control-label">Gambar Tambahan: </label>
                                            <div class="input-group mb-4">
                                                <input type="file" name="s_images[]" class="form-control-file col-sm-3">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger" type="button"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3">
                            </form>
                        @endforeach
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

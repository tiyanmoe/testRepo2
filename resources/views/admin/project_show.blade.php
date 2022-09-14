@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Portfolio')
    @php($bc2 = 'Daftar Portfolio')

    <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <h4>Daftar Portfolio</h4>
            <div class="widget-content widget-content-area br-6">
                <table id="zero-config" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>Project</th>
                        <th>Tanggal</th>
                        <th>Client</th>
                        <th>Kategori</th>
                        <th>Url</th>
                        <th>Deskripsi</th>
                        <th class="no-content">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->p_name }}</td>
                            <td>{{ date('F Y', strtotime($project->date)) }}</td>
                            <td>{{ $project->c_name }}</td>
                            <td>{{ $project->category }}</td>
                            <td>{{ $project->url }}</td>
                            <td>{{ $project->p_desc }}</td>
                            <td>
                                <form method="POST" action="{{ route('project.destroy', [$project->p_id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group" role="group">
                                        <button onclick="location.href='{{ route('project.view', [$project->p_id]) }}'" type="button" class="btn btn-dark text-primary"> <i class="fas fa-external-link"></i></button>
                                        <button onclick="location.href='{{ route('project.edit', [$project->p_id]) }}'" type="button" class="btn btn-dark text-secondary"> <i class="fas fa-edit"></i></button>
                                        <button onclick="befordell()" type="submit" class="btn btn-dark text-danger"> <i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection

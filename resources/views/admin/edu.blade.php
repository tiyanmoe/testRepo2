@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Educations')
    @php($bc2 = 'List Educations')

    <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <h4>List Educations</h4>
            <div class="widget-content widget-content-area br-6">
                <a href="/admin_side/edu/create" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add</a>
                <table id="zero-config" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Grade</th>
                        <th>Address</th>
                        <th>Descriptions</th>
                        <th class="no-content">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($educations as $edu)
                        <tr>
                            <td>{{ $edu->name }}</td>
                            <td>{{ $edu->year_start }}</td>
                            <td>{{ $edu->year_end }}</td>
                            @if($edu->grade == 1)
                                <td>SD</td>
                            @elseif($edu->grade == 2)
                                <td>SMP</td>
                            @elseif($edu->grade == 3)
                                <td>SMA/K</td>
                            @endif
                            <td>{{ $edu->address }}</td>
                            <td>{{ $edu->descriptions }}</td>
                            <td>
                                <form method="POST" action="{{ route('edu.destroy', [$edu->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group" role="group">
{{--                                        <button onclick="location.href=''" type="button" class="btn btn-dark text-primary"> <i class="fas fa-external-link"></i></button>--}}
                                        <button onclick="location.href='{{ route('edu.edit', [$edu->id]) }}'" type="button" class="btn btn-dark text-secondary"> <i class="fas fa-edit"></i></button>
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

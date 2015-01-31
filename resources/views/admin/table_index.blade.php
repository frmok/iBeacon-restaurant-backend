@extends('admin.layout')
@section('content')
    <div class="main">
        <div class="breadcrumb">
            <span><i class="fa fa-home"></i>Home</span>
            <span>/</span>
            <span>Table Management</span>
        </div>
        <div class="col-md-8 main-view">
            <div class="list_layout">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Table Name</th>
                            <th>Capacity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                        <tr>
                            <td>{!! $table->id !!}</td>
                            <td>{!! $table->table_name !!}</td>
                            <td>{!! $table->capacity !!}</td>
                            <td>
                                <a href="/admin/table/detail/{!! $table->id !!}"><div class="btn">Modify</div></a>
                                <a href="/admin/table/detail/{!! $table->id !!}"><div class="btn btn-warning">Delete</div></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@stop

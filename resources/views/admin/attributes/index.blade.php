@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Attributes</h2>
                </div>

                <div class="card-body">
                    @include('admin.partials.flash')
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($attributes as $attribute)
                            <tr>
                                <td scope="row">{{$attribute->id}}</td>
                                <td>{{$attribute->code}}</td>
                                <td>{{$attribute->name}}</td>
                                <td>{{$attribute->type}}</td>
                                <td>
                                    @can('edit_attributes')
                                        <a href="{{ url('admin/attributes/'. $attribute->id .'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    @endcan
                                    @if ($attribute->type == 'select')
                                        <a href="{{ url('admin/attributes/'. $attribute->id .'/options')}}" class="btn btn-success btn-sm">Options</a>
                                    @endif
                                    @can('delete_attributes')
                                        {!! Form::open(['url' => 'admin/attributes/'. $attribute->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    @endcan()
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No records found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                @can('add_attributes')
                    <div class="card-footer text-right">
                        <a href="{{url('admin/attributes/create')}}" class="btn btn-primary">Add New</a>
                    </div>
                @endcan
            </div>  
        </div>
    </div>
</div>

@endsection
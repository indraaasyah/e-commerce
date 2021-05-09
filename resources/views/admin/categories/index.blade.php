@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Striped Table</h2>
                </div>

                <div class="card-body">
                    @include('admin.partials.flash')
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Parents</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td scope="row">{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->parent ? $category->parent->name : '' }}</td>
                                <td>
                                    <a href="{{ url('admin/categories/'. $category->id .'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    
                                    {!! Form::open(['url' => 'admin/categories/'. $category->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
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
                <div class="card-footer text-right">
                    <a href="{{url('admin/categories/create')}}" class="btn btn-primary">Add New</a>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection
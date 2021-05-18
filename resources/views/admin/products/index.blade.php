@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Products</h2>
                </div>

                <div class="card-body">
                    @include('admin.partials.flash')
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">SKU</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td scope="row">{{$product->id}}</td>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->status}}</td>
                                <td>
                                    <a href="{{ url('admin/products/'. $product->id .'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    
                                    {!! Form::open(['url' => 'admin/products/'. $product->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No records found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $products->Links() }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{url('admin/products/create')}}" class="btn btn-primary">Add New</a>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection
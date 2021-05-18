@extends('admin.layout')

@section('content')

@php
    $formTitle = !empty($category) ? 'Update' : 'New'
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>{{ $formTitle }} Product</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    @if (!empty($product))
                        {!! Form::model($product, ['url' => ['admin/products', $product->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/products']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('sku', 'SKU') !!}
                            {!! Form::text('sku', null, ['class' => 'form-control', 'placeholder' => 'SKU']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Price') !!}
                            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_ids', 'Category') !!}
                            {!! General::selectMultilevel('category_ids[]', $categories, ['class' => 'form-control', 'selected' => !empty(old('category_ids')) ? old('category_ids') : (!empty($category['category_ids']) ? $category['category_ids'] : ''), 'placeholder' => '--Choose Category--' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('short_description', 'Short Description') !!}
                            {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'Short Description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('weight', 'Weight') !!}
                            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'Weight']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('length', 'Length') !!}
                            {!! Form::text('length', null, ['class' => 'form-control', 'placeholder' => 'Length']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('width', 'Width') !!}
                            {!! Form::text('width', null, ['class' => 'form-control', 'placeholder' => 'Width']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('height', 'Height') !!}
                            {!! Form::text('height', null, ['class' => 'form-control', 'placeholder' => 'Height']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Status') !!}
                            {!! Form::select('status', $statuses, null, ['class' => 'form-control', 'placeholder' => '--Set Status--']) !!}
                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                            <a href="{{ url('admin/products') }}" class="btn btn-secondary btn-default">Back</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection
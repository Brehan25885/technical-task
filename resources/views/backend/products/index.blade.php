@extends('backend.layouts.app')

@section ('title', app_name() . ' | Dashboard')


@section('content')

<div class="row">
            <div class="col-sm-12">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="Create New"> Create</a>
                </div><!--btn-toolbar-->
            </div><!--col-->
</div>


<div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table dataTable">
                        <thead>
                        <tr>
                            <th> name </th>
                            <th> description </th>
                            <th> price </th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                        <tr>
                                <td class="text-primary">{{ $product->name }} </td>
                                <td  class="text-primary">{{ $product->description }}</td>
                                <td> {{ $product->price }} </td>
                                <td>{!! $product->action_buttons !!}</td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    {!! $products->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->


@endsection

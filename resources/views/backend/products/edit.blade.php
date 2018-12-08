@extends('backend.layouts.app')

@section ('title', app_name() . ' | Dashboard')


@section('content')

    <form method="POST" action="{{route('admin.products.update',$product->id)}}" class="form-horizontal" enctype="multipart/form-data" >
        @method('PUT')

        {{ csrf_field() }}

  <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->


                         <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >description</label>
                                <div class="col-md-10">
                                    <input type="text" name="description" value="{{$product->description}}" class="form-control"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->


                         <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >price</label>
                                <div class="col-md-10">
                                    <input type="number" name="price" class="form-control" value="{{$product->price}}"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->


                         <div class="form-group row">
                         <label col-md-2 form-control-label >Current Image</label>

                            <div class="col-md-10">
                                <img src="{{ $product->image }}" width="150" height="150" >
                            </div><!--col-->
                        </div><!--form-group-->

                          <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >image</label>
                                <div class="col-md-10">
                                        <input type="file" name="image" class="form-control" value="{{$product->image}}"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->
                        <div class="float-right">
                        <button type="submit" class="btn btn-primary ">
                        Edit
                        </button>
                        </div>

                        </form>
                    </div>


@endsection

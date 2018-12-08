@extends('backend.layouts.app')

@section ('title', app_name() . ' | Dashboard')


@section('content')
<form method="post" action="{{route('admin.products.store')}}" class="form-horizontal" enctype="multipart/form-data" >

{{ csrf_field() }}

  <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->



                         <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >description</label>
                                <div class="col-md-10">
                                    <input type="text" name="description" class="form-control"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->


                         <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >price</label>
                                <div class="col-md-10">
                                    <input type="number" name="price" class="form-control"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->

                          <div class="form-group row">
                                <div class="col-md-10">
                                <label col-md-2 form-control-label >image</label>
                                <div class="col-md-10">
                                        <input type="file" name="image" class="form-control"/>
                                </div><!--col-->
                                 </div>
                        </div><!--form-group-->
                        <div class="float-right">
                        <button type="submit" class="btn btn-primary ">
                        Create
                        </button>
                        </div>

                        </form>
                    </div>


@endsection

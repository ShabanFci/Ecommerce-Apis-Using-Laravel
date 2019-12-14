@extends('layouts.app')
    @section('content')
    <div class="card mt-5  offset-lg-1 col-lg-11">
        <h1 class="mt-4 text-center">Add Subcategory</h1>
        <div class="add-question">
            <form action="{{route('subCategories.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
              <input autocomplete="false" name="hidden" type="text" style="display:none;">
            {{ csrf_field() }}
                <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Name</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Category</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="category_id" required="required">
                          <option value="" disabled selected>Select Category</option> 
                          @foreach($categories as $category )
                          <option value="{{$category->id}}">{{$category->name}}</option>                   
                          @endforeach
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary my-3"><i class="fa fa-plus"></i>Add Subcategory</button>
                </div>
            </form>
        </div>
    </div>
    <br>
 
    @endsection('content')

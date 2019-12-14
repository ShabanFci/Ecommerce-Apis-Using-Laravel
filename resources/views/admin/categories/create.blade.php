@extends('layouts.app')
    @section('content')
    <div class="card mt-5  offset-lg-1 col-lg-11">
        <h1 class="mt-4 text-center">Add Category</h1>
        <div class="add-question">
            <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                {{ csrf_field() }}
                <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Name</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary my-3"><i class="fa fa-plus"></i>Add Category</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    @endsection('content')

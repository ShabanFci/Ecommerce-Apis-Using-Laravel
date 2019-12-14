@extends('layouts.app')
    @section('content')
    <div class="card mt-5  offset-lg-1 col-lg-9">
        <h1 class="mt-4 text-center">Edit Category</h1>
        <div class="add-question">
            <form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
			{{ csrf_field() }}
                <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Name</label>
                    <div class="col-lg-6">
                       <input type="text" name="name" value="{{$category->name}}" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                  <button class="btn btn-primary my-3"><i class="fa fa-edit"></i>Edit Category</button>
                </div>
			</form>
		</div>
	</div>
    <br>
      	
    @endsection('content')

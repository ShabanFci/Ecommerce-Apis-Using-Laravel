@extends('layouts.app')
    @section('content')
    <div class="card mt-5  offset-lg-1 col-lg-11">
        <h1 class="mt-4 text-center">Update Product</h1>
        <div class="add-product">
            <form action="{{route('products.update' , $product->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
              <input autocomplete="false" name="hidden" type="text" style="display:none;">
              @method('PATCH')
            {{ csrf_field() }}

            <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Name</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" class="form-control" value="{{$product->name}}" required="required">
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Category</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="category_id" id="category_id" required="required">
                          <option value="{{$product->category->id}}" disabled>{{$product->category->name}}</option> 
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>                   
                          @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <label for="exampleFormControlSelect1" class="col-lg-2 col-form-label label">Subcatgory</label>
                    <div class="col-lg-6">
                       <select class="form-control" name="subCategory_id" id="subCategory_id" required="required" > 
                                        
                         <option value="{{$product->subCategory->id}}">{{$product->subCategory->name}}</option>                 
                       </select>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-lg-8">
                      <div>
                        <span>{{$product->image}}</span>
                        <input type="file"  name="image" >       
                      </div>
                    </div>
                </div> 
              </div>
              <div class="text-center">
                  <button class="btn btn-primary my-3"><i class="fa fa-edit"></i>Edit Product</button>
              </div>
          </div>
        </div>

      </div>
   
    </form>
  </div>
  </div>
  <br>
   <script>
      $('#category_id').on('change', function(e){
      var cat_id = e.target.value;
      //ajax
      $.get('/categorySubcategories?category_id=' + cat_id, function(data){
          //success data
          $('#subCategory_id').empty();
          $('#subCategory_id').append('<option value=""> Choose subCategory</option>');
          $.each(data, function(index, subcatObj){
          $('#subCategory_id').append('<option value="' + subcatObj.id+'">'
          + subcatObj.name + '</option>');
          });
      });
      });
  </script>
@endsection('content')

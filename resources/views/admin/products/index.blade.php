@extends('layouts.app')
   @section('content')
   <div class="container">
      <h4 class="text-center" style="color: #888">All Products</h4>   
      <table class="table tabel-responsive table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th colspan="2">Controls</th>
            <th><a href="{{route('products.create')}}">
         <button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</button>
      </a></th>
          </tr>
        </thead>

        <tbody>
        @foreach($products as $key=>$product)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$product->name}}</td>
            <td>
              <img style="width: 200px;height: 100px" 
                src="{{ URL::to('/') }}/productImages/{{$product->image}}">
            </td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->subCategory->name}}</td>

            <td>
              <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            </td>
            <td>
              <form action="{{ route('products.destroy', $product->id)}}" method="post">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger" type="submit"><i class="fa fa-edit"></i> Delete</button>
              </form>
            </td>
          </tr>

       @endforeach
       </tbody>
    </table>

    <div>
      {{$products->links()}}
    </div>
   </div>
   @endsection
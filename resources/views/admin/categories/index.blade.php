@extends('layouts.app')
   @section('content')
   <div class="container">
      <h4 class="text-center" style="color: #888">All Categories</h4>   
      <table class="table tabel-responsive table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th colspan="2">Controls</th>
            <th>
              <a href="{{route('categories.create')}}">
                <button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</button>
              </a>
            </th>
          </tr>
        </thead>

        <tbody>
        @foreach($categories as $key=>$category)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$category->name}}</td>
            <td>
              <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">
               <i class="fa fa-edit"></i> Edit
              </a>
            </td>
            <td>
              <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"><i class="fa fa-edit"></i> Delete</button>
              </form>
            </td> 
            <td>
            <td>
          </tr>
       @endforeach
       </tbody>
    </table>
   <div>
  {{$categories->links()}}
  </div>
</div>
 @endsection
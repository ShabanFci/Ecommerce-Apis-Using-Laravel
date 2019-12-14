@extends('layouts.app')
   @section('content')
   <div class="container">
      <h4 class="text-center" style="color: #888">All subCategories</h4>   
      <table class="table tabel-responsive table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
            <th colspan="2">Controls</th>
            <th><a href="{{route('subCategories.create')}}">
         <button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</button>
      </a></th>
          </tr>
        </thead>

        <tbody>
 
        @foreach($subCategories as $key=>$subCategory)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$subCategory->name}}</td>
            <td>{{$subCategory->category->name}}</td>
            
            <td>
              <a href="{{ route('subCategories.edit',$subCategory->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            </td>
            <td>
              <form action="{{ route('subCategories.destroy', $subCategory->id)}}" method="post">
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
      {{$subCategories->links()}}
    </div>
   </div>
   @endsection
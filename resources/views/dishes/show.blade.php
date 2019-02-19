@extends('layout')



@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  {{-- href to create category --}}

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Category</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
            @if(isset($details))
            @foreach($details as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productName}}</td>

            <td>{{$product->productCategory}}</td>
            <td>{{$product->productDescription}}</td>
            <td>{{$product->productPrice}}</td>
            <td>{{$product->productImage}}</td>


{{--             <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
 --}}
      </tr>
        @endforeach
        @endif
    </tbody>
  </table>
<div>
@endsection

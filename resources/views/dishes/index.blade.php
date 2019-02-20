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
  <a href="{{ route('dishes.create')}}" class="btn btn-primary">Add a New Dish  </a></td>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Name</td>
          <td>Category</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($dishes as $dish)
        <tr>

            <td>{{$dish->name}}</td>

            <td>{{$dish->category}}</td>
            <td>{{$dish->description}}</td>
            <td>{{$dish->price}}</td>
            <td>{{$dish->image}}</td>


            <td><a href="{{ route('dishes.edit',$dish->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('dishes.destroy', $dish->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

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

          <td>Name</td>
          <td>Category</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
            @if(isset($details))
            @foreach($details as $dish)
        <tr>

            <td>{{$dish->name}}</td>

            <td>{{$dish-category}}</td>
            <td>{{$dish->description}}</td>
            <td>{{$dish->price}}</td>
            <td>{{$dish->image}}</td>


{{--             <td><a href="{{ route('dishs.edit',$dish->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('dishs.destroy', $dish->id)}}" method="post">
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

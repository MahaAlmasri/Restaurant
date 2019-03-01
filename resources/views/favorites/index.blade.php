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

  <div class="container">


        <h3>My Favorite Dishes </h3> <br><br>
     @foreach($favorites as $favorite)

        <div> <img src="{{$favorite->dish->image}}" alt="{{$favorite->dish->image}}" style="width:250px;height:250px" />  </div> <br>
        <div><h4>{{$favorite->dish->name}}</h4></div>
        <div><h5>{{$favorite->dish->price}}</h5></div>
        <div><h5>{{$favorite->dish->category->categoryName}}</h5></div>

        <div>{{$favorite->dish->description}}</div>

        <form action="{{ route('favorites.destroy', $favorite->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Remove it</button>
              </form>

        <hr/>
    @endforeach


     </div>



@endsection

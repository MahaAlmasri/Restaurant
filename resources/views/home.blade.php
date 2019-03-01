@extends('layouts.app')

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

    @if(isset($details))
    <h3>The Most Delicious Dishes </h3> <br><br>
    @foreach($details as $dish)

    <div> <img src="{{$dish->image}}" alt="{{$dish->image}}" style="width:250px;height:250px" />  </div> <br>
    <div><h4>{{$dish->name}}</h4></div>
    <div><h5>{{$dish->price}}</h5></div>
    <div><h5>{{$dish->category->categoryName}}</h5></div>

    <div>{{$dish->description}}</div>

    <div><a href="/orders/{{ $dish->id}}/create" class="btn btn-primary">Order it</a>
 {{-- <link rel="shortcut icon" href="/path/to/icons/favicon.ico"> --}}

 <a href="{{ route('addtofavorite', compact('dish'))}}" class="btn btn-primary">Love it?</a></div>
    {{-- https://www.iconfinder.com/icons/675969/favorite_heart_like_love_icon --}}
 <hr/>
@endforeach
@endif

 </div>

@endsection

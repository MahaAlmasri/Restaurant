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

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($favorites as $favorite)
        <tr>
            <td>{{$favorite->id}}</td>
            <td>{{$favorite->productName}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

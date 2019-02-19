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
  {{-- href to create store --}}
  <a href="{{ route('orders.store', App\Product::first(1)))}}" class="btn btn-primary">Add a New Order</a></td>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>UserName</td>
          <td>OrderDate</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->created_at}}</td>
            <td><a href="{{ route('orders.edit',$order->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('orders.destroy', $order->id)}}" method="post">
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

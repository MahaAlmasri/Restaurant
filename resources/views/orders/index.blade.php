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
  {{-- <a href="{{ route('orders.store', " class="btn btn-primary">Add a New Order</a></td> --}}

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>UserName</td>
          <td>OrderDate</td>

        </tr>
    </thead>
    <tbody>

        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user->name}}</td>
            <td>{{$order->created_at}}</td>
        </tr>

            <table class="table table-striped">
                    <thead>
                        <tr>
                          <td>DishName</td>
                          <td>Amount</td>
                          <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($order->order_details as $detail)
                            <tr>
                                    <td>{{$detail->dish->name}}</td>
                                    <td>{{$detail->amount}}</td>
                                    <td>{{$detail->price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

           {{--  <td><a href="{{ route('orders.edit',$order->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('orders.destroy', $order->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> --}}

        @endforeach

    </tbody>
  </table>
<div>
@endsection

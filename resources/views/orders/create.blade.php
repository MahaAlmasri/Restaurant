@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add an Order
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2> Products </h2>
              {{-- href="{{ route('orderDetails.create',$order->id)}}"  --}}
             {{--  <script>
                    $("#amount").change(function() {
                 $("#totalprice").val= $("#amount").val;
                });
                                    </script> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $product)
                <tr>
                    <form method="POST" action="" >
                    <input name="order_id"  value="" hidden >
                    <td>{{$product->productName}}<input name="product_id"  value="{{$product->id}}" hidden ></td>
                    <td>{{$product->productPrice}}<input name="price"  value="{{$product->productPrice}}" hidden ></td>
                    <td><input type="number" id="amount" name="amount" value="1"></td>
                    {{-- <td><input type="number" id="totalprice" name="totalPice" ></td> --}}

                    <td><a href="" class="btn btn-primary">Add to Order</a></td>
                </tr>
            </form>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search Product"> <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                   Search
                </button>
            </span>
        </div>
    </form>

@endsection

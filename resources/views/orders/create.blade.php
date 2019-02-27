@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
 {{-- <script>
    $('document').ready(function(){
    $('#amount').on('keyup',function(){
 var amount = $(this).val();
 var price = $('#price').val();
 $("#totalprice").html(amount*price);
 });
});
 </script> --}}

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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <?php $count =1;?>
            <tbody>
                    @if (isset($dish))
                    <form method="POST" action="{{ route('order') }}" >
                        @csrf
                        <tr>
                               <input name="order_id"  value="" hidden >
                               <td>{{$dish->name}}<input name="dish_id" id="dish_id"  value="{{$dish->id}}" hidden ></td>
                               <td>{{$dish->price}}<input name="price" id="price"  value="{{$dish->price}}" hidden ></td>
                               <td><input type="number" id="amount" name="amount" value="1"></td>
                                <td><span type="number" id="totalprice"  > </span></td>

                               <td><button type="submit" class="btn btn-primary">Add To Order</button></td>
                        </tr>
                    </form>
                    @endif


        @if(isset($details))

            {{-- <p> The Search results for your query <b> {{ $query }} </b> are :</p> --}}

              {{-- href="{{ route('orderDetails.create',$order->id)}}"  --}}

                @foreach($details as $dishDetail)
                <form method="POST" action="{{ route('order') }}" >
                    @csrf
                    <tr>
                    <input name="order_id"  value="0" hidden >
                    <td>{{$dishDetail->name}}<input name="dish_id"  value="{{$dishDetail->id}}" hidden ></td>
                    <td>{{$dishDetail->price}}<input name="price"  value="{{$dishDetail->price}}" hidden ></td>
                    <td><input type="number" id="amount" name="amount" value="1"></td>
                    <td><input type="number" id="totalprice" name="totalPice" ></td>

                    <td><button type="submit" class="btn btn-primary">Add To Order</button></td>
                    </tr>
                </form>
                @endforeach

        @endif
        <?php $count++;?>

</tr>
        </tbody>

    </table>

    </div>
<form action="/search" method="POST" role="search">
    @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search dish"> <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                   Search
                </button>
            </span>
        </div>
    </form>

@endsection

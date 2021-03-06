@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Category
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
      <form method="post" action="{{ route('ordersDetails.store', $dish) }}">

        <div class="form-group">
              @csrf
              <label for="name">Dish Name: {{ $dish->name }}</label>
              <input type="text" class="form-control" name="name" value={{ $dish->id }} hidden />
          </div>
          <div class="form-group">
            <label for="number">Amount:</label>
            <input type="text" class="form-control" name="amount"/>
        </div>

          <div class="form-group">
              <label for="address">Price: value={{ $dish->price }}</label>
              <input type="text" class="form-control" name="price" value={{ $dish->price }}/>
          </div>
          <div class="form-group">
            <label for="address">order:</label>
            <input type="text" class="form-control" name="order_id"/>
        </div>


          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection

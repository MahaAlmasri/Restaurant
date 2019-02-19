@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Product
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
      <form method="post" action="{{ route('products.store') }}">


        <div class="form-group">
              @csrf
              <label for="name">Product name:</label>
              <input type="text" class="form-control" name="productName"/>
          </div>

          <div class="form-group">
                <label for="category">Product Category:</label>
                <input type="integer" class="form-control" name="productCategory"/>
          </div>

          <div class="form-group">
                <label for="description">Product description:</label>
                <input type="text" class="form-control" name="productDescription"/>
          </div>

          <div class="form-group">
                <label for="price">Product price:</label>
                <input type="float" class="form-control" name="productPrice"/>
          </div>

          <div class="form-group">
                <label for="image">Product image:</label>
                <input type="text" class="form-control" name="productImage"/>
          </div>




          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection

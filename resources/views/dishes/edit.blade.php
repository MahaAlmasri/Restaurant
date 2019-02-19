@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('PATCH')
        @csrf


        <div class="form-group">
          <label for="name">Product name:</label>
          <input type="text" class="form-control" name="productName" value={{ $product->productName }} />
        </div>


        <div class="form-group">
          <label for="category">Product category:</label>
          <input type="integer" class="form-control" name="productCategory" value={{ $product->productCategory }} />
        </div>


        <div class="form-group">
          <label for="description">Product description:</label>
          <input type="text" class="form-control" name="productDescription" value={{ $product->productDescription }} />
        </div>


        <div class="form-group">
          <label for="price">Product price:</label>
          <input type="float" class="form-control" name="productPrice" value={{ $product->producPrice }} />
        </div>


        <div class="form-group">
            <label for="image">Product image:</label>
            <input type="text" class="form-control" name="productImage" value={{ $product->productPrice }} />
          </div>






{{--
        $table->string('productName');
        $table->integer('productCategory');
        $table->string('productDescription');
        $table->float('productPrice');
        $table->string('productImage');

 --}}










        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection


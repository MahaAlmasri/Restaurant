@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Dish
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
      <form method="post" action="{{ route('dishes.store') }}">


        <div class="form-group">
              @csrf
              <label for="name">Dish name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
                <label for="category">Dish Category:</label>
                <select name="category_id" class="form-control">

                    @foreach ($categories as $category)
                    <option value="{{$category->id}}"> {{ $category->categoryName }}</option>
                    @endforeach
                </select>
          </div>

          <div class="form-group">
                <label for="description">Dish description:</label>
                <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
                <label for="price">Dish price:</label>
                <input type="float" class="form-control" name="price"/>
          </div>

          <div class="form-group">
                <label for="image">Dish image:</label>
                <input type="text" class="form-control" name="image"/>
          </div>




          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection

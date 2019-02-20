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
      <form method="post" action="{{ route('dishes.update', $dish->id) }}">
        @method('PATCH')
        @csrf


        <div class="form-group">
          <label for="name">Dish name:</label>
          <input type="text" class="form-control" name="name" value={{ $dish->name }} />
        </div>


        <div class="form-group">
          <label for="category">Dish category:</label>
          <input type="integer" class="form-control" name="category" value={{ $dish->category }} />
        </div>


        <div class="form-group">
          <label for="description">Dish description:</label>
          <input type="text" class="form-control" name="description" value={{ $dish->description }} />
        </div>


        <div class="form-group">
          <label for="price">Dish price:</label>
          <input type="float" class="form-control" name="price" value={{ $dish->price }} />
        </div>


        <div class="form-group">
            <label for="image">Dish image:</label>
            <input type="text" class="form-control" name="image" value={{ $dish->image }} />
          </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection


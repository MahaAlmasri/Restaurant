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
      <form method="post" action="{{ route('categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Category name:</label>
          <input type="text" class="form-control" name="categoryName" value={{ $category->categoryName }} />
        </div>
        <div class="form-group">
          <label for="description">Category description:</label>
          <input type="text" class="form-control" name="categoryDescription" value={{ $category->categoryDescription }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection


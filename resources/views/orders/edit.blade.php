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
      <form method="post" action="{{ route('stores.update', $store->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">store name:</label>
          <input type="text" class="form-control" name="name" value={{ $store->name }} />
        </div>
        <div class="form-group">
            <label for="number">store PhoneNumber:</label>
            <input type="text" class="form-control" name="number" value={{ $store->number }} />
          </div>
        <div class="form-group">
          <label for="address">store Address:</label>
          <input type="text" class="form-control" name="address" value={{ $store->address }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>


    </form>
  </div>
</div>
@endsection


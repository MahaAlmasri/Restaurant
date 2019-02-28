

@extends('layout')

@section('content')

<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Edit User Profile
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

<form method="POST" action="{{ route ('auth.update', $user->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">UserName:</label>
            <input type="text" class="form-control" name="name"  value="{{ $user->name }}" >
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address"  value="{{ $user->address }}" >
          </div>


    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email"  value="{{ $user->email }}" >
      </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" >
      </div>

    <div class="form-group">
        <label for="password">Password Conformation:</label>
        <input type="password" class="form-control"  name="password_confirmation" >
      </div>

    <button type="submit">Send</button>
</form>
</div>  </div>
@endsection

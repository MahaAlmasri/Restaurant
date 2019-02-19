

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

<form method="POST" action="{{ route ('auth.update', $user->id) }}">
        @method('PATCH')
        @csrf
    <input type="text" name="name"  value="{{ $user->name }}" >

    <input type="text" name="address"  value="{{ $user->address }}" >

    <input type="email" name="email"  value="{{ $user->email }}" >

    <input type="password" name="password" >

    <input type="password" name="password_confirmation" >

    <button type="submit">Send</button>
</form>
</div>  </div>
@endsection

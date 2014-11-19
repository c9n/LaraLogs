@extends('layouts.default')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ URL::to('register') }}" method="post">
  <fieldset>
    <legend>Sign Up</legend>

    <label>邮箱
      <input type="text" name="email" placeholder="lynn@example.com" value="{{ Input::old('email') }}" />
    </label>

    <label>用户名
      <input type="text" name="name" placeholder="Lynn" value="{{ Input::old('name') }}" />
    </label>

    <label>密码
      <input type="password" name="password" placeholder="password"/>
    </label>

    <button type="submit" class="button expand">Submit</button>
  </fieldset>
</form>

@endsection
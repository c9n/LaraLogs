@extends('layouts.default')

@section('content')

<form action="{{ URL::to('register') }}" method="post">
  <fieldset>
    <legend>Sign Up</legend>

    <label>邮箱
      <input type="text" name="email" placeholder="lynn@example.com">
    </label>

    <label>密码
      <input type="text" name="email" placeholder="password">
    </label>

    <button type="submit" class="button expand">Submit</button>
  </fieldset>
</form>

@endsection
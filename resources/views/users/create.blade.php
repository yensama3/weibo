@extends('layouts.default')
@section('title','注册')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>注冊</h5>
    </div>
    <div class="card-body">
      <form action="POST" action="{{ route('users.store') }}">
        <div class="form-group">
          <lable for="name">名稱: </lable>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <lable for="email">郵箱: </lable>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <lable for="password">密碼: </lable>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>
        <div class="form-group">
          <lable for="password_confirmation">確認密碼: </lable>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">注冊</button>
      </form>
    </div>
  </div>
</div>

@stop

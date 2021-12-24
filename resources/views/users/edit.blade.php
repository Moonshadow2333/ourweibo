@extends('layouts.default')
@section('title','更新个人资料')
@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card">
        <div class="card-header">
            <h5>更新个人资料</h5>
        </div>
        <div class="card-body">
            @include('shared._errors')
            <div class="gravatar_edit">
                <a href="https://cdn.sep.cc/avatar">
                    <img src="{{$user->gravatar('200')}}" alt="{{$user->name}}" class="gravatar">
                </a>
            </div>
            <form action="{{route('users.update',$user->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <label for="name">名称</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                <label for="name">邮箱</label>
                <input type="text" name="email" value="{{$user->email}}" class="form-control" disabled>
                <label for="password">密码</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control">
                <label for="password_confirmation">确认密码</label>
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
        </div>
    </div>
</div>
@stop

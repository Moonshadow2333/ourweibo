<div class="list-group-item">
    <img src="{{$user->gravatar()}}" width="32" alt="{{$user->name}}" class="mr-3">
    <a href="{{route('users.show',$user)}}">
        {{$user->name}}
    </a>
</div>

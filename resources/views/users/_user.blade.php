<div class="list-group-item">
    <img src="{{$user->gravatar()}}" width="32" alt="{{$user->name}}" class="mr-3">
    <a href="{{route('users.show',$user)}}">
        {{$user->name}}
    </a>
    @can('destroy',$user)
    <form action="{{route('users.destroy',$user->id)}}" method="post" class="float-end">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button class="btn btn-danger">删除</button>
    </form>
    @endcan
</div>

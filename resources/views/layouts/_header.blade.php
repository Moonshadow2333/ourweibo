<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">Weibo</a>
        <ul class="navbar-nav justify-content-end">
            @if(Auth::check())
            <li class="nav-item"><a href="#" class="nav-link">用户列表</a></li>
            <li class="nav-item"><a href="{{route('users.show',Auth::user())}}" class="nav-link">个人中心</a></li>
            <li class="nav-item"><a href="{{route('users.edit',Auth::user())}}" class="nav-link">编辑资料</a></li>
            <li class="nav-item"><a href="#" class="nav-link">
                <form action="{{route('logout')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-block btn-danger" name="button">退出</button>
                </form>
            </a></li>
            @else
            <li class="nav-item"><a href="{{route('help')}}" class="nav-link">帮助</a></li>
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">登入</a></li>

            @endif
        </ul>
    </div>
</nav>

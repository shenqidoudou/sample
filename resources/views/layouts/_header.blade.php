<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{Route('home')}}" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    <li><a href="#">用户列表</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ Route('users.show', Auth::user()->id) }}">个人中心</a></li>
                            <li><a href="#">编辑资料</a></li>
                            <li class="divider"></li>
                            <li>
                                <a id="logout" href="#">
                                    <form action="{{ Route('logout') }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-block btn-danger" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{Route('help')}}">帮助</a></li>
                    <li><a href="{{ Route('login') }}">登录</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>

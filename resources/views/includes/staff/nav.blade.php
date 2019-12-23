<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>


        <a class="navbar-brand pt-0 d-md-none" href="#">
            <img src="" class="navbar-brand-img" alt="HRMIS">
        </a>
        <!-- Form -->

        <!-- User -->

        <li class="nav-item dropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="feather icon-power text-danger"></i> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            {{--<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">--}}
            {{--<a href="{{ route('logout') }}"  onclick="event.preventDefault();--}}
            {{--document.getElementById('logout-form').submit();" >--}}
            {{--{{ __('Logout') }}--}}

            {{--</a>--}}

            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
            {{--@csrf--}}
            {{--</form>--}}


            {{--</div>--}}
        </li>
        </ul>
    </div>
</nav>
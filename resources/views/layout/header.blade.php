@php
 use Illuminate\Support\Facades\Auth;
@endphp


<header >
    <nav class="navbar navbar-expand-lg  ">
        <a class="navbar-brand text-white" href="#">ایکس</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active ">
                    <a class="nav-link text-white" href="{{route('dashboard')}}">داشبورد <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <div class="my-2 my-lg-0 text-white">
              @if(auth::user())
                <a href="{{ route('logout')}}" class="text-white">خروج</a>
                
              @else
                <a href="{{route('register')}}" class="text-white">ثبت نام</a> ||

                <a href="{{route('login')}}" class="text-white">ورود</a>
               @endif
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </div>
        </div>
    </nav>
</header>
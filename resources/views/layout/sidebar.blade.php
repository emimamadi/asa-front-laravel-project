@php
use Illuminate\Support\Facades\Auth;

@endphp

<div class="sidebar">
    <div class="img">
       @if(empty(auth::user()->img))
           <img src="{{ asset('asset/img/poni.jpg') }}" alt="" width="100px" height="100px">
        
       @endif
       
    </div>
    <h6 style="text-align: center;color: white;padding-top: 2rem;">@php
        if(auth::user()){
        echo auth::user()->name ." سلام ";
        }
        @endphp
    </h6>
    <div class="menu_sidebar">
        <ul>
            <li><a href="{{route('dashboard')}}">پیشخوان</a></li>

            <li><a href="{{route('pishkhan2')}}"> 2 پیشخوان</a></li>

            <!-- <li><a href="">وضعیت</a></li> -->

            <li><a href="">سایر موارد</a></li>

        </ul>
    </div>
</div>
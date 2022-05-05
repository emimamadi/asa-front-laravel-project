@extends('dashboard')

@section('content')

@php
use Illuminate\Support\Facades\Auth;
@endphp


<h3 class="mx-auto">صفحه کاربر </h3>
<div class="2forms mx-auto " style="display: flex; flex-direction: row-reverse; width: 80%;">
<div class="formbox mt-3 w-100 " dir="rtl" >
  <form action="{{ route('user.update',Auth::user()->id) }}" method="POST" style="width: 100%;">


    @csrf
    @method('PUT')

    <div class="row">
      <div class="col-md-2"><label for="name">نام کامل</label></div>
      <div class="col-md-6">
        <input type="text" class="form-control " name="name" id="name" value="{{Auth::user()->name}}">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-2"><label for="email">ایمیل</label></div>
      <div class="col-md-6">
        <input type="text" class="form-control " name="email" id="email" value="{{Auth::user()->email}}">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-2"><label for="password">پسورد</label></div>
      <div class="col-md-6">
        <input type="password" class="form-control " name="password" id="password" value="substr(" {{Auth::user()->password}}", 0, 8)">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-2"><label for="mobile">موبایل</label></div>
      <div class="col-md-6">
        <input type="text" class="form-control " name="mobile" id="mobile" value="{{Auth::user()->mobile}}">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-2"><label for="address">آدرس</label></div>
      <div class="col-md-6">
        <input type="text" class="form-control " name="address" id="address" value="{{Auth::user()->address}}">
      </div>
    </div>
    <br>
    <div class="row">

      <div class="col-md-8 ">

        <input type="submit" class="btn btn-primary w-75" name="" id="" value="بازبینی">
      </div>
    </div>

  </form>
</div>




<div class="formbox  mt-3" dir="rtl" style="width: 85%;">
  <form action="{{ route('user.adder',Auth::user()->id) }}" method="POST" style="width: 100%;">


    @csrf
    @method('PUT')

    <div class="row">
      <div class="col-md-6"><label for="name">موجودی حساب</label></div>
      <div class="col-md-6">
        <input type="text" class="form-control " name="vault" id="name" value="{{Auth::user()->vault}}" style="margin-bottom: 2%;">
        <input type="submit" class="btn btn-primary w-100" name="submit" id="" value="اضافه کردن">
      </div>
    </div>
  </form>
</div>

</div>



<!-- <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>نام</th>
      <th>نوع کالا</th>
      <th>وضعیت </th>
      
      <th>عملیات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">علی محمدی</p>
            <p class="text-muted mb-0">ali@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">تبلت</p>
        <p class="text-muted mb-0">کنسول</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">در حال انتقال</span>
      </td>
     
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded badge-success ">
          ویرایش
        </button>
        <button type="button" class="btn btn-link btn-sm btn-rounded badge-danger">
          حذف
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/6.jpg"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">رویا حسنی</p>
            <p class="text-muted mb-0">roya@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">موس کیبورد</p>
        <p class="text-muted mb-0">کامپیوتر</p>
      </td>
      <td>
        <span class="badge badge-primary rounded-pill d-inline"
              >در حال پردازش</span
          >
      </td>
      
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold  badge-success"
                data-mdb-ripple-color="dark"
                >
          ویرایش
        </button>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold badge-danger"
                data-mdb-ripple-color="dark"
                >
         حذف
        </button>
      </td>
    </tr>
 
  </tbody>
</table> -->

@stop
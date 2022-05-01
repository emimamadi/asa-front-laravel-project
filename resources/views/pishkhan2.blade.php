@extends('dashboard')

@section('content')

<!-- <div class="card" style="width: 18rem;" style="display: inline-block;">

    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div> -->


<div class="card-box" style="display:flex;gap: 7rem;flex-wrap: wrap;flex-direction: row-reverse;">

    <div class="card" style="width:18rem; text-align:center;border: 1px solid gray;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <h5 class="pt-2">محصولات</h5>
        <p class="pt-2">6</p>
        <a href="#" class="btn btn-primary w-50 mx-auto pt-2 mb-2">جزییات</a>
    </div>

    
    <div class="card" style="width:18rem; text-align:center;border: 1px solid gray;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <h5 class="pt-2">فروش ها</h5>
        <p class="pt-2">7</p>
        <a href="#" class="btn btn-primary w-50 mx-auto pt-2 mb-2">جزییات</a>
    </div>

    
    <div class="card" style="width:18rem; text-align:center;border: 1px solid gray; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <h5 class="pt-2">چک ها </h5>
        <p class="pt-2">8</p>
        <a href="#" class="btn btn-primary w-50 mx-auto pt-2 mb-2">جزییات</a>
    </div>

    <div class="card" style="width:18rem; text-align:center;border: 1px solid gray; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <h5 class="pt-2">طرف قرار داد</h5>
        <p class="pt-2">5</p>
        <a href="#" class="btn btn-primary w-50 mx-auto pt-2 mb-2">جزییات</a>
    </div>

    <div class="card" style="width:18rem; text-align:center;border: 1px solid gray; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <h5 class="pt-2">بیمه</h5>
        <p class="pt-2">10</p>
        <a href="#" class="btn btn-primary w-50 mx-auto pt-2 mb-2">جزییات</a>
    </div>


    <div class="card" style="width:18rem; text-align:center;border: 1px solid gray; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <h5 class="pt-2">مشتریان</h5>
        <p class="pt-2">6</p>
        <a href="#" class="btn btn-primary w-50 mx-auto pt-2 mb-2">جزییات</a>
    </div>


</div>


<hr>
<hr>

<h2 class="mx-auto">مشتریان</h2>

<table class="table table-primary w-75 mx-auto pt-4 table-bordered ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button class="btn-primary rounded">Edit</button> <button class="btn-danger rounded">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><button class="btn-primary rounded">Edit</button> <button class="btn-danger rounded">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td><button class="btn-primary rounded">Edit</button> <button class="btn-danger rounded">Delete</button></td>
    </tr>
  </tbody>
</table>




    @stop
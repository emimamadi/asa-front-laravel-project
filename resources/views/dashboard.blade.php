<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/home_style.css')}}">
    <!-- <link href="{{asset('asset/css/ruang-admin.min.css')}}" rel="stylesheet"> -->

    

    <title>ایکس </title>
</head>

<body>

    @include('layout.header')

    <div class="main">
        @include ('layout.sidebar')
        <div class="content">

            @yield('content')

            <!-- <h4>ثبت آگهی</h4>


                <form action="" class="form w-100">

                    <span>
                          <input type="radio" id="css" name="menu" value="CSS">
                          <label for="css">درخواست ثبت آگهی</label><br>
                          <input type="radio" id="html" name="menu" value="">
                          <label for="html">ثبت آگهی</label><br>

                    </span>




                    <div class="form-row reverse w-100 ">
                        <div class="form-group col-md-4 ">
                            <label for="inputEmail4">عنوان</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputPassword4">تعداد تقاضا</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputState">وضعیت</label>
                            <select id="inputState" class="form-control">
                                <option selected>انتشار</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputEmail4">تاریخ انقضا</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputState">کارفرما</label>
                            <select id="inputState" class="form-control">
                                <option selected>انتخاب کارفرما</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputEmail4">مجموعه پرداخت</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputState">ناحیه انتشار</label>
                            <select id="inputState" class="form-control">
                                <option selected>سطح انتشار</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-row reverse w-100 ">
                        <div class="form-group col-md-4 ">
                            <label for="inputState">انتخاب استان</label>
                            <select id="inputState" class="form-control">
                                <option selected>انتخاب استان</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="inputState">انتخاب شهرستان</label>
                            <select id="inputState" class="form-control">
                                <option selected>انتخاب شهرستان</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <p class="reverse">روش پرداخت :</p>
                    <span class="reverse">
                          <input type="radio" id="css" name="menu" value="CSS">
                          <label for="css">درگاه پرداخت </label><br>
                          <input type="radio" id="html" name="menu" value="">
                          <label for="html">کارت به کارت</label><br>
                          <input type="radio" id="html" name="menu" value="">
                          <label for="html">ثبت آگهی</label><br>

                    </span>
                </form> -->
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script src="{{asset('asset/js/ruang-admin.min.js')}}"></script>
    <script src="{{asset('asset/js/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('asset/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


   

<script>
  const labels = [
    'فروردین',
    'اردیبهشت',
    'خرداد',
    'تیر',
    'مرداد',
    'شهریور',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'آمار مشتریان',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>



</body>

</html>
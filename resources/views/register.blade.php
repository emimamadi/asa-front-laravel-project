<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/css/register_style.css')}}">
    <title>ثبت نام</title>
</head>

<body>






    <div class="fullbox ">
        <div class=" login-left text-white">
            <div class="background"><img src="{{asset('asset/img/poni.jpg')}}" alt="">

                <h6 style="text-align: center;" class="pt-4">ثبت نام</h6>

                <a href="{{route('home')}}" class="text-white"><i class="fa fa-arrow-left" aria-hidden="true"></i> بازگشت به سایت </a>
            </div>


        </div>
        <div class="login-right">

            <form action="{{route('register.store')}}" method="POST">
                @csrf

                <div class="row">
                    <div class="col">

                        <input type="text" class="form-control " name="name" placeholder="اسم">

                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="email" placeholder="ایمیل">

                    </div>
                    <div class="col">
                        <input type="password" class="form-control" name="password" placeholder="پسورد">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="mobile" placeholder="موبایل">

                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="address" placeholder="آدرس">
                    </div>
                </div>
                <br>
                <div class="row" style="text-align: center;">
                    <div class="col ">

                        <input class="btn btn-primary w-75 " type="submit" value="ثبت نام">
                    </div>
                </div>
                <br>
                <div class="row" style="text-align: center;">

                    <div class="col ">

                        <a href="{{route('login')}}">ورود</a>
                    </div>
                </div>


                <br>
                <br>
            </form>
       
        </div>

    </div>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif




</body>

</html>
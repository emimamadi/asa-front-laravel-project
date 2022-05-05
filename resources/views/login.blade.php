<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/css/login_style.css')}}">
    <title>ورود</title>
</head>

<body>
    <div class="boxform">
        <div class="total">
            <img src="{{asset('asset/img/poni.jpg')}}" alt="">

            <div class="logform">
                <form action="{{route('login.store')}}" method="POST" dir="rtl">
                    @csrf
                    <div class="row">
                        <div class="col">

                            <input type="text" class="form-control" name="email" id="email" placeholder="ایمیل">
                        </div>

                    </div>
                    @error('email')
                    <span class="error" style="position: relative;">{{ $message }}</span>
                    @enderror
                    <br>
                    <div class="row">
                        <div class="col">

                            <input type="password" class="form-control" name="password" id="password" placeholder="پسورد">
                        </div>
                    </div>
                    @error('password')
                    <span class="error" style="position: relative;">{{ $message }}</span>
                    @enderror
                    <br>
                    <div class="row text-center">
                        <div class="col">
                            <input type="submit" class="btn btn-primary w-100" value="ورود">
                        </div>
                    </div>

                    <div class="row text-center pt-3 " dir="ltr">
                        <div class="col">
                            <h6><a href="{{route('register')}}" class="w-100">ثبت نام </a></h6>
                            <h6><a href="{{route('home')}}" class="w-100"> <i class="fa fa-arrow-left" aria-hidden="true"></i> بازگشت به خانه </a></h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
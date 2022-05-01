<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/register_style.css')}}">
    <title>Register</title>
</head>

<body>
@include('layout.header')
    <div class="login-box">
        <h2>ثبت نام</h2>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" name="name" required="">
                <label>نام کامل</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>ایمیل</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>پسورد</label>
            </div>
            <button type="submit" class="btn btn-primary">
             ارسال</button>
        </form>
    </div>
</body>

</html>
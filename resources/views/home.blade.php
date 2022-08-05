<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body> -->

@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/application-logo.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>HomePage</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Jobs for Retiree</label>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/companies">Companies</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Status</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
    <section>
        
    </section>
    
</body>
</html>
   
@endsection
   
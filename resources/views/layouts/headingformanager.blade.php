
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html,body{
            padding: 0;
            margin: 0;
            width:100%;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            
        }

        /* body{
            font-family: "cursive";
        } */

        nav{
            position:fixed;
            background: #4f016b;
            height: 90px;
            width: 100%;
        }

        label.logo{
            color: rgb(252, 254, 255);
            font-size: 35px;
            line-height: 80px;
            padding: 0 80px;
            font-weight: bold;
        }

        nav ul{
            float: right;
            margin-right: 20px;

        }

        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }

        nav ul li a{
            color: white;
            font-size: 17px;
            padding: 17px;
            border-radius: 3px;
            text-transform: uppercase;
        }

        a:hover{
            background: #e09cf9;
            transition: .5s;
            height: 50px;
        }

        .checkbtn{
            font-size: 30px;
            color: white;
            float: right;
            margin-right: 40px;
            cursor:pointer;
            display: none;
        }

        #check{
            display: none;
        }

        @media (max-width:100%){
            label.logo{
                font-size:30px;
                padding-left:50px;
            }

            nav ul li a{
                font-size: 16px;
            }
        }

        @media (max-width:100%){
            .checkbtn{
                display: block;
            }
            ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #7f5e8a;
                top: 80px;
                left: 0;
                text-align: center;
                transition: all .5s;
            }

            nav ul li{
                display: block;
            }
            nav ul li a{
                font-size: 20px;
            }
            a:hover, a.active{
                background: none;
                color: #521668;
                
            }
        }
        .box{
            background: white;
            height: 50px;
            
            padding-bottom: 15px;
        }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/application-logo.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <label class="logo">Jobs for Retiree</label>
        <ul>
        <li><a href="/homeformanager">Home</a></li>
            <li><a href="/companies">Company Profile</a></li>
            
            <li><a href="#">Employees</a></li>
            <li><a href="/jobstatus">Job Status</a></li>
            <li><a href="/dashboard">Logout</a></li>
            <li class="box">{{ Auth::user()->name }}</a></li>
            
        </ul>
    </nav>

</body>
</html>
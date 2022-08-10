
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


        section{
                background: url(/cover/homepage.jpg) no-repeat;
                background-size: cover;
                /* height: 500px; */
                width: 100%;
        }
        .container{
            width:80%;
            margin-left:30px;
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
    <title>HomePage</title>
</head>
<body>
    <nav>
        <!-- <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label> -->
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
    
    <section>
        <div class="image"></div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       
    </section>
    <div class="container">
        <h1><b>Description about this website</b></h1>
        <p>In this website, there will be given all details about different jobs and works, and retirees can register very easily. They will make a profile of them which will contain their CV and job experience. Then they will send a request to the job of their choice by searching for different jobs. Then those job givers/manager will look at the CVs of retirees and will give them jobs. It will be an easy process which will help the retired people to do work at any time when they want. As many retiree needs a income source or money who didn't do any government jobs or else. Besides, some of them feel very boring and lonely when the got into retirement. So, it will help them to pass their time also.</p>
        <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque exercitationem doloribus consequatur laudantium dignissimos eveniet quos deserunt ex, excepturi ipsa molestias iste. Nihil consectetur quos, voluptas corporis esse quae.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque exercitationem doloribus consequatur laudantium dignissimos eveniet quos deserunt ex, excepturi ipsa molestias iste. Nihil consectetur quos, voluptas corporis esse quae.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque exercitationem doloribus consequatur laudantium dignissimos eveniet quos deserunt ex, excepturi ipsa molestias iste. Nihil consectetur quos, voluptas corporis esse quae.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque exercitationem doloribus consequatur laudantium dignissimos eveniet quos deserunt ex, excepturi ipsa molestias iste. Nihil consectetur quos, voluptas corporis esse quae.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque exercitationem doloribus consequatur laudantium dignissimos eveniet quos deserunt ex, excepturi ipsa molestias iste. Nihil consectetur quos, voluptas corporis esse quae.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque exercitationem doloribus consequatur laudantium dignissimos eveniet quos deserunt ex, excepturi ipsa molestias iste. Nihil consectetur quos, voluptas corporis esse quae.</p> -->
    </div>

    <!-- <div>
        {{View::make('profile_update.create')}}
    </div> -->
    
</body>
</html>
   

   
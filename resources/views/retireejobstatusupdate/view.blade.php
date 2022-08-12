<!-- @include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      
        .search{
            margin-top: 20px;
            position:fixed;
            width:100%;
        }
       
        .custab{
            background: white;
            border: 5px solid black;
            width: 100%;
            padding: 5px;
            margin: 15% 0;
            
            
        }
       .row{
        padding:20px;
        
       }
       .label{
        margin-top:100px;
       }
    
        h1{
            margin-top:100px;
            color:black;
        }
        h2{
            color:black;
        }    
        h4{
            color:black;
            padding:0px;
        }
        .btn{
            color:black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Status</title>
</head>
<body>
        
        <div class="row">
            <div class="label">
            <h1><b><u>Recent Employees' Job Status</u></b></h1>
            </div>
                <table class="table table-striped custab">
                        <thead>
                            <tr>
                                <th scope="col"><h2>#</h2></th>
                                <th scope="col"><h2><u>Employee Name</u></h2></th>
                                <th scope="col"><h2><u>Employee email</u></h2></th>
                                <th scope="col"><h2><u>Applying Jobs</u></h2></th>
                                <th scope="col"><h2><u>Approved Jobs</u></h2></th>
                                <th scope="col"><h2><u>Rejected Jobs</u></h2></th>
                                <th scope="col"><h2><u>Feedbacks</u></h2></th>
                                <th scope="col"><h2><u>Action</u></h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($statuses as $status)      
                           
                            <tr>
                                <th scope="row"><h4>{{$status->id}}</h4></th>
                                <th><td><h4>{{$status->user_name}}</h4></td></th>
                                <td><h4>{{$status->email}}</h4></td>
                                <td><h4>{{$status->applying_job}}</h4></td>
                                <td><h4>{{$status->approved_job}}</h4></td>
                                <td><h4>{{$status->rejected_job}}</h4></td>
                                <td><h4>{{$status->feedbacks}}</h4></td>
                                <td style="display:flex">
                                    <a href="">
                                        <button class="btn btn-success btn-sm bg-blue-500">View profile</button>
                                    </a>
                                </td> 
                            </tr>
                            @endforeach                  
                        </tbody>
                </table>
        </div>
</body>
</html>-->

           
 





















@include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            background:#e09cf9;
            padding:300px;
            width:100%;
            font-size: 20px;
        }
        .row{
            width:100%;
            padding:30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Job Status</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>



<div class="container">
    
    <div class="row">  
        <h1><b><u> My Job Status</u></b></h1>
        <br>
    <table class="table table-striped custab">
        <thead>
            <tr>
                
                <th>User Name</th>
                <th>Applying Jobs</th>
                <th>Approved Jobs</th>
                <th>Rejected Jobs</th>
                <th>Rejected Jobs</th>
                
            </tr>
        </thead>
        <tbody>
                <tr>
                    
                    <td>{{$status->user_name}}</td>
                    <td>{{$status->applying_job}}</td>
                    <td>{{$status->approved_job}}</td>
                    <td>{{$status->Rejected_job}}</td>
                    <td>{{$status->feedbacks}}</td>
                </tr>    
        </tbody>    
    </table>
    </div>
</div>
</body>
</html> 
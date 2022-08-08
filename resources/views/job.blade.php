<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            background: #e09cf9;
        }
        .custab{
            background: black;
            border: 1px solid #ccc;
            width: 100%;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
            
            }
        .custab:hover{
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
            }
        h1{
            color:black;
        }
        h2{
            color:black;
        }    
        h4{
            color:black;
        }
        .btn{
            color:black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>
<body>
    <div class="row">
        <h1><b><u>  Recent Jobs</u></b></h1>
            <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th scope="col"><h2>#</h2></th>
                            <th scope="col"><h2><u>Company Name</u></h2></th>
                            <th scope="col"><h2><u>Description</u></h2></th>
                            <th scope="col"><h2><u>Address</u></h2></th>
                            <th scope="col"><h2><u>Position</u></h2></th>
                            <th scope="col"><h2><u>Job Type</u></h2></th>
                            <th scope="col"><h2><u>Action</u></h2></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)      
                        <!-- <tr @if ($loop->odd) bg-gray @endif> -->
                        <tr>
                            <th scope="row"><h4>{{$job->id}}</h4></th>
                            <td><h4>{{$job->company_name}}</h4></td>
                            <td><h4>{{$job->description}}</h4></td>
                            <td><h4>{{$job->address}}</h4></td>
                            <td><h4>{{$job->position}}</h4></td>
                            <td><h4>{{$job->type}}</h4></td>
                            <td style="display:flex">
                                <a href="">
                                    <button class="btn btn-success btn-sm bg-blue-500">View</button>
                                </a>
                            </td> 
                        </tr>
                        @endforeach                  
                    </tbody>
            </table>
        </div>
</body>
</html>

           
 

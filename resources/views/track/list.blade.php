@include('layouts.headingformanager')

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
            /* box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s; */
            
        }
       .row{
        padding:40px;
        /* margin:20% 0; */
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
            <div class="label">
            <h1><b><u> List of Retirees who applied</u></b></h1>
            </div>
                <table class="table table-striped custab">
                        <thead>
                            <tr>
                                <th scope="col"><h2>#</h2></th>
                                <th scope="col"><h2><u>Retiree Name</u></h2></th>
                                <th scope="col"><h2><u>Email</u></h2></th>
                                <th scope="col"><h2><u>Address</u></h2></th>
                                <th scope="col"><h2><u>DOB</u></h2></th>
                                <th scope="col"><h2><u>Gender</u></h2></th>
                                <th scope="col"><h2><u>CV</u></h2></th>
                                <th scope="col"><h2><u>Comments</u></h2></th>
                                <th scope="col"><h2><u>Approved or Denied</u></h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lists as $list)
                            <tr>
                                <th scope="row"><h4>{{$list->id}}</h4></th>
                                <th ><h4>{{$list->name}}</h4></th>
                                <th ><h4>{{$list->email}}</h4></th>
                                <th ><h4>{{$list->address}}</h4></th>
                                <th ><h4>{{$list->dob}}</h4></th>
                                <th ><h4>{{$list->gender}}</h4></th>
                                <th ><h4>{{$list->cv}}</h4></th>
                                <th ><h4>{{$list->comments}}</h4></th>
                                <th ><h4>{{$list->approved_or_denied}}</h4></th>
                            
                            <td style="display:flex">
                                    <a href="{{url('/track.comment/'.$list->id)}}">
                                        <button class="btn btn-success btn-sm bg-blue-500">comment</button>
                                    </a>
                                </td> 
                                <td style="display:flex">
                                    <a href="{{url('/track.contact/'.$list->id)}}">
                                        <button class="btn btn-success btn-sm bg-blue-500">Contact</button>
                                    </a>
                                </td> 
                                <td style="display:flex">
                                    <a href="{{url('/track.approved/'.$list->id)}}">
                                        <button class="btn btn-success btn-sm bg-blue-500">Approved or Denied</button>
                                    </a>
                                </td> 
                            </tr>
                            @endforeach                  
                        </tbody>
                </table>
        </div>
</body>
</html>

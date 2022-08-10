@include('layouts.heading')

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
    <title>Company Showcase</title>
</head>
<body>
        
        <div class="row">
            <div class="label">
            <h1><b><u>Companies</u></b></h1>
            </div>
                <table class="table table-striped custab">
                        <!-- <thead>
                            <tr>
                                <th scope="col"><h2>#</h2></th>
                                <th scope="col"><h2><u>Logo</u></h2></th>
                                <th scope="col"><h2><u>Company Name</u></h2></th>
                                <th scope="col"><h2><u>Description</u></h2></th>
                                <th scope="col"><h2><u>Address</u></h2></th>
                                <th scope="col"><h2><u>Website</u></h2></th>
                                <th scope="col"><h2><u>Slogan</u></h2></th>
                                <th scope="col"><h2><u>Action</u></h2></th>
                            </tr>
                        </thead> -->
                        
                            
                            @foreach($shows as $show)
                                <div class="container">
                                    <div class="row col-md-6 col-md-offset-2 custyle">
                                
                                        <div class="col-md-10 blogShort">
                                                <h3>{{$show->id}}</h3>
                                                <h3>{{$show->logo}}</h3>
                                                <img src="{{$ad->video}}" alt="Ad img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                                                
                                                <h4>{{$show->c_name}}</h4>
                                                <h1>Description:</h1>
                                                <article><p>{{$show->description}}</p></article>
                                                <h1>Address:</h1>
                                                <h4>{{$show->address}}</h4>
                                                <h1>Website:</h1>
                                                <h4>{{$show->website}}</h4>
                                                <h1>Slogan:</h1>
                                                <h4>{{$show->slogan}}</h4>
                                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span>Apply</a> 
                                                
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                </table>
        </div>
</body>
</html>

           
 

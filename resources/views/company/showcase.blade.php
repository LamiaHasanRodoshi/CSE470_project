@include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      
       body{
        background:#e09cf9;
       }
       
        .custab{
            background: white;
            width:100%;
            border: 10px solid black;
            padding: 5px;
            margin: 15% 0;
            
            
        }
       .row{
        padding:100px;
        padding-left:200px;
        /* margin:20% 0; */
       }
       
    
        h1{
            margin-top:100px;
            color:black;
        }
        h2{
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

            @foreach($shows as $show)
                <table class="table table-striped custab">
                                <div class="container">
                                    <div class="row col-md-6 col-md-offset-2 custyle">
                                
                                        <div class="col-md-10 blogShort">
                                        
                                               <tr> <h3>{{$show->id}}</h3></tr>
                                               <tr>  <h3>{{$show->logo}}</h3></tr>
                                                
                                               <tr><h1><u><font color="red" size="15px">{{$show->c_name}}</font></u></h1></tr>
                                               <tr><h1><font color="blue"> Description:</font></h1></tr>
                                               <tr><article><p><h2>{{$show->description}}</h2></p></article></tr>
                                               <tr> <h1><font color="blue">Address:</font></h1></tr>
                                               <tr> <h2>{{$show->address}}</h2></tr>
                                               <tr><h1><font color="blue">Website:</font></h1></tr>
                                               <tr><h2>{{$show->website}}</h2></tr>
                                               <tr><h1><font color="blue">Slogan:</font></h1></tr>
                                               <tr> <h2>{{$show->slogan}}</h2></tr>
                                               <td class="text-center"> <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span>Apply</a> 
                                                
                                        </div>
                                    </div>
                                </div>
                </table>
                @endforeach
        </div>
</body>
</html>

           
 

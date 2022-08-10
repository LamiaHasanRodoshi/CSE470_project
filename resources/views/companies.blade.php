@include('layouts.headingformanager')

<!DOCTYPE html>
<html lang="en">
<head>
        <style> 
        .container{
            background:white;
            padding:100px;
            width:90%;
            font-size: 20px;
            padding-left:40px;
            border: black solid 2px;
        }
        .container-fluid{
            background:#e09cf9;
            padding:200px;
            width:100%;
            height:100%;
            font-size: 15px;
            
        }
        .row{
           
            width:100%;
            
            
        } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

</head>

<body>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="list-group ">
                    <a href="/company.showpost" class="list-group-item list-group-item-action">Show Posts</a>
                    <a href="/company.post" class="list-group-item list-group-item-action">Add new Post</a>
                    <a href="/company.ad" class="list-group-item list-group-item-action ">Add new Ad</a>
                    
                    </div> 
                </div>
                <div class="col-md-9">
                @foreach($ads as $ad)
                    <div class="container">
                        <div class="row col-md-6 col-md-offset-2 custyle">
                       
                            <div class="col-md-10 blogShort">
                                    <h3>{{$ad->id}}</h3>
                                    <h1>{{$ad->title}}</h1>
                                <img src="{{$ad->video}}" alt="Ad img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                                
                                    
                                    <article><p>{{$ad->ad}} </p></article>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a></td> 
                            </div>
                        </div>
                    </div>
                 @endforeach
                    
                </div>
            </div>
        </div>
</body>
</html>










@include('layouts.headingformanager')

<!DOCTYPE html>
<html lang="en">
<head>
        <style> 
        .container{
            background:white;
            padding-top:100px;
            width:90%;
            font-size: 20px;
            padding-left:40px;
            border: black solid 2px;
        }
        .container-fluid{
            background:#e09cf9;
            padding:100px;
            width:100%;
            height:850px;
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
                    <a href="/company.showpost" class="list-group-item list-group-item-action active">Show Posts</a>
                    <a href="/company.post" class="list-group-item list-group-item-action">Add new Post</a>
                    <a href="/company.ad" class="list-group-item list-group-item-action ">Add new Ad</a>
                    <a href="/companies" class="list-group-item list-group-item-action ">Back</a>
                    
                    </div> 
                </div>
                <div class="col-md-9">
                    <div class="container">
                        <div class="row col-md-6 col-md-offset-2 custyle">

                            <table class="table table-striped custab">
                            <thead>
                           
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Post</th>
                                    <th>Photos</th>
                                    <th>Videos</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->post}}</td>
                                        <td>{{$post->photo}}</td>
                                        <td>{{$post->video}}</td>
                                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
                                    </tr>
                                   
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
</body>
</html>










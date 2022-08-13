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
                    <a href="/company.post" class="list-group-item list-group-item-action active">Add new Post</a>
                    <!-- <a href="/company.showpost" class="list-group-item list-group-item-action">Show Posts</a> -->
                    <a href="/company.ad" class="list-group-item list-group-item-action ">Add new Ad</a>
                    <a href="/companies" class="list-group-item list-group-item-action ">Back</a>
                    <a href="/company.list" class="list-group-item list-group-item-action ">List of approved Retiree</a>

                    </div> 
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <h4>Add New Post</h4>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-8">

                                @if(session()->has('success'))
                                    <strong class="text-success">{{session()->get('success')}}</strong>
                                 @endif

                                <form action="{{url('/company.post')}}" method="post">
                                        @csrf
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Enter Title here</label> 
                                        <div class="col-12">
                                        <input id="text" name="title" :value= "old('title')" placeholder="Enter Title here" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Enter Post description</label> 
                                        <div class="col-12">
                                        <input id="text" name="post" :value= "old('post')" placeholder="Enter description here" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file" class="col-12 col-form-label">Upload Photo</label> 
                                        <div class="col-12">
                                        <input class="browse-input" type="file" name="photo" :value= "old('photo')" required name="UploadedFile" id="UploadedFile"/>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="file" class="col-12 col-form-label">Upload video</label> 
                                        <div class="col-12">
                                        <input class="browse-input" type="file" name="video" :value= "old('video')" required name="UploadedFile" id="UploadedFile"/>
                                        </div>
                                    </div> 
                                    <div class="card-footer bg-light">
                                            <button type="submit" class="btn btn-primary btn-sm">Upload Post</button>
                                    </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
</body>
</html>


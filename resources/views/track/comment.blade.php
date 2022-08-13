@include('layouts.headingformanager')

<!DOCTYPE html>
<html lang="en">
<head>
<style>
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
                    
                    <a href="/track.list" class="list-group-item list-group-item-action ">Back to List</a>
                    
                    
                    </div> 
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <h4>Add Comments here....!</h4>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-8">

                                    @if(session()->has('success'))
                                        <strong class="text-success">{{session()->get('success')}}</strong>
                                    @endif

                                    <form action="{{url('/track.update_comment/'.$data->id)}}" method="post">
                                        @csrf
                                   
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Comment here</label> 
                                        <div class="col-12">
                                        <input id="text" name="comments" value= "" placeholder="Enter description here" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                   
                                    <div class="card-footer bg-light">
                                            <button type="submit" class="btn btn-primary btn-sm">Comment</button>
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


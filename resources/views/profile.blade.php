@include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .user-row {
                margin-bottom: 14px;
            }

            .user-row:last-child {
                margin-bottom: 0;
            }

            .dropdown-user {
                margin: 13px 0;
                padding: 5px;
                height: 100%;
            }

            .dropdown-user:hover {
                cursor: pointer;
            }

            .table-user-information > tbody > tr {
                border-top: 1px solid rgb(221, 221, 221);
            }

            .table-user-information > tbody > tr:first-child {
                border-top: 0;
            }


            .table-user-information > tbody > tr > td {
                border-top: 0;
            }
            .toppad
            {margin-top:20px;
            }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>

        <div class="container">
            <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                <A href="{{url('/profile_update.create')}}" > Edit Profile</A>

                <A href="edit.html" >Logout</A>
            <br>
        
            </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        
        
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <h3 class="panel-title">{{$profiles->name}}</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img src=""   class="img-circle img-responsive">{{$profiles->avatar}}</div>
                        <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Full Name:</td>
                                <td>{{$profiles->name}}</td>
                            </tr>
                            <tr>
                                <td>Bio:</td>
                                <td>{{$profiles->bio}}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>{{$profiles->dob}}</td>
                            </tr>
                        
                            <tr>
                                    
                                <td>Gender</td>
                                <td>{{$profiles->gender}}</td>
                            </tr>
                            <tr>
                                <td>Home Address</td>
                                <td>{{$profiles->address}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><a href="mailto:info@support.com">{{$profiles->email}}</a></td>
                            </tr>
                            
                            </tbody>
                        </table>
                        
                        <a href="#" class="btn btn-primary">My Experiences</a>
                        <a href="#" class="btn btn-primary">My CV</a>
                        </div>
                    </div>
                    </div>
                        <div class="panel-footer">
                                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                <span class="pull-right">
                                    <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </span>
                            </div>
                    
                </div>
                </div>
            </div>
            </div>
</body>
</html>
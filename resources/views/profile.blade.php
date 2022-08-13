@include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            .custab{
            background: white;
            border: 5px solid black;
            width: 100%;
            padding: 5px;
            margin: 15% 0;
            
            
            }
            .row{
                padding:40px;
                /* margin:20% 0; */
            }
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
        <div class="custab">
            <div class="row">
            @foreach($profiles as $profile)
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                <a href="{{url('/profile_update.create')}}" > Create Profile</a>
                <a href="{{url('/profile_update.update/'.$profile->email)}}" > Update Profile</a>

                
            <br>
        
            </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        
        
                <div class="panel panel-info">
                    <div class="panel-heading">
                   
                    </div>
                    <div class="panel-body">
                    <div class="row">
                     
                        <div class="col-md-3 col-lg-3 " align="center"> <img src=""   class="img-circle img-responsive">{{$profile->avatar}}</div>
                        <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                               
                            <tr>
                                <td>Full Name:</td>
                                <td>{{$profile->name}}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{$profile->email}}</td>
                            </tr>
                            <tr>
                                    
                                <td>Gender:</td>
                                <td>{{$profile->gender}}</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>{{$profile->address}}</td>
                            </tr>

                            <tr>
                                <td>Bio:</td>
                                <td>{{$profile->bio}}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td>{{$profile->dob}}</td>
                            </tr>
                            <tr>
                                <td>Skills:</td>
                                <td>{{$profile->skills}}</td>
                            </tr>
                           
                            
                            
                            
                            </tbody>
                        </table>
                        
                        <a href="/doc.Lamia_experiences" class="btn btn-primary">My Experiences</a>
                        <a href="/doc.Lamia_CV" class="btn btn-primary">My CV</a>
                        </div>
                    </div>
                    
                    </div>
                    
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
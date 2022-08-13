@include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        html,body
        {
            width: 100%;
            
        }
        .container
        {
            background: #e09cf9;
            width: 100%;
           
        }
        .custab{
            background: white;
            border: 5px solid black;
            width: 100%;
            padding: 200px;
            padding-top:150px;
            /* margin: 15% 0; */
            
            
        }
        .row{
                padding:40px;
                margin-left:40px;
                /* margin:20% 0; */
            }

        .preview
        {
            padding: 10px;
            position: relative;
        }

        .preview i
        {
            color: #;
            font-size: 35px;
            transform: translate(50px,130px);
        }

        .preview-img
        {
            border-radius: 100%;
            box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
        }

        .browse-button
        {
            width: 200px;
            height: 200px;
            border-radius: 100%;
            position: absolute; /* Tweak the position property if the element seems to be unfit */
            top: 10px;
            left: 132px;
            background: linear-gradient(180deg, transparent, black);
            opacity: 0;
            transition: 0.3s ease;
        }

        .browse-button:hover
        {
            opacity: 1;
        }

        .browse-input
        {
            width: 200px;
            height: 200px;
            border-radius: 100%;
            transform: translate(-1px,-26px);
            opacity: 0;
        }

        .form-group
        {
            width:  250px;
            margin: 10px auto;
        }

        .form-group input
        {
            transition: 0.3s linear;
        }

        .form-group input:focus
        {
            border: 1px solid crimson;
            box-shadow: 0 0 0 0;
        }

        .Error
        {
            color: crimson;
            font-size: 13px;
        }

    </style>
    <meta charset="UTF-8">
    <title>ProfileUpdate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="custab">
            <div class="row">
                <p class="h2 text-center">Profile Update</p>

                @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>
                @endif

                <form action="{{ url('/profile_update.update/'.$data->id)}}" method="post">
                    @csrf
                    <div class="preview text-center">
                        <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200" />
                        <div class="browse-button">
                            <i class="fa fa-pencil-alt"></i>
                            <input class="browse-input" type="file" name="photo" required name="UploadedFile" id="UploadedFile" />
                        </div>
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input class="form-control" type="text" name="fullname" value="{{$data->name}}" required />
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input class="form-control" type="email" name="email" value="{{$data->email}}" required />
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input class="form-control" type="address" name="address" value="{{$data->address}}" required />
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input class="form-control" type="date" name="dob" value="{{$data->dob}}" required />
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>bio:</label>
                        <input class="form-control" type="text" name="bio" value="{{$data->bio}}" required />
                        <span class="Error"></span>
                    </div>
                
                    <div class="form-group">
                        <label>Experience:</label>
                        <input class="form-control" type="text" name="experience" value="{{$data->experience}}" required/>
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>skills:</label>
                        <input class="form-control" type="text" name="skills" value="{{$data->skills}}" required/>
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>cv:</label>
                        <input class="form-control" type="file" name="cv"  value="{{$data->cv}}" required/>
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br/>
                        <label><input type="radio" name="gender" required value="Male" checked /> Male</label>
                        <label><input type="radio" name="gender" required value="Female" /> Female</label>
                        <label><input type="radio" name="gender" required value="Other" /> Other</label>
                        <span class="Error"></span>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-block" type="submit"  value="Update"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
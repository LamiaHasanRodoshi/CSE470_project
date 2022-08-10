@include('layouts.heading')


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
    <title>Job Status</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

</head>
<body>


<div class="container-fluid">
	<div class="row">
		
		 <div class="col-md-7">
		    <div class="card">
		        <div class="card-body">
                <div class="row">
		                <div class="col-md-3 border-right">
		                    <h4>Add Job Status</h4>
		                </div>      
		        </div>
		            <hr>
		            <div class="row">
		                <div class="col-md-8">

                              @if(session()->has('success'))
                                    <strong class="text-success">{{session()->get('success')}}</strong>
                              @endif

        		            <form action="{{url('/retireejobstatus')}}" method="post">
                              @csrf
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input class="form-control" type="text" name="fullname" required placeholder="Enter Your Full Name"/>
                                    <span class="Error"></span>
                                </div>
                                <div class="form-group">
                                    <label>User Email:</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" required placeholder="Enter Your Email"/>
                                    <span class="Error"></span>

                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong><h4>'Email has already taken'</h4></strong>
                                            </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Enter Number of Applying Jobs</label> 
                                <div class="col-12">
                                  <input type="text" name="applying" placeholder="Enter Number of Applying Jobs" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Enter Number of Approved Jobs</label> 
                                <div class="col-12">
                                  <input type="text" name="approved" placeholder="Enter Number of Approved Jobs" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Enter Number of Rejected Jobs</label> 
                                <div class="col-12">
                                  <input type="text" name="rejected" placeholder="Enter Number of Rejected Jobs" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                    <input class="btn btn-primary btn-block" type="submit"  value="Add"/>
                              </div>
                             
                            </form>
                            <br>
        		        </div>

                        
        		    </div>

                    <div class="list-group ">
                            <a href="/retireejobstatusupdate.view" class="btn btn-primary btn-block">Show Job Status</a>
                    </div> 
		        </div>
		    </div>
		</div>
	</div>
</div>
</body>
</html> 
@include('layouts.heading')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            background:#e09cf9;
            padding:300px;
            width:100%;
            font-size: 20px;
        }
        .row{
            width:100%;
            padding:30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Job Status</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>



<div class="container">
    <!-- <div class="row col-md-6 col-md-offset-2 custyle"> -->
    <div class="row">  
        <h1><b><u> My Job Status</u></b></h1>
        <br>
    <table class="table table-striped custab">
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Applying Jobs</th>
                <th>Approved Jobs</th>
                <th>Rejected Jobs</th>
                
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>News</td>
                    <td>News Cate</td>
                    <td>News Cate</td>
                    <td>News Cate</td>
        </tbody>    
    </table>
    </div>
</div>
</body>
</html>
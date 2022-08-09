@include('layouts.heading')


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
        }
        .table{
            /* background:black; */
            border: 2px solid #ccc;
            width: 100%;
            padding: 5px;
            margin: 2% 0;
            box-shadow: 3px 3px 2px #ccc; 
        }
        .text{
            color:brown; 
           
        } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
</head>
<body>
   <div class="container">
        <h1><b><u> Companies Info</u></b></h1>
    <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                   
                <tr>
                    <td><img src="/avatar/logo2.png" alt="logo" width="80"></td>
                    <td><h2 class="text">Company Name: <h3>Bangladesh Bank</h3></h2></td>
                    <td><h2 class="text">Company Address: <h3>Bangladesh Bank</h3></h2></td>
                    <td><h2 class="text">Date: <h3>5/8/2022</h3></h2></td>
                    <td>
                        <a href="https://www.bb.org.bd/en/index.php">
                           <button class="btn btn-success btn-sm">View</button>
                        </a>
                    </td>
                </tr>
            
            </tbody>

    </table>
   </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Category</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <br/>
            <div class="row ">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm" type="get" action="{{ url('/search') }}">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="text" name="search" placeholder="Search by Full Time or Part Time or Seasonal or Temporary">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
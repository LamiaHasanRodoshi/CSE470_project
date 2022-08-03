<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body> -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class= "row">
            <h1>Recent Jobs</h1>
              <!-- <table class= "table">
                <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>
                            <img src= " {{asset('avatar/coverpic.jpg')}}" width= "80">
                        </td>
                        <td>
                            Position: {{$job->user_id}}
                        </td>
                        <td>
                            Address: {{$job->address}}
                        </td>
                        <td>
                            Date: {{$job->created_at->diffForHumans()}}
                        </td>
                        <td>
                            <a href="">
                                ,<button class= "btn btn-success btn-sm">Apply</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
              </table> -->
        </div>
    </div>
   
@endsection
   
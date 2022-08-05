@extends('layouts.master')

@section('content')


           
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Address</th>
                <th scope="col">Position</th>
                <th scope="col">Job Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)      
            <tr>
                <th scope="row">{{$job->id}}</th>
                <td>{{$job->company_name}}</td>
                <td>{{$job->address}}</td>
                <td>{{$job->position}}</td>
                <td>{{$job->type}}</td>
                <td style="display:flex">
                    <a href="">
                        <button class="btn btn-success btn-sm">View</button>
                    </a>
                </td> 
            </tr>
            @endforeach                  
        </tbody>
    </table>
@endsection
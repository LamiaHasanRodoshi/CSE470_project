<!-- @props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    
</a> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @if(Auth()->user()->role == 'employee')
        <div>
            <h2><a href="{{route('home')}}">Home</a> </h2>
        </div>
    @elseif(Auth()->user()->role == 'manager' )
        <div>
            <h2><a href="{{route('homeformanager')}}">Home</a> </h2>
        </div>
    @endif
    <!-- <h2><a href="{{route('home')}}">Home</a> </h2> -->
</body>
</html>
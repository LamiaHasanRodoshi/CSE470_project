<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         html,body
        {
            background: gray;
            width: 560px;
            margin: auto;
            font-size: 20px;
        }
        .box{
            position:relative;
            background: white;
            width: 550px;
            height: 600px;
            margin: 80px auto;
            padding: 70px;
            box-sizing: border-box;
            float: left;
            border-radius: 10px;
            border: 10px solid #4f016b ;
            
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Hello') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                        <!-- <tr> <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">home</a>
                        </tr> -->
                        <tr> You're logged in!</tr>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
</body>
</html>
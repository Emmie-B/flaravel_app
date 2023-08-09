@extends('layout')
@section('title', 'Guitars')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 ">

        <center>
            <a href="{{route('guitars.edit', ['guitar'=>$strings['id']])}}" class="text-gray-500" >Edit</a>
        </center>
   <div style="background-color: #483b3b;">
     <div class="flex justify-center">
        <p   class="text-blue-500 text-gray-500 dark:text-gray-400">{{$strings['name']}}</p>
    </div>
    <br>
    <div class="mt-16">
        <p class=" dark:text-gray-400"> {{$strings['brand']}} <br>
        <p class=" dark:text-gray-400"> {{$strings['description']}} <br>
        <a class="text-blue-500" href="https://www.linkedin.com/in/emmie-williams/">LinkedIn</a> and <a class="text-blue-500" href="https://www.instagram.com/emmie_williams/">Instagram</a>.</p>
    </div>
   </div>

</div>

@endsection
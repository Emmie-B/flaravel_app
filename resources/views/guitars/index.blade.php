@extends('layout')
@section('title', 'Guitars')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 " style="display: flex; gap: 20px">

<a class="text-gray-500" href="{{route('guitars.create')}}">Add Guitar</a>
    @foreach ($guitars as $guitar)

        
   <div style="background-color: #483b3b;">
     <div class="flex ">
        <a href="{{route('guitars.show', ['guitar'=> $guitar['id'] ])}}" class="text-blue-500 text-gray-500 dark:text-gray-400">{{$guitar['name']}}</a>
    </div>
    <br>
    <div class="mt-16">
        <p class=" dark:text-gray-400"> {{$guitar['description']}}   <br></p>
    </div>
   </div>
    @endforeach

</div>

@endsection
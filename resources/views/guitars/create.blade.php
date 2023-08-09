@extends('layout')
@section('title', 'Guitars')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 " style="display: flex; gap: 20px">

<form class="form border-1 bg-white p-6" action="{{route('guitars.store')}}" method="POST">
@csrf
{{ csrf_field() }}
<center>Create Guitar</center>
    <div>
        <label class="text-sm" for="guitar-name">Name</label>
        <input class="text-lg border-1" type="text" id="guitar-name" name="name"  value="{{old('name')}}" placeholder="Name">  
        @error('name')
            <p style="color: red; font-size: 12px">{{$message}}</p>
        @enderror  
    </div>
    <div>
        <label class="text-sm" for="brand-name">Brand</label>
        <input class="text-lg border-1" type="text" id="brand-name" name="brand"  value="{{old('name')}}"placeholder="Brand">    
         @error('brand')
            <p style="color: red; font-size: 12px">{{$message}}</p>
        @enderror 
    </div>
    <div>
        <label class="text-sm" for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" value="{{old('description')}}" placeholder="Description"></textarea>
         @error('description')
            <p style="color: red; font-size: 12px">{{$message}}</p>
        @enderror 
    </div>
    <div>
        <label class="text-sm" for="year-name">Year</label>
        <input class="text-lg border-1" type="number" id="year-name" name="year_made" value="{{old('year_made')}}" placeholder="Year">    
        @error('year_made')
            <p style="color: red; font-size: 12px">{{$message}}</p>
        @enderror 
    </div>
    <div>
        <button class="border-1" type="submit">Submit</button>
    </div>
        
</form>
    

</div>

@endsection
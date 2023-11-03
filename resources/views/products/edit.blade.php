@extends('products.layout')

<style>
    img:hover{
        transform: scale(1.5);
        transition: 2s;
    }
</style>

@section('title')
    Edit|{{$product->name}}
@endsection



@section('content')
    
    <div class="container">
        <h1>Edit: {{$product->name}} </h1>

        <br><br><br>


        <form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
                <div class="mb-5">
                  <label for="exampleInputEmail1" class="form-label">Product's Name:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$product->name}}">
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Category:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="category" value="{{$product->category}}">
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Company:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="company" value="{{$product->company}}">
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Description:</label>
                    <textarea id="" cols="137" rows="3"  name="description">value="{{$product->description}}"</textarea>
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Image:</label>
                    <img width="350px" src="/images/{{$product->image}}" alt="{{$product->name}}" srcset="">
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                </div>
    
    
                    <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
    
              </form>

    </div>


@endsection
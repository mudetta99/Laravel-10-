@extends('products.layout')

<style>
    form{
        margin: 15px;
        padding: 10px;
    }
</style>

@section('title')
@endsection

@if ($errors -> any())
    <ul>
        <div class="alert alert-danger">
            @foreach ($errors->all() as $item)
                <li> {{$item}} </li>
            @endforeach
        </div>
    </ul>
@endif


@section('content')
    
    <div class="container">
        
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mb-5">
              <label for="exampleInputEmail1" class="form-label">Product's Name:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Category:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="category">
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Company:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="company">
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Description:</label>
                <textarea id="" cols="137" rows="3"  name="description"></textarea>
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Image:</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image">
            </div>


                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>

          </form>


    </div>


@endsection
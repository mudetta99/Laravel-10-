@extends('articles.layout')

<style>
    .header h1{
        text-align: center;
        margin-top:5px;
    }
</style>


@section('title')
    Add new article
@endsection

@if ($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li> {{$item}} </li>
            @endforeach
        </ul>
    </div>
@endif


@section('content')
    

    <div class="container">
        <div class="header">
            <h1 class="text text-info">Add New Article</h1>
        </div>

        <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Title:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Title" name="title">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Entery-header:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Entery-header" name="entry_header">
        </div>


        
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Category:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Category" name="category">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Content:</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Content" name="article"></textarea>
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Image:</label>
            <input type="file" class="form-control" id="formGroupExampleInput" name="image" >
        </div>


        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>    
    </div>

@endsection
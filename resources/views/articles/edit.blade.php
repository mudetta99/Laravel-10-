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


@section('content')
    

    <div class="container">
        <div class="header">
            <h1 class="text text-info">Add New Article</h1>
        </div>

        <form action="{{route('articles.update', $article->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Title:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="{{$article->title}}" name="title">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Entery-header:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="{{$article->entry_header}}" name="entry_header">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Category:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="{{$article->category}}" name="category">
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Content:</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput" name="article">{{$article->article}}</textarea>
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Image:</label>
            <img width="350px" src="/images/{{$article->image}}" alt="{{$article->title}}"><br><br>
            <label for="formGroupExampleInput" class="form-label">Choose New Article's Image:</label>

            <input type="file" class="form-control" id="formGroupExampleInput" name="image" >
        </div>


        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>    
    </div>

@endsection
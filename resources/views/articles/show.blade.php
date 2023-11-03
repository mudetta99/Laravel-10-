@extends('articles.layout')

<style>
    .container{

    }
    .header{
        margin-top: 20px;
        width: 97%;
    }

    .header h1{
        font-size: 2.5rem;
        line-height: 1.25;
        margin: 0 0 30px;
        padding: 15px 0 0;
    }

    .article-body{
        margin-top: 20px;
        overflow: hidden;
    }
    .article-body img{
        width: 95%;
        height: 70%;
    }
    .article-body img:hover{ 
        transform: scale(1.1);
        transition: 2s;
    }



</style>
{{--  --}}

@section('title')
    Articles
@endsection




@section('content')
    

    <div class="container">
        <div class="header">
            <h1> {{$article->title}} </h1>
            <small> {{$article->created_at}} </small> <br><br>
            
            <small class="text text-danger" style="font-weight: bolder;justify-content:space-around"> {{$article->category}} </small>
            <p style="font-weight: bolder;font-size:1.5625rem;"> {{$article->entry_header}} </p style="font-weight: bolder">
        </div>

        <div class="article-body">
        
            <img width="75%" src="/images/{{$article->image}}" alt="{{$article->title}}">
            <br>

            <br><br>
            <div class="article-p">
                <h5>
                    {{$article->article}}
                </h5>  
            </div>
        </div>
        <br><br>


        {{-- <a href="{{route('articles.index')}}" class="back-btn btn btn-primary" style="opacity:80%">Back To Articles Page</a> --}}


        
    </div>



@endsection


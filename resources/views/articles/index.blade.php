@extends('articles.layout')

<style>
    .header h1{
        text-align: center;
        margin-top:5px;
    }

    .article-name{
      text-align: center;
      color: #000000;
    }
    .article-name:hover{
      color: #00000050;
    }

    .btn-article:hover{
      transform: scale(1.1)
    }
    .article-image:hover{
      transform: scale(1.02);
      transition: 2s;

    }

  .card-text{
    height: 50px;
    overflow: hidden;

    }
</style>

@section('title')
    Articles
@endsection

@if ($message = Session::get('success'))
    <div class="alert alert-success"> {{$message}} </div>
@endif



@section('content')
    

    <div class="container">

        <div class="header">
            <h1 class="text text-danger">Articles</h1>
            <img src="" alt="">
        </div>


        <br>

        <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach ($articles as $item)
            

        <div class="col">
          <div class="card shadow-sm">
            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="images/{{$item->image}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text  fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
            <img src="images/{{$item->image}}" width="100%" height="225" class="article-image"  alt="{{$item->title}}">
            <div class="card-body">
            <a style="text-decoration: none" href="{{route('articles.show', $item->id)}}"><h4 class="article-name"> {{$item->title}} </h4></a>
            

              <p class="card-text" > {{$item->entry_header}} </p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                @auth
                      
                <form action="{{route('articles.destroy', $item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm btn-article">Delete</button>
                  <a href="{{route('articles.edit', $item->id)}}" class="btn btn-primary btn-sm btn-article">Edit</a>

                @endauth
                  <a href="{{route('articles.show', $item->id)}}" class="btn btn-success btn-sm btn-article">View</a>
                </form>


                </div>
                <small class="text-muted"> {{$item->updated_at}} </small>
              </div>
            </div>
          </div>
        </div>
      
        @endforeach

      
      </div>
    </div>
  </div>

  
  

    </div>

@endsection
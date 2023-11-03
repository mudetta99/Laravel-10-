@extends('products.layout')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">


<style>

    .container{
        justify-content:space-between;
        position: relative;
    }
    .header{
        float: right;
        text-align: center;
        /* position: relative; */
    }
    .header h1{
        font-family: "Sofia", sans-serif;
    }
    .product-description{
        float: right;
        margin-right:100px ;
        position: fixed;
    }
    .product-info{
        float: left;
        margin-right:40px ;
        position: absolute;
    }

    .product-info img:hover{
        transform: scale(1.5);
        transition: 4s; 
        margin-right:100px ;
        border-radius: 20%;
    }
</style>

@section('title')
    {{$product->name}}
@endsection



@section('content')
    
    <div class="container">

        <br><br><br>

        <div class="header">
            <h1 class="text text-info"> {{$product->name}} </h1>
            <h4> Product From <span class="text text-info"> {{$product->company}} </span> Company </h4>
            <span class="text text-info"> {{$product->category}} </span>
            <br><br>

            <div class="product-description">
                <h5> {{$product->description}} </h5>
            </div>
        </div>

        <div class="product-info">
            <img width="550px" src="/images/{{$product->image}}" alt="{{$product->name}}">
        </div>

    </div>


@endsection
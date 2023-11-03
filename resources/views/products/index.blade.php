@extends('products.layout')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">


<style>

    .container h1{
        font-family: "Sofia", sans-serif;
        text-align: center;
        margin-top: 15px; 
        text-shadow: 3px 3px 3px #ababab;
    }
    table{
        text-align: center;
        /* font-family: "Audiowide", sans-serif; */
        font-family: "Trirong", serif;
    }
    img:hover{
        transform: scale(4.5);
        transition: 5s;
        border-radius: 15%;
    }
</style>

@section('title')
    Products
@endsection

@if ($message = Session::get('message'))
    <div class="alert alert-success">
        {{$message}}
    </div>
@endif

@section('content')
    
    <div class="container">
        <h1>Products</h1>

        <br><br><br>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Company</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($products as $item)
                    
                    <tr>
                        <th scope="row"> {{$item->id}} </th>
                        <td> {{$item->name}} </td>
                        <td> {{$item->category}} </td>
                        <td> {{$item->company}} </td>
                        <td> {{$item->description}} </td>
                        <td> <img src="images/{{$item->image}}" alt=" {{$item->name}} " width="150px"> </td>
                        <td>
                            @auth
                                
                            <form action="{{route('products.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a style="width: 70px" class="btn btn-dark" href="{{route('products.edit', $item->id)}}">Edit</a>
                            <button class="btn btn-danger"> Delete </button>
                            @endauth

                            <a style="width: 70px" class="btn btn-info" href="{{route('products.show', $item->id)}}">Show</a>

                            </form>
                        </td>
                        <td></td>
                    </tr>

                @endforeach



            </tbody>
          </table>



    </div>


@endsection
@extends('layouts.layouts')



@section('content')
    <hr>
    <br>
    <h1>list of motors</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Make</th>
            <th>Model</th>
            <th>Weight</th>
            <th>Color</th>
            <th><a href="{{ route('sort','price') }}">Price</a></th>
            <th><a href="{{ route('sort','created_at') }}">Added at</a></th>
        </tr>
        </thead>


        <tbody>
        @if($motors)
            @foreach($motors as $motor)
        <tr>


            <td>{{ $motor->id }}</td>
            <td><img src="https://via.placeholder.com/150x150" alt="" class="img-responsive" height="30"></td>
            <td><a href="{{ route('details',$motor->id) }}">{{ $motor->make }}</a></td>
            <td>{{ $motor->model }}</td>
            <td> {{ $motor->weight }}</td>
            <td><a href="{{ route('sort',$motor->color) }}">{{ $motor->color }}</a></td>
            <td>{{ $motor->price }}</td>
            <td>{{ $motor->created_at }}</td>
        </tr>
            @endforeach
            @endif
        </tbody>
    </table>



    @endsection
@extends('layouts.layouts')




@section('content')
    <hr>
    <br>

    <h1>details</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Make</th>
            <th>Model</th>
            <th>Weight</th>
            <th>Color</th>
            <th>Price</th>
        </tr>
        </thead>


        <tbody>


                <tr>


                    <td>{{ $motor->id }}</td>
                    <td><img src="https://via.placeholder.com/150x150" alt="" class="img-responsive" height="30"></td>
                    <td><{{ $motor->make }}</td>
                    <td>{{ $motor->model }}</td>
                    <td> {{ $motor->weight }}</td>
                    <td> {{ $motor->color }}</td>
                    <td>{{ $motor->price }}</td>
                </tr>


        </tbody>
    </table>

@endsection
@extends('layouts.app')
@section('content')
    <h1>Pulled Clients</h1>
    
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="jumbotron">
        @if(empty($allData))
            <h1>No Data Available. Please add it <a href="{{ route('clients.create') }}">here</a></h1>
        @else
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Nationality</th>
                    <th>Date Of Birth</th>
                    <th>Educational Background</th>
                    <th>Preferred Mode of Contact</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($allData as $index => $csvData)
                    <tr>
                        @foreach($csvData as $key => $data)
                            <td>{{ $csvData[$key] }}</td>
                        @endforeach
                        <td><a href="{{route('clients.show' , $index) }}">View Details</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        @endif
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </div>
@stop

@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h3>Client detail from exported CSV <span class="glyphicon glyphicon-list-alt"></span></h3>
        <table>
            <tr>
                <td><strong><span class="glyphicon glyphicon-user"></span> Name:</strong></td>
                <td>{{ $details['Name'] }}</td>
            </tr>

            <tr>
                <td><strong>Gender:</strong></td>
                <td>{{ $details['Gender'] }}</td>
            </tr>

            <tr>
                <td><strong>Phone:</strong></td>
                <td>{{ $details['Phone'] }}</td>
            </tr>

            <tr>
                <td><strong>Email:</strong></td>
                <td>{{ $details['Email'] }}</td>
            </tr>

            <tr>
                <td><strong>Address:</strong></td>
                <td>{{ $details['Address'] }}</td>
            </tr>

            <tr>
                <td><strong>Nationality:</strong></td>
                <td>{{ $details['Nationality'] }}</td>
            </tr>

            <tr>
                <td><strong>Date of Birth:</strong></td>
                <td>{{ $details['Date Of Birth'] }}</td>
            </tr>

            <tr>
                <td><strong>Educational Background:</strong></td>
                <td>{{ $details['Educational Background'] }}</td>
            </tr>

            <tr>
                <td><strong>Preferred Mode of Contact:</strong></td>
                <td>{{ $details['Preferred Mode of Contact'] }}</td>
            </tr>

        </table>
    </div>

@stop
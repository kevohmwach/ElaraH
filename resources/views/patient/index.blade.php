@extends('layouts.app')

<style>
    .download_link{
        color: white;
        font-weight: bold;
        text-decoration: none;
    }
    button{
        /* background-color: #6c757d; */
        background-color: #198754;
        color: white;
        padding: 10px 20px;
        border-radius: 2px;
        border: 1px;
    }

    .wrapper-table{
        width: 80%;
        margin: auto;
        padding: 20px;
    }

    .patients {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        .patients td, .patients th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        .patients tr:nth-child(even){background-color: #f2f2f2;}

        .patients tr:hover {background-color: #ddd;}

        .patients th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #6c757d;
        color: white;
        }

</style>

@section('content')

<div class="wrapper-table">
    <button>
        <a class="download_link"  href="{{route('patient_download')}}" >Download</a>
    </button>
    
    <table class="patients">
        <thead style="padding:5px">
            <th>Account No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{$patient['account_no']}}</td>
                    <td>{{$patient['fname']}}</td>
                    <td>{{$patient['lname']}}</td>
                    <td>{{$patient['gender']}}</td>
                    <td>{{$patient['email']}}</td>
                    <td>{{$patient['mobile_contact']}}</td>
                    <td>
                        <a href="{{route('updatePatient', ['id'=>$patient['id'] ] )}}" >Update</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

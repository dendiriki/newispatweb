@extends('admin.tools.main')

@section('content')

    <style>
        /* CSS untuk styling tabel */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        /* CSS untuk tombol */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>

    <table>
        <tr>
            <th>NearMiss</th>
            <th>FirstAIDCases</th>
            <th>MedicalTreatmentCases</th>
            <th>LostWorkdays </th>
        </tr>
        <tr>
            <td>{Data 1}</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
        </tr>
    </table>

    <div class="button-container">
        <a href="{{ route('nearmiss') }}" class="button">NearMiss</a>
        <a href="{{ route('firstaid') }}" class="button">FirstAIDCases</a>
        <a href="{{ route('medical') }}" class="button">MedicalTreatmentCases</a>
        <a href="{{ route('lostworkdays') }}" class="button">LostWorkdays</a>
    </div>


    @endsection


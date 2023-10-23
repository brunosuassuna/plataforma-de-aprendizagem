@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Área do professor</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Média</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($averages as $average)
                    <tr>
                        <td>{{ $average['course'] }}</td>
                        <td>{{ $average['average'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

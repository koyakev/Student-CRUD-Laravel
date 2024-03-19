@extends('students.layout')

@section('title')

View

@endsection

@section('content')

<div class="container">
    <div class="row" style="margin: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>ID Number: {{ $student->id }}</h1>
                </div>
                <div class="card-body">

                    <p>Name: {{ $student->name }}</p>
                    <p>Address: {{ $student->address }}</p>
                    <p>Mobile: {{ $student->mobile }}</p>
                    {!! QrCode::size(100)->generate($student) !!}
                    <div>
                        <a href="{{ route('index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

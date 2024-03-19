@extends('students.layout')
@section('content')

<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 10 CRUD</h2>
                </div>
                <div class="card-body">

                    <a href="{{ route('createStudent') }}" class="btn btn-success">Add New</a>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>

                            @foreach($students as $student)

                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->mobile }}</td>
                                <td>
                                    <form method="POST" action="{{ route('delete', $student->id )}}">
                                        @csrf
                                        <a href="{{ route('display', $student->id) }}" class="btn btn-secondary">View</a>
                                        <a href="{{ route('edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm Delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

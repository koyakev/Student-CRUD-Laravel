@extends('students.layout')
@section('content')

<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Student</h2>
                </div>
                <div class="card-body">

                    <div class="col-auto">
                        <form method="POST" action="{{ route('update', $student->id) }}">
                        @csrf
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-4 col-form-label">Enter Name: </label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="address" class="col-sm-4 col-form-label">Enter Address: </label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" value="{{ $student->address }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="mobile" class="col-sm-4 col-form-label">Enter Mobile Number: </label>
                                <div class="col-sm-8">
                                    <input type="text" name="mobile" value="{{ $student->mobile }}" class="form-control" required>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

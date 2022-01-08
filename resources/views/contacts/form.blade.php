@extends('layouts.main')

@section('content')
    <div class="col-md-12">

        <form method="POST" enctype="multipart/form-data"
              action="" id="form"
        >
            <div>

                @csrf
                <div class="input-group row">
                    <label for="fname" class="col-sm-2 col-form-label">First name: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fname" id="fname"
                               value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="lname" class="col-sm-2 col-form-label">Last name: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lname" id="lname"
                               value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email" id="email"
                               value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="birthdate" class="col-sm-2 col-form-label">Date of birth: </label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="birthdate" id="birthdate"
                               min="2018-01-01" max="2018-12-31" required>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="phone_numbers" class="col-sm-2 col-form-label">Phone numbers (form +380123456789 or 0123456789): </label>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" name="phone_numbers[]" id="phone_numbers"
                               value="">
                        <a href="#" id="add_number" onclick="add_number()">Add number</a>
                    </div>
                </div>
                <br>
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <a href="{{ route('contacts.index') }}">Back to contacts</a>
        <form method="POST" enctype="multipart/form-data" id="form"
            @if(isset($contact))
                action="{{ route('contacts.update', $contact) }}">
            @else
                action="{{ route('contacts.store') }}">
            @endif
            @csrf
            @isset($contact)
                @method('PUT')
            @endisset
            <div>
                <div class="input-group row">
                    <label for="first_name" class="col-sm-2 col-form-label">First name: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="first_name" id="first_name"
                               value="{{ old('first_name', isset($contact) ? $contact->first_name : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last name: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="last_name" id="last_name"
                               value="{{ old('last_name', isset($contact) ? $contact->last_name : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email" id="email"
                               value="{{ old('email', isset($contact) ? $contact->email : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="date_of_birth" class="col-sm-2 col-form-label">Date of birth: </label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required
                               value="{{ old('date_of_birth', isset($contact) ? $contact->date_of_birth : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="phone_numbers" class="col-sm-2 col-form-label">Phone numbers (form +380123456789 or 0123456789): </label>
                    <div class="col-sm-6" id="nums">
                        @if(isset($contact))
                            @foreach($contact->phoneNumbers as $number)
                                <input type="tel" class="form-control mb-2" name="phone_numbers[]" id="phone_numbers"
                                       placeholder="+380__________" pattern="^\+?3?8?(0\d{9})$" maxlength="13"
                                value="{{ old('phone_numbers', isset($number) ? $number->phone_number : null) }}">
                            @endforeach
                        @else
                        <input type="tel" class="form-control mb-2" name="phone_numbers[]" id="phone_numbers"
                               placeholder="+380__________" pattern="^\+?3?8?(0\d{9})$" maxlength="13">
                        @endif
                    </div>
                    <div>
                        <a href="#" id="add_number" onclick="add_number()">Add number</a>
                    </div>
                    <div>
                        <a href="#" id="delete_number" onclick="delete_number()">Delete number</a>
                    </div>
                </div>
                <br>
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection

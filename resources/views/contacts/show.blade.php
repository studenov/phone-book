@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <a href="{{ route('contacts.index') }}">Back to contacts</a>
        <h1>{{ $contact->first_name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Field
                </th>
                <th>
                    Value
                </th>
            </tr>
            <tr>
                <td>#</td>
                <td>{{ $contact->id }}</td>
            </tr>
            <tr>
                <td>First name</td>
                <td>{{ $contact->first_name }}</td>
            </tr>
            <tr>
                <td>Last name</td>
                <td>{{ $contact->last_name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td>{{ $contact->date_of_birth }}</td>
            </tr>
            <tr>
                <td>Phone numbers</td>
                <td>
                @foreach($contact->phoneNumbers as $number)
                    <p>{{ $number->phone_number }}</p>
                @endforeach
                </td>
            </tr>
            <tr>
                <td>Actions</td>
                <td>
                    <form method="POST" action="{{ route('contacts.destroy', $contact) }}">
                        <a type="button" href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

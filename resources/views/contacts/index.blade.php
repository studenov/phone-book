@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <h1>Contacts</h1>
        <div>
            <a class="btn btn-success" type="button" href="{{ route('contacts.create') }}">Add contact</a>
        </div>
        <table class="table">
            <tr>
                <th>
                    #
                </th>
                <th>
                    @sortablelink('first_name', 'First name')
                </th>
                <th>
                    @sortablelink('last_name', 'Last name')
                </th>
                <th>
                    @sortablelink('email', 'Email')
                </th>
                <th>
                    @sortablelink('date_of_birth', 'Date of birth')
                </th>
                <th>
                    Phone numbers
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td><a href="{{ route('contacts.show', $contact) }}">{{ $contact->first_name }}</a></td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->date_of_birth }}</td>
                    <td>
                    @foreach($contact->phoneNumbers as $number)
                        <p>{{ $number->phone_number }}</p>
                    @endforeach
                    </td>
                    <td>
                        <form method="POST" action="{{ route('contacts.destroy', $contact) }}">
                            <a type="button" href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $contacts->withQueryString()->links() }}
@endsection

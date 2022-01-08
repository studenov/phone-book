@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <h1>Contacts</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    First name
                </th>
                <th>
                    Last name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Date of birth
                </th>
                <th>
                    Phone numbers
                </th>
                <th>
                    Actions
                </th>
            </tr>

            </tbody>
        </table>
        <a class="btn btn-success" type="button" href="">Add contact</a>
    </div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Contacts - CRM</title>
    </head>
    <body>

        <h1>Contacts</h1>

        <p>
            <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="/contacts/create">Add New Contact</a>
        </p>

        <table>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th></th>
            </tr>

            @forelse($contacts as $contact)

                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->telephone }}</td>
                    <td><a href="/contacts/{{ $contact->id }}/edit">Edit</a></td>
                </tr>

            @empty

                <tr>
                    <td colspan="5">
                        No contacts found!
                    </td>
                </tr>

            @endforelse

        </table>

    </body>
</html>
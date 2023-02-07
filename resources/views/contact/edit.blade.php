<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Edit {{ $contact->name }} - CRM</title>
    </head>
    <body>

        <h1>Edit {{ $contact->name }}</h1>

        <p>
            <a href="/contacts">Back to Contacts</a>
        </p>

        <form action="/contacts/create" method="POST">
            @csrf

            <label>Name</label><br>
            <input type="text" name="name" value="{{ $contact->name }}" required><br><br>

            <label>Email</label><br>
            <input type="email" name="email" value="{{ $contact->email }}" required><br><br>

            <label>Address</label><br>
            <input type="text" name="address" value="{{ $contact->address }}" required><br><br>

            <label>Telephone</label><br>
            <input type="tel" name="telephone" value="{{ $contact->telephone }}"><br><br>

            <button type="submit">Update Contact</button>
        </form>

    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Create Contact - CRM</title>
    </head>
    <body>

        <h1>Add Contact</h1>

        <p>
            <a href="/contacts">Back to Contacts</a>
        </p>

        <form action="/contacts/create" method="POST">
            @csrf

            <label>Name</label><br>
            <input type="text" name="name" required><br><br>

            <label>Email</label><br>
            <input type="email" name="email" required><br><br>

            <label>Address</label><br>
            <input type="text" name="address" required><br><br>

            <label>Telephone</label><br>
            <input type="tel" name="telephone"><br><br>

            <button type="submit">Create Contact</button>
        </form>

    </body>
</html>
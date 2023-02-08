<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Contacts - CRM</title>
    </head>
    <body>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto">
                <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">
                    <p>Contacts</p>
                </h1>
                <form class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl">
                    <table class="table-auto w-full">
                        <thead class="text-left tracking-wider">
                            <tr>
                                <th class="p-4 ">Name</th>
                                <th class="p-4 ">Email</th>
                                <th class="p-4 ">Address</th>
                                <th class="p-4 ">Phone Number</th>
                            </tr>
                            </thead>
                            
                            @forelse($contacts as $contact)
                        
                                <tbody>
                                    <tr class="mt-6 rounded">
                                        <td class="p-4">{{ $contact->name }}</td>
                                        <td class="p-4">{{ $contact->email }}</td>
                                        <td class="p-4">{{ $contact->address }}</td>
                                        <td class="p-4">{{ $contact->telephone }}</td>
                                        <td class="p-4">
                                            <button class="block w-full justify-center items-center px-1 py-1 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                                                <a href="/contacts/{{ $contact->id }}/edit">Edit</a>
                                            </button>
                                        </td>
                                        <td class="p-4">
                                            <button class="block w-full justify-center items-center px-1 py-1 text-sm font-medium text-white bg-red-600 rounded-lg">
                                                <a href="/contacts/{{ $contact->id }}/edit">Delete</a>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            
                            @empty
    
                                <p class="text-lg font-medium text-center">No contacts found!</p>
    
                            @endforelse

                    </table>
                </form>
                <div class="flex flex-col items-center justify-center mt-5">
                    <button class="block w-1/2 mb-5 px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                        <a href="/contacts/create">Add New Contact</a>
                    </button>
                    <button class="block w-1/2 px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                        <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
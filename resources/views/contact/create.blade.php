<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Create Contact - CRM</title>
    </head>
    <body>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">
                    <p>Add Contact</p>
                </h1>
        
                <form action="/contacts/create" method="POST" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl">
                    @csrf
                    <p class="text-lg font-medium text-center">Contact Details</p>
        
                    <div>
                        <label class="text-sm font-medium">Name</label><br>
                        
                        <div class="relative mt-1">
                            <input
                            type="text"
                            name="name"
                            required
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Name"
                            />
                        </div>
                    </div>
        
                    <div>
                        <label class="text-sm font-medium">Email</label>
            
                        <div class="relative mt-1">
                            <input
                            type="email"
                            name="email"
                            required
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Email"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="text-sm font-medium">Address</label>
            
                        <div class="relative mt-1">
                            <input
                            type="text"
                            name="address"
                            required
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Address"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="text-sm font-medium">Telephone</label>
            
                        <div class="relative mt-1">
                            <input
                            type="tel"
                            name="telephone"
                            required
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Telephone"
                            />
                        </div>
                    </div>
    
                    <button type="submit" class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                        Create Contact
                    </button>
                    <button class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                        <a href="/contacts">Back to Contacts</a>
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>
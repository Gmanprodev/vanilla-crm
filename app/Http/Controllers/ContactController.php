<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();

        return view('contact.index', [
            'contacts' => $contacts
        ]);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            abort(404);
        }

        return view('contact.edit', [
            'contact' => $contact
        ]);
    }

    public function postCreate(ContactRequest $request)
    {
        $contact = Contact::create($request->only([
            'name', 'email', 'address', 'telephone'
        ]));

        if (!$contact) {
            abort(500);
        }

        return redirect('contacts')
            ->with('status', 'Contact created!');
    }

    public function postEdit($id, ContactRequest $request)
    {
        $contact = Contact::find($id)
            ->update($request->only([
                'name', 'email', 'address', 'telephone'
            ]));

        if (!$contact) {
            abort(500);
        }

        return redirect('contacts')
            ->with('status', 'Contact updated!');
    }
}
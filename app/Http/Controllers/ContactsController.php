<?php

namespace App\Http\Controllers;

use App\Models\Addressbook;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $addressbooks = AddressBook::where('user_id', '=', $user->id )->with(['contacts' => function($q) { $q->orderBy('last_name');}, 'contacts.contactInformation', 'contacts.contactAddresses'])->get();

        return Inertia::render('Contacts/Index', [
            'addressbooks' => $addressbooks
        ]);
    }
}

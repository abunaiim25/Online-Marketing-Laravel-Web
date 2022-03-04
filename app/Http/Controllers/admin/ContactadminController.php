<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactadminController extends Controller
{
    public function admin_contact()
    {
        $contact = Contact::latest()->paginate(10);
        return view('admin.contact.index',compact('contact'));
    }

    public function contact_seen_admin($id)
    {
        $contact = Contact::find($id);
        $contact->status='Seen';
        $contact->save();
        return redirect()->back();
    }

        //message_seen
        public function message_seen($id)
        {
            $contact = Contact::find($id);
            return view('admin.contact.message',compact('contact'));
        }


        //====================contact_email_view==============================
        //EmailController
}

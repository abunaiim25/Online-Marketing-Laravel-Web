<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendEmailNotification;


class EmailController extends Controller
{

    //========================Order=================================
    public function email_view($id)
    {
        $data = User::find($id);
        $order = Order::find($id);
        return view('admin.email_view', compact('data', 'order'));
    }

    //send_email
    public function send_email(Request $request, $id)
    {
        $data = User::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendEmailNotification($details));
        return redirect('/home')->with('success', 'Email Send Successfully');
    }


    //====================Contact==========================

    public function contact_email_view($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.email_view', compact('contact'));
    }

    //send_email
    public function contact_send_email(Request $request, $id)
    {
        $data = Contact::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendEmailNotification($details));
        return redirect('admin_contact')->with('success', 'Email Send Successfully');
    }
}

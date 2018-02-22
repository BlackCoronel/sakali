<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Notifications\InboxMessage;
use App\Admin;


class ContactController extends Controller
{
    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {        //send the admin an notification
        $admin->notify(new InboxMessage($message));
        // redirect the user back
        return redirect()->back()->with('message', 'Gracias por contactar con nosotros, le responderemos los más rápido posible!');
    }

}

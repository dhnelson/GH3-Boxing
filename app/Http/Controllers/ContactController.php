<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Contact Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles sending the contact email.
    |
    */

    public function ContactForm(ContactFormRequest $request)
    {
        Contact::create($request->all());

        $data = [
        	'name' 	  	  => $request->name,
        	'email'   	  => $request->email,
        	'subject' 	  => $request->subject,
        	'bodyMessage' => $request->message
        ];

        mail::send('contact.contactEmail', $data, function($message) use ($data) {
        		$message->from($data['email']);
        		$message->to('dustinhnelson@gmail.com');
        		$message->subject($data['subject']);
        });

        flash()->success('Thanks!', 'Your Message Was Sent Successfully');

        return redirect()->route('home');
    }

} 
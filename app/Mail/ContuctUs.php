<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContuctUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $name           = $request->user_name ;
        $phone          = $request->user_telephone ;
        $email          = $request->user_email ;
        $subject        = $request->user_subject ;
        $userMessage    = $request->user_message ;

        // $data[]         = ['name' => $name, 'phone' => $phone, 'email' => $email, 'message' => $message];

        return $this->from(['address' => $email, 'name' => $name])->view('frontend.mail.contactus', compact('name', 'phone', 'email', 'userMessage'))->subject($subject);
    }
}

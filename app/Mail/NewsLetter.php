<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Article;
use App\Settings;

class NewsLetter extends Mailable
{
    use Queueable, SerializesModels;

    protected $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $articleObj         = new Article();
        $articles           = $articleObj->take(10)->get();

        $settingsObj    = new Settings();
        $settings       = $settingsObj->first();

        $token          = $this->token;


        return $this->from('newsletter@banglabox.net')->view('backend.mail.newslettertpl', compact('settings', 'articles','token'))->subject('BanglaBox - Weekly Digest.');
        // return $this->view('backend.mail.newslettertpl');
    }
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $formData2;

    public function __construct($formData2)
    {
        $this->formData2 = $formData2;
    }

    public function handle()
    {
        // Send email using Laravel's default mail driver
        Mail::to('raghavanofficials@gmail.com')->send(new ContactForm($this->formData2));
    }
}
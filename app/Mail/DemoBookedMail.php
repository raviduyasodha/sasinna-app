<?php

namespace App\Mail;

use App\Models\DemoBooking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoBookedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct(DemoBooking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('New Demo Booking Request')
                    ->view('emails.demo-booked');
    }
}

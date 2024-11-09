<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegisterSuccess extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $name;
    public $username;
    public $password;
    public $token;
    /**
     * Create a new message instance.
     */
    public function __construct($token, $name, $username, $password)
    {
        $this->token = $token;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Xác nhận đăng ký tài khoản',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.email-verified',
            with: [
                'name' => $this->name,
                'username' => $this->username,
                'password' => $this->password,
                'token' => $this->token
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

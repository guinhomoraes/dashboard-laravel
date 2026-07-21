<?php

namespace App\Services;

use App\Mail\DefaultMail;
use App\Notifications\DefaultNotification;
use Illuminate\Support\Facades\Mail;

class NotificationService
{
    /**
     * Enviar e-mail.
     */
    public function sendEmail(
        string $email,
        string $subject,
        string $message
    ): void {
        Mail::to($email)->send(
            new DefaultMail($subject, $message)
        );
    }

    /**
     * Enviar notificação para um usuário.
     */
    public function notify(
        $user,
        string $title,
        string $message
    ): void {
        $user->notify(
            new DefaultNotification($title, $message)
        );
    }
}
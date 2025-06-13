<?php

declare(strict_types=1);

class NotificationService
{
    public function __construct(private Mailer $mailer) {}


    public function sendNotification(string $recipientEmail, string $message): bool
    {
        $subject = 'New Notification';

        return $this->mailer->sendEmail($recipientEmail, $subject, $message);
    }
}

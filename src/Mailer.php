<?php

declare(strict_types=1);

class Mailer
{
    public function sendEmail(string $recipientEmail, string $subject, string $message): bool
    {
        echo '(sending email...)';

        sleep(3);

        return true;
    }
}

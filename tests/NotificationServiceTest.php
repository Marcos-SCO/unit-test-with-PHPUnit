<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NotificationServiceTest extends TestCase
{
    public function testNotificationSent(): void
    {
        // $mailer = new Mailer;

        // Test class in isolation without worrying for external dependencies
        $mailer = $this->createStub(Mailer::class);
        $mailer->method('sendEmail')
            ->willReturn(true);

        $service = new NotificationService($mailer);

        $this->assertTrue($service->sendNotification('marcos@test.com', 'Hello'));
    }

    public function testSendThrowsException(): void
    {
        $mailer = $this->createStub(Mailer::class);

        $mailer->method('sendEmail')
            ->willThrowException(new RuntimeException('SMTP server down'));

        $service = new NotificationService($mailer);

        $this->expectException(NotificationException::class);
        $this->expectExceptionMessage('Could not send notification');

        $service->sendNotification('marcos@test.com', 'Hello');
    }

    public function testMailerIsCalledCorrectly(): void
    {
        $mailer = $this->createMock(Mailer::class);

        $mailer->expects($this->once())
            ->method('sendEmail')
            ->with('marcos@test.com', 'New Notification', 'Hi')
            ->willReturn(true);

        $service = new NotificationService($mailer);

        $this->assertTrue($service->sendNotification('marcos@test.com', 'Hi'));
    }
}

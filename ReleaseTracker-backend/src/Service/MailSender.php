<?php

namespace App\Service;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailSender
{
    public function __construct(
        private MailerInterface $mailer,
        private LoggerInterface $logger,
        private string $fromEmailAddress,
        private string $fromEmailName
    ) {}

    public function sendMail(string $subject, array $to, string $content) {
        $message = ( new Email())
            ->subject($subject)
            ->to(...$to)
            ->from(new Address($this->fromEmailAddress, $this->fromEmailName))
            ->html($content);
        try {
            $this->mailer->send($message);
        } catch (Exception $exception) {
            $this->logger->critical($exception->getMessage());
        }

    }

}

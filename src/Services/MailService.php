<?php

namespace PHP28\Services;

use PHPMailer\PHPMailer\PHPMailer;

class MailService
{
    private function configureMailer(): PHPMailer
    {
        $mailer = new PHPMailer();

        $mailer->isSMTP();
        $mailer->Host = $_ENV['MAILTRAP_HOST'];
        $mailer->SMTPAuth = true;
        $mailer->Username = $_ENV['MAILTRAP_USERNAME'];
        $mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
        $mailer->Port = $_ENV['MAILTRAP_PORT'];
        return $mailer;
    }

    public function sendWelcomeMail(string $username, string $email): bool
    {
        $mailer = $this->configureMailer();
        $mailer->setFrom('noreply@example.com', 'PHP28');
        $mailer->addAddress($email);
        $mailer->isHTML(true);
        $mailer->Subject = 'Registracija je uspesno zavrsena!';
        $mailer->Body = "<h1>Dobro dosli, $username!</h1><p>Vas nalog je spreman za koriscenje.</p>";
        $mailer->AltBody = "Dobro dosli, $username!\nVas nalog je spreman za koriscenje.";
        return $mailer->send();
    }
}
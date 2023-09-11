<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";
$mail->setFrom('revuedesmines2023@gmail.com');
$mail->addAddress($email);

$mail->isHTML(true);
$mail->Subject = "Places pour la Revue des Mines";

$mail->Body = "
<html>
<head>
</head>
<body>
<p>Bonjour,</p>
<p></p>
<p>Vous trouverez en attachement de ce mail vos places pour la Revue des Mines. 
Veuillez les imprimer et vous présenter avec le 28 avril 2023 au Théâtre Royal de Mons à partir 
de 19h00. La pièce commencera à 20h00 précise.</p>
<p>Si la pièce jointe n'apparaît pas ou est illisible, essayez de déplacer le mail dans votre 
boite de réception ou de l'ouvrir avec votre téléphone.</p>
<p></p>
<p>En vous remerciant pour votre achat,</p>
<p>Les GO's 2023</p>
<p></p>
</body>
</html>
";

//generate attachement
$pdf = new Imagick();
$draw = new \ImagickDraw();
$draw->setFont('Helvetica');
$draw->setFontSize(30);
$draw->setFillColor(new \ImagickPixel('white'));
$i = 1;
$counter = 1;
$max = ceil(count($places)/15);

foreach ($places as $place) {
    [$position, $seat] = explode(" ", $place);

    if($seat != " " && $seat != "") {
        $invit = new Imagick();
        $invit->readImage('img/background/Ticket-1-1-1.png');

        $invit->annotateImage($draw, 866, 1440, 0, $name);
        $invit->annotateImage($draw, 866, 1494, 0, ucfirst($position));
        $invit->annotateImage($draw, 866, 1560, 0, $seat);
        $invit->annotateImage($draw, 866, 1622, 0, ($position == "parterre") ? "60€" : "50€");
        $pdf->addImage($invit);
        $invit->destroy();

        if($i >= 15){
            if($max != 1) $mail->Subject = "Places pour la Revue des Mines (". $counter ."/".$max.")";

            $pdf->setImageFormat('pdf');
            $pdf->writeImages('invitations.pdf', true);
            $mail->addAttachment('invitations.pdf');

            $mail->send();
            //$mail->clearAttachments();
            $pdf->destroy();

            $pdf = new Imagick();
            $counter += 1;
            $i = 0;
        }
        $i += 1;
    }
}

if($i != 1) {
    if ($max !=1) $mail->Subject = "Places pour la Revue des Mines (" . $counter . "/" . $max . ")";

    $pdf->setImageFormat('pdf');
    $pdf->writeImages('invitations.pdf', true);
    $mail->addAttachment('invitations.pdf');

    $mail->send();
}
$pdf->destroy();

$places = ["Balcon - D3","Balcon - D48", "Pareterre - C37","Pareterre - C374"];
$owner = "Florian Dubois";
?>
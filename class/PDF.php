<?php

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require_once __DIR__ . '/vendor/autoload.php';


//require('../fpdf/fpdf.php');

class PDF extends FPDF
{

//https://www.youtube.com/watch?v=MnIps8Yc8CY -->> nur PDF
//https://www.youtube.com/watch?v=oDn67bNou2s
//https://www.youtube.com/watch?v=6aj_T2cX7RY -->> PDF vom DB
//https://www.youtube.com/watch?v=K8eoQPwKZjY -->> Mail mit PDF als Anhang! ->Nicht benötigt

    function Header()
    {
        // Logo
        $this->Image('../img/logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Title',1,0,'C');
        // Line break
        $this->Ln(20);
    }

    function HeaderTable(){
        $this ->SetFont('Arial', 'B', 12);
        $this ->Cell(40, 10, 'Vorname', 1, 0, 'C');
        $this ->Cell(40, 10, 'Nachname', 1, 0, 'C');
    }


//User $testuser,Antrag $antrag
    public static function pdfAnzeigen()
    {
        if($_POST){

//            require('../fpdf/fpdf.php');
            $vorname = $_POST ['vornameP'];
            $nachname = $_POST ['nachnameP'];
            $geburi = $_POST['geburi'];
            $patID = $_POST['patId'];
            $unterDatum = $_POST['untersDatum'];
            $massID = $_POST['massnahmeNr'];
            $studie = $_POST['studie'];
            $unterZeit = $_POST['untersZeit'];
            $modalitaet = $_POST['modalitaet'];
            $instanz = $_POST['instanz'];
            $begruendung = $_POST['begruendung'];
            $title = 'Patient';

            $pdf = new FPDF();
            $pdf -> AddPage();
            $pdf -> SetTitle($title);
            $pdf -> SetFont('Arial', 'B', 15);
            $pdf -> Cell(0, 10, $title, 1, 1, 'C');
            $pdf ->headerTable();

            $pdf ->Output();
        }
//        $mpdf = new \Mpdf\Mpdf();
//
//        $html = '';
//        //echo $geburi;
////        $testuser = User::getById('1');
//
//        $html .= '<h1>Hier sind die Änderungen:</h1>';
//
////        $html .= '<h2>User</h2>';
////        $html .= '<strong>Vorname:</strong>  ' . $testuser->getVorname() . '<br />';
////        $html .= '<strong> Nachname:</strong> ' . $testuser->getNachname() . '<br />';
////        $html .= '<strong> Mail: </strong>' . $testuser->getUserMail() . '<br />';
////        $html .= '<strong> Tel: </strong>' . $testuser->getTel() . '<br />';
////        $html .= '<strong> Personal-Nr. </strong>' . $testuser->getPersNr() . '<br />';
//
//        $html .= '<h2>Patient</h2>';
//
//
//        $html .= '<strong> Vorname Patient:</strong>' . $antrag->getVornameP() . '<br />';
//        $html .= '<strong> Nachname Patient:</strong> ' . $antrag->getNachnameP() . '<br />';
//        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag->getGeburi() . '<br />';
//        $html .= '<strong> Patienten ID: </strong>' . $antrag->getPatID() . '<br />';
//        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag->getunterDatum() . '<br />';
//        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag->getUnterZeit() . '<br />';
//        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag->getMassID() . '<br />';
////        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag->getStudie() . '<br />';
//        $html .= '<strong> Modalität:</strong> ' . $antrag->getModalitaet() . '<br />';
//        $html .= '<strong> Instanz:</strong> ' . $antrag->getInstanz() . '<br />';
//        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
////        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';
//
//        //PDF schreiben
//
//        $mpdf->WriteHTML($html);
//
////Output to browser -> 'D' = Download
//
//        $mpdf->Output('Änderungsantrag.pdf', 'D');

    }

    //User $testuser,
    public static function pdfAnzeigen2($testuser, Antrag $antrag, Antrag $antrag2)
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = '';
        $testuser = User::getById('1');

        $html = '<h1>Hier sind die Änderungen:</h1>';


        $html .= '<h2>User</h2>';
        $html .= '<strong>Vorname:</strong>  ' . $testuser->getVorname() . '<br />';
        $html .= '<strong> Nachname:</strong> ' . $testuser->getNachname() . '<br />';
        $html .= '<strong> Mail: </strong>' . $testuser->getUserMail() . '<br />';
        $html .= '<strong> Tel: </strong>' . $testuser->getTel() . '<br />';
        $html .= '<strong> Personal-Nr. </strong>' . $testuser->getPersNr() . '<br />';

        $html .= '<h2> von Patienten:</h2>';
        $html .= '<strong> Instanz:</strong> ' . $antrag->getInstanz() . '<br />';
        $html .= '<strong> Modalität:</strong> ' . $antrag->getModalitaet() . '<br />';
        $html .= '<strong> Vorname Patient:</strong>' . $antrag->getVornameP() . '<br />';
        $html .= '<strong> Nachname Patient:</strong> ' . $antrag->getNachnameP() . '<br />';
        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag->getGeburi() . '<br />';
        $html .= '<strong> Patienten ID: </strong>' . $antrag->getPatID() . '<br />';
        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag->getunterDatum() . '<br />';
        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag->getUnterZeit() . '<br />';
        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag->getMassID() . '<br />';
        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag->getStudie() . '<br />';
//        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
//        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';
//

        $html .= '<h2>zu Patienten:</h2>';
        $html .= '<strong> Instanz:</strong> ' . $antrag2->getInstanz() . '<br />';
        $html .= '<strong> Modalität:</strong> ' . $antrag2->getModalitaet() . '<br />';
        $html .= '<strong> Vorname Patient:</strong>' . $antrag2->getVornameP() . '<br />';
        $html .= '<strong> Nachname Patient:</strong> ' . $antrag2->getNachnameP() . '<br />';
        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag2->getGeburi() . '<br />';
        $html .= '<strong> Patienten ID: </strong>' . $antrag2->getPatID() . '<br />';
        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag2->getunterDatum() . '<br />';
        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag2->getUnterZeit() . '<br />';
        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag2->getMassID() . '<br />';
        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag2->getStudie() . '<br />';
        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';

        //PDF schreiben

        $mpdf->WriteHTML($html);

//Output to browser -> 'D' = Download

        $mpdf->Output('Änderungsantrag.pdf', 'D');
    }


//$enquirydata = [
//
//'Vorname' => $testuser
//'First Name'=> $fname,
//'Email'=>  $email,
//'Phone'=> $phone,
//'Message'=>$message
//];

//sendEmail($pdf, $enquirydata);




    public static function sendEmail($pdf, $testuser, $antrag)
    {
        $mpdf = new \Mpdf\Mpdf();

        $html = '';
        //echo $geburi;
        $testuser = User::getById('1');

        $html = '<h1>Hier sind die Änderungen:</h1>';

        $html .= '<h2>User</h2>';
        $html .= '<strong>Vorname:</strong>  ' . $testuser->getVorname() . '<br />';
        $html .= '<strong> Nachname:</strong> ' . $testuser->getNachname() . '<br />';
        $html .= '<strong> Mail: </strong>' . $testuser->getUserMail() . '<br />';
        $html .= '<strong> Tel: </strong>' . $testuser->getTel() . '<br />';
        $html .= '<strong> Personal-Nr. </strong>' . $testuser->getPersNr() . '<br />';

        $html .= '<h2>Patient</h2>';
        $html .= '<strong> Instanz:</strong> ' . $antrag->getInstanz() . '<br />';
        $html .= '<strong> Modalität:</strong> ' . $antrag->getModalitaet() . '<br />';
        $html .= '<strong> Vorname Patient:</strong>' . $antrag->getVornameP() . '<br />';
        $html .= '<strong> Nachname Patient:</strong> ' . $antrag->getNachnameP() . '<br />';
        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag->getGeburi() . '<br />';
        $html .= '<strong> Patienten ID: </strong>' . $antrag->getPatID() . '<br />';
        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag->getunterDatum() . '<br />';
        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag->getUnterZeit() . '<br />';
        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag->getMassID() . '<br />';
        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag->getStudie() . '<br />';
        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';

        //PDF schreiben

        $mpdf->WriteHTML($html);

//Output to browser -> Achtung 'S' = String geändert (anstatt 'D')

        $pdf = $mpdf->Output('Änderungsantrag.pdf', 'S');


        $emailbody = '';
        $emailbody = '<h1>Email gesendet von '.  $testuser->getUserMail() . '</h1>'; //



//        foreach ($enquirydata as $title => $data) {
//
//            $emailbody .= '<strong>' . $title . '</strong>: ' . $data . '<br />';
//
//        }

        $mail = new PHPMailer(true);

        try {
            //Server settings -> Achtung bei Go Live, Setting ändern :-)
            $mail->SMTPDebug = false;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = '56e0cebbd7bd1f';                     // SMTP username
            $mail->Password = 'c61c924727d323';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('test@myemail.com', 'Test Form');
            $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient ->bei Go Live ändern zu dem Administrator von HD
//        $mail->addAddress('ellen@example.com');               // Name is optional
//        $mail->addReplyTo('info@example.com', 'Information');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');

//        // Attachments
//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addStringAttachment($pdf, 'PACSAenderungsantrag.pdf');    // Add attachments PDF

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Betreff: PACS Datenaenderungsantrag';         //Betreff von Email
            $mail->Body = $emailbody;
            $mail->AltBody = strip_tags($emailbody);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function sendEmail2($pdf2, $testuser, $antrag, $antrag2)
    {
        $mpdf = new \Mpdf\Mpdf();

        $html = '';
        //echo $geburi;
        $testuser = User::getById('1');

        $html = '<h1>Hier sind die Änderungen:</h1>';

        $html .= '<h2>User</h2>';
        $html .= '<strong>Vorname:</strong>  ' . $testuser->getVorname() . '<br />';
        $html .= '<strong> Nachname:</strong> ' . $testuser->getNachname() . '<br />';
        $html .= '<strong> Mail: </strong>' . $testuser->getUserMail() . '<br />';
        $html .= '<strong> Tel: </strong>' . $testuser->getTel() . '<br />';
        $html .= '<strong> Personal-Nr. </strong>' . $testuser->getPersNr() . '<br />';

        $html .= '<h2>Patient</h2>';
        $html .= '<strong> Instanz:</strong> ' . $antrag->getInstanz() . '<br />';
        $html .= '<strong> Modalität:</strong> ' . $antrag->getModalitaet() . '<br />';
        $html .= '<strong> Vorname Patient:</strong>' . $antrag->getVornameP() . '<br />';
        $html .= '<strong> Nachname Patient:</strong> ' . $antrag->getNachnameP() . '<br />';
        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag->getGeburi() . '<br />';
        $html .= '<strong> Patienten ID: </strong>' . $antrag->getPatID() . '<br />';
        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag->getunterDatum() . '<br />';
        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag->getUnterZeit() . '<br />';
        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag->getMassID() . '<br />';
        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag->getStudie() . '<br />';
        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';

        $html .= '<h2>zu Patienten:</h2>';
        $html .= '<strong> Instanz:</strong> ' . $antrag2->getInstanz() . '<br />';
        $html .= '<strong> Modalität:</strong> ' . $antrag2->getModalitaet() . '<br />';
        $html .= '<strong> Vorname Patient:</strong>' . $antrag2->getVornameP() . '<br />';
        $html .= '<strong> Nachname Patient:</strong> ' . $antrag2->getNachnameP() . '<br />';
        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag2->getGeburi() . '<br />';
        $html .= '<strong> Patienten ID: </strong>' . $antrag2->getPatID() . '<br />';
        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag2->getunterDatum() . '<br />';
        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag2->getUnterZeit() . '<br />';
        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag2->getMassID() . '<br />';
        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag2->getStudie() . '<br />';
        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';
        //PDF schreiben

        $mpdf->WriteHTML($html);

//Output to browser  -> Achtung 'S' geändert (anstatt 'D')

        $pdf2 = $mpdf->Output('Änderungsantrag.pdf', 'S');


        $emailbody = '';
        $emailbody = '<h1>Email gesendet von '.  $testuser->getUserMail() . '</h1>'; //



//        foreach ($enquirydata as $title => $data) {
//
//            $emailbody .= '<strong>' . $title . '</strong>: ' . $data . '<br />';
//
//        }

        $mail = new PHPMailer(true);

        try {
            //Server settings -> Achtung bei Go Live, Setting ändern :-)
            $mail->SMTPDebug = false;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = '56e0cebbd7bd1f';                     // SMTP username
            $mail->Password = 'c61c924727d323';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('test@myemail.com', 'Test Form');
            $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient ->bei Go Live ändern zu dem Administrator von HD
//        $mail->addAddress('ellen@example.com');               // Name is optional
//        $mail->addReplyTo('info@example.com', 'Information');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');

//        // Attachments
//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addStringAttachment($pdf2, 'PACSAenderungsantrag.pdf');    // Add attachments PDF

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Betreff: PACS Datenaenderungsantrag';         //Betreff von Email
            $mail->Body = $emailbody;
            $mail->AltBody = strip_tags($emailbody);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function pdfSpeichern($testuser, Antrag $antrag)
    {
        $mpdf = new \Mpdf\Mpdf();

        $html = '';
        //echo $geburi;
        $testuser = User::getById('1');

        $html = '<h1>Hier sind die Änderungen:</h1>';

        $html .= '<h2>User</h2>';
        $html .= '<strong>Vorname:</strong>  ' . $testuser->getVorname() . '<br />';
        $html .= '<strong> Nachname:</strong> ' . $testuser->getNachname() . '<br />';
        $html .= '<strong> Mail: </strong>' . $testuser->getUserMail() . '<br />';
        $html .= '<strong> Tel: </strong>' . $testuser->getTel() . '<br />';
        $html .= '<strong> Personal-Nr. </strong>' . $testuser->getPersNr() . '<br />';

        $html .= '<h2>Patient</h2>';
        $html .= '<strong> Instanz:</strong> ' . $antrag->getInstanz() . '<br />';
        $html .= '<strong> Modalität:</strong> ' . $antrag->getModalitaet() . '<br />';
        $html .= '<strong> Vorname Patient:</strong>' . $antrag->getVornameP() . '<br />';
        $html .= '<strong> Nachname Patient:</strong> ' . $antrag->getNachnameP() . '<br />';
        $html .= '<strong> Geburtsdatum:</strong> ' . $antrag->getGeburi() . '<br />';
        $html .= '<strong> Patienten ID: </strong>' . $antrag->getPatID() . '<br />';
        $html .= '<strong> Untersuchungsdatum: </strong>' . $antrag->getunterDatum() . '<br />';
        $html .= '<strong> Untersuchungszeit: </strong>' . $antrag->getUnterZeit() . '<br />';
        $html .= '<strong> Massnahme-/Untersuchungs-ID/Accession-Nr.: </strong>' . $antrag->getMassID() . '<br />';
        $html .= '<strong> Studie/Serie/Bilder:</strong> ' . $antrag->getStudie() . '<br />';
        $html .= '<strong> Begründung: </strong>' . $antrag->getBegruendung() . '<br />';
        $html .= '<strong> Erklärung: </strong>' . $antrag->getErklaerung() . '<br />';

        //PDF schreiben

        $mpdf->WriteHTML($html);

//Output

        $mpdf->Output('C:\Users\manon\Desktop\Charite\PDF\Änderungsantrag.pdf');

    }
}

<?php

    if (isset($_POST['submit']))
    {
        

        $mailTo = "teambabbar@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an Inquiry Mail from ".$name.".\n\n".$message;

        mail($mailTo, $idno, $txt, $headers);
        header("Location: contact.php?mailsend");
    }

?>
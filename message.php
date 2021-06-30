<?php 
        if (isset($_POST['mailForm'])) {
        
        $name= htmlspecialchars($_POST['prenom']). ' ' . htmlspecialchars($_POST['nom']);
        $subject= htmlspecialchars($_POST['sujet']);
        $mail = htmlspecialchars($_POST['mail']);
        $message= htmlspecialchars($_POST['message']);
            if(preg_match('#^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$#',$mail)){
                    $header="MINE-VERSION: 1.0\r\n";
                    $header.= 'From:""'. $name .'"<'. $mail.'>' ."\n";
                    $header.= 'Content-Type:text/html; charset="utf-8"'. "\n";
                    $header.='Content-Transfer-Encoding: 8bit';
            
                    $message='
                    <html>
                        <body>
                            <div align="center">
                                '.$message.'
                            </div>
                        </body>
                    </html>
                    ';
                   if (mail("karltrafi@gmail.com", $subject, $message, $header)){;
                    echo"Message envoyez avec succès";
                   }
                   else{
                       echo"Ressayer";
                   }
            }
            else{
                echo"Adresse mail incorect";
            }
    } 
    ?>
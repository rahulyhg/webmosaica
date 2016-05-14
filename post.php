<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['mail'])&&$_POST['mail']!="")){ 
        $to = 'sayhello2fly@gmail.com'; 
        $subject = 'Astrobix'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Name: '.$_POST['name'].'</p>
                        <p>Email: '.$_POST['tel'].'</p>
                        <p>Birth Day: '.$_POST['day'].'</p>
                        <p>Birth Month: '.$_POST['month'].'</p>
                        <p>Birth Year: '.$_POST['year'].'</p>';
        $message .= '</body>
               </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <valet>\r\n";
        mail($to, $subject, $message, $headers);

}
?>
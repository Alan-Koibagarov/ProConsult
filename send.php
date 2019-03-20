<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['lab'])) {$lab = $_POST['lab'];}
    if (isset($_POST['mail'])) {$mail = $_POST['mail'];}
    if (isset($_POST['textar'])) {$textar = $_POST['textar'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
 
    $to = "akoibagaroff@gmail.com"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom   = "info@proconsult.kz"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "$formData";
    $message = "$formData
 <b>Имя:</b> $name<br>
<b>Телефон:</b> $phone <br>
<br>E-mail:</b> $mail<br>
$lab <br> $textar";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo '<center class="post_send">
 
<h5> Спасибо! Ваша заявка принята<br>
<br>
<br>
<span class="message_font_cor">Если в ближайщее время вы не получили<br>
Наш прайс, проверьте "Спам"</span><br>
</h5>
<a href="http://alan.webers.kz">Назад на страницу</a>
 
</center>';
    }
    else
    {
    echo '<center>
 
<b>Ошибка. Сообщение не отправлено!</b>
 
</center>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>

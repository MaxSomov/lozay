<?php

$message = "Line 1\r\nLine 2\r\nLine 3";

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
if (mail('sirbormotron@gmail.com', 'My Subject', $message))
    echo "success";
else echo "error";
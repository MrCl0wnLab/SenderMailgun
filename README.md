# SenderMailgun
[![Python 3.7](https://img.shields.io/badge/php-7.3.16-yellow.svg)](https://www.python.org/)
[![Build](https://img.shields.io/badge/Supported_OS-Linux-orange.svg)]()
[![Build](https://img.shields.io/badge/Supported_OS-Mac-orange.svg)]()
![GitHub](https://img.shields.io/github/license/MrCl0wnLab/SenderMailgun?color=blue)

Class PHP criada para envio simples de email via API Mailgun

# Implementation Code
```php
require_once('SenderMailgun.php');

# Instantiate the client.
SenderMailgun::$api_key = 'YOUR_KEY_MAILGUN';

# Data params email.
$params = [
  'from'=> 'Your Name <you@your-mail.com.br>',
  'to'=>'your-client@your-client-mail.com.br',
  'subject'=>'Your Subject!',
  'html'=>'<h1>My Email in Html</h1>'
];

# Action sender.
SenderMailgun::send_mail('marketing.imaginarionerd.com.br',$params);
print_r(SenderMailgun::$result_send);
```

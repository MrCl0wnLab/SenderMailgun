# SenderMailgun
[![Python 3.7](https://img.shields.io/badge/php-7.3.16-yellow.svg)](https://www.python.org/)
[![Build](https://img.shields.io/badge/Supported_OS-Linux-orange.svg)]()
[![Build](https://img.shields.io/badge/Supported_OS-Mac-orange.svg)]()
![GitHub](https://img.shields.io/github/license/MrCl0wnLab/SenderMailgun?color=blue)

Class PHP criada para envio simples de email via API Mailgun

```
 + Autor: MrCl0wn
 + Blog: http://blog.mrcl0wn.com
 + GitHub: https://github.com/MrCl0wnLab
 + Twitter: https://twitter.com/MrCl0wnLab
 + Email: mrcl0wnlab\@\gmail.com
```

## Access Your Domains
> https://app.mailgun.com/app/sending/domains

## Access Your Private API key
> https://app.mailgun.com/app/account/security/api_keys



## Implementation Code
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
## Video
[![asciicast](https://asciinema.org/a/vLvgQf8YB82IrjImcQ1J7Qrrk.svg)](https://asciinema.org/a/vLvgQf8YB82IrjImcQ1J7Qrrk)

## Reference:
> https://documentation.mailgun.com/en/latest/api-sending.html#sending

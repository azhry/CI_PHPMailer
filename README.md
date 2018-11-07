# CI_PHPMailer
PHPMailer for CodeIgniter App

## Prerequisite
Install <a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a> using Composer<br/>
`composer require phpmailer/phpmailer`

## How to Use
<ol>
  <li>Copy <code>CI_PHPMailer.php</code> to <code>application/libraries/CI_PHPMailer</code> directory</li>
  <li>
    Sending email example:<br/>
  </li>
</ol>

```php
  $this->load->library('CI_PHPMailer/ci_phpmailer');
  try 
  {
      // assume you are using gmail
      $this->ci_phpmailer->setServer('smtp.gmail.com');
      $this->ci_phpmailer->setAuth('<YOUR_EMAIL>', '<YOUR_EMAIL_PASSWORD>');
      $this->ci_phpmailer->setAlias('<EMAIL_ALIAS>', '<NAME_ALIAS>'); // you can use whatever alias you want
      $this->ci_phpmailer->sendMessage('<RECEIVER_EMAIL_ADDRESS>', '<SUBJECT>', '<MESSAGE_BODY>');    
  } 
  catch (Exception $e)
  {
      $this->ci_phpmailer->displayError();
  }
```

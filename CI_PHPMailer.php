<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

class CI_PHPMailer
{
	private $PHPMailer;

	public function __construct()
	{
		$this->PHPMailer = new PHPMailer();
		$this->PHPMailer->isSMTP();
	}

	public function setServer($host)
	{
		$this->PHPMailer->Host = $host;
		$this->PHPMailer->SMTPAuth = true;
	}

	public function setAuth($username, $password)
	{
		$this->PHPMailer->Username = $username;
		$this->PHPMailer->Password = $password;
		$this->PHPMailer->SMTPSecure = 'ssl';
		$this->PHPMailer->Port = 465;
	}

	public function setAlias($email, $name)
	{
		$this->PHPMailer->setFrom($email, $name);
	}

	public function sendMessage($address, $subject, $body, $isHTML = true)
	{
		$this->PHPMailer->addAddress($address);
		$this->PHPMailer->isHTML($isHTML);
		$this->PHPMailer->Subject = $subject;
		$this->PHPMailer->Body = $body;
		$this->PHPMailer->send();
	}

	public function displayError()
	{
		echo 'Message could not be sent. Mailer Error: ', $this->PHPMailer->ErrorInfo;
	}
}
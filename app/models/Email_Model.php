<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Nette Email
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;
use Carbon\Carbon;

// Sparkpost
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Ivory\HttpAdapter\Guzzle6HttpAdapter;

class Email_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function nette($from, $email, $subject, $content)
	{
	    $mail = new Message;
	    $mail->setFrom($from)
	        ->addTo($email)
	        ->setSubject($subject)
	        ->setHtmlBody($content);

	    $mailer = new Nette\Mail\SmtpMailer(array(
	            'host' => getenv('NETTE_EMAIL_HOST') ?: '',
	            'smtp_port' => getenv('NETTE_EMAIL_PORT') ?: '25',
	            'username' => getenv('NETTE_EMAIL_USERNAME') ?: '',
	            'password' => getenv('NETTE_EMAIL_PASSWORD') ?: '',
	            'secure' => getenv('NETTE_EMAIL_SECURE') ?: 'ssl',
	    ));
	    $mailer->send($mail);
	}

	public function sparkpost($from, $from_email, $html, $text, $subject, $name, $email)
	{
		$httpAdapter = new Guzzle6HttpAdapter(new Client());
		$sparky = new SparkPost($httpAdapter, ['key'=>getenv('SPARKPOST_KEY') ?: '']);

		try {
		    // Build your email and send it!
		    $results = $sparky->transmission->send([
		        'from'=>[
		            'name' => $from,
		            'email' => $from_email
		        ],
		        'html'=>$html,
		        'text'=>$text,
		        'subject'=>$subject,
		        'recipients'=>[
		            [
		                'address'=>[
		                    'name'=>$name,
		                    'email'=>$email
		                ]
		            ]
		        ]
		    ]);
		} catch (\Exception $err) {
		    echo 'Whoops! Something went wrong';
		}
	}

}

/* End of file Email_Model.php */
/* Location: ./application/models/Email_Model.php */
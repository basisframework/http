<?php
namespace Basis\Http;
use Basis\Http\Message;

class Response extends Message {
	private $code = 200;
	private $message = NULL;
	
	public function __construct($request, $code, $message = NULL) {
		parent::__construct($request->getHttpVersion());
		$this->setCode($code);
		$this->setMessage($message);
	}

	public function getCode() {
		return $this->code;
	}

	public function getMessage() {
		return 
	}

};

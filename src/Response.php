<?php
namespace Basis\Http;
use Basis\Http\Message;

class Response extends Message {
	private $string;
	private $code = 200;
	private $message = NULL;

	public function __construct(StringService $string) {
		$this->string = $string;
	}
	
	public function init($request, $code, $message = NULL) {
		$this->setHttpVersion($request->getHttpVersion());
		$this->setCode($code);
		$this->setMessage($message);
	}

	public function getCode() {
		return $this->code;
	}

	public function getMessage() {
		return $this->message;
	}

	public function setCode($code) {
		$this->code = $code;
	}

	public function setMessage($message) {
		$this->message = $message;
	}

};

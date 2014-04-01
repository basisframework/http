<?php
namespace Basis\Http;
use Basis\Http\Message;
use Basis\Interfaces\Objects\StringService;

class Request extends Message {
	private $string;

	private $method;
	private $url;

	public function __construct(StringService $string) {
		$this->string = $string;
	}

	public function init($method, $url, $version = '1.1') {
		$this->setMethod($method);
		$this->setUrl($url);
		$this->setHttpVersion($version);
	}

	public function getMethod() {
		return $this->method;
	}

	public function getUrl() {
		return $this->url;
	}

	public function setMethod($method) {
		$method = $this->string->toUpper($method);

		if(!in_array($method, self::$ALLOWED_METHODS)) {
			throw new RequestException('Invalid method of type "%s" in request', $method);
		}

		$this->method = $method;
	}

};

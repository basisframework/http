<?php
namespace Basis\Http;

class Message {
	private $http_version;
	private $headers;
	private $body;

	public function getHttpVersion() {
		return $this->http_version;
	}

	public function getHeaders() {
		return $this->headers;
	}

	public function getBody() {
		return $this->body;
	}

	public function setHeaders($headers) {
		$this->headers = $headers;
	}

	public function setBody($body) {
		$this->body = $body;
	}
	
};

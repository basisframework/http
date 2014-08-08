<?php
namespace Basis\Http;
use Basis\Http\HeaderBagFactory;

class RequestFactory {
	private $string;
	private $headers;

	public function __construct(StringService $string, HeaderBagFactory $headers) {
		$this->string = $string;
		$this->headers = $headers;
	}

	public function make($method, $url, $version = '1.1') {
		$request = new Request($this->string);
		$request->setHeaders($this->headers->make());
		$request->setMethod($method);
		$request->setUrl($url);
		$request->setVersion($version);
		return $request;
	}

	public function getCurrent() {
		$request = $this->make()
	}
	
};

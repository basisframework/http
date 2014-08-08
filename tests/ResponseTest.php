<?php
require dirname(__DIR__) . '/src/Message.php';
require dirname(__DIR__) . '/src/Request.php';
require dirname(__DIR__) . '/vendor/autoload.php';

class RequestTest extends PHPUnit_Framework_TestCase {

	public function testUrl() {
		$request = new Basis\Http\Request(new Basis\Objects\StringService);
		$request->init('GET', '/');

		$this->assertEquals('/', $request->getUrl());
	}

	public function testMethod() {
		$request = new Basis\Http\Request(new Basis\Objects\StringService);
		$request->init('GET', '/');
		$this->assertEquals('GET', $request->getMethod());
	}

	public function testMethodCaseInsensitive() {
		$request = new Basis\Http\Request(new Basis\Objects\StringService);
		$request->init('get', '/');
		$this->assertEquals('GET', $request->getMethod());
	}

	public function testHttpVersion() {
		$request = new Basis\Http\Request(new Basis\Objects\StringService);
		$request->init('GET', '/', '1.1');
		$this->assertEquals('1.1', $request->getHttpVersion());
	}

	public function testHeaders() {
		$headers = array(
			'Content-Type' => 'text/html',
		);

		$request = new Basis\Http\Request(new Basis\Objects\StringService);
		$request->init('GET', '/');
		$request->setHeaders($headers);
		$this->assertEquals($headers, $request->getHeaders());
	}

	public function testBody() {
		$body = 'Hello World!';
		$request = new Basis\Http\Request(new Basis\Objects\StringService);
		$request->init('GET', '/');
		$request->setBody($body);
		$this->assertEquals($body, $request->getBody());
	}
	
};

<?php
namespace Basis\Http;

class RequestFactory {

	public function make($request, $method, $url, $version = '1.1') {
		$request->setMethod($method);
		$request->setUrl($url);
		$request->setVersion($version);
		return $request;
	}
	
};

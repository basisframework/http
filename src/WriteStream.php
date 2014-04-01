<?php
namespace Basis\Http;

class WriteStream {
	private $destination;

	public function __destruct() {
		fclose($this->destination);
	}
	
	public function init($destination) {
		$this->destination = $destination;
	}

	public function write($data) {
		fwrite($this->destination, $data);
		fflush($this->destination);
	}

};

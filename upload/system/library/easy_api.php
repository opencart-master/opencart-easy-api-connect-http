<?php
/**
 * @package		OpenCart
 * @author		Denis Cunha
 * @copyright	Copyright (c) 2005 - 2026, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/license/mit
 * @link		https://www.opencartmaster.com.br
*/
class EasyApi {
  private $url;

  public function __construct($url) {
		$this->url = $url;
	}

  private function request($method, $header, $endpoint, $data = []) {
    $soap_do = curl_init($this->url . $endpoint);
    curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header);
    if ($method !== 'GET') {
      curl_setopt($soap_do, CURLOPT_CUSTOMREQUEST, $method);
      curl_setopt($soap_do, CURLOPT_POSTFIELDS, $data);
    }
    $response = curl_exec($soap_do);
    curl_close($soap_do);
    $resposta = json_decode($response, true);
    return $resposta;
  }

  public function get($header, $endpoint) {
    return $this->request('GET', $header, $endpoint, '');
  }

  public function post($header, $endpoint, $data) {
    return $this->request('POST', $header, $endpoint, $data);
  }

  public function patch($header, $endpoint, $data) {
    return $this->request('PATCH', $header, $endpoint, $data);
  }
  
  public function put($header, $endpoint, $data) {
    return $this->request('PUT', $header, $endpoint, $data);
  }

  public function delete($header, $endpoint) {
    return $this->request('DELETE', $header, $endpoint, '');
  }
  
}
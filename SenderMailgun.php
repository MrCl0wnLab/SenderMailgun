<?php 

class SenderMailgun{

    # Set url api Mailgun.
    private 	static $api_url = "https://api.mailgun.net/v3/";
    # Set api key Mailgun.
    public 	  static $api_key = NULL;
    # Result request api.
    public 	  static $result_send = NULL;
    # Option curl verbose.
    public 	  static $verbose = FALSE;

    public function __get($property) {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }

    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
      return $this;
    }

    public static function send_mail(string $domain,array &$data_request){

      $api_url_domain = self::$api_url.$domain;
      return self::send_request($api_url_domain,$data_request);
    }

    private static function send_request(string $api_url_domain,array &$data_request){

      $session = curl_init($api_url_domain.'/messages');
      curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($session, CURLOPT_USERPWD, 'api:'.self::$api_key);
      curl_setopt($session, CURLOPT_POST, true);
      curl_setopt($session, CURLOPT_POSTFIELDS, $data_request);
      curl_setopt($session, CURLOPT_HEADER, false);
      curl_setopt($session, CURLOPT_ENCODING, 'UTF-8');
      curl_setopt($session, CURLOPT_VERBOSE, self::$verbose);
      curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($session);
      curl_close($session);
      self::$result_send = json_decode($response, true);
      return self::$result_send;

    }
}

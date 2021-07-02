<?php
class AutenticationContact{

  public function confirmCaptcha($request){
    $res_json = json_decode($this->verifiryCredentialCaptcha([
      'secret' => $_ENV['SECRET'],
      'response' => $request
    ]));

    // var_dump($res_json);
    return $res_json->success;
  }

  protected function verifiryCredentialCaptcha($data){
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, $_ENV['ENDPOINT']);
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    
    return curl_exec($verify);
  }

}
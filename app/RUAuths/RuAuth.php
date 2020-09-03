<?php

namespace App\RUAuths;

/**
*	Usages:
*	====================================================
*	$response = RuAuth::verify($salaryID, $password);
*
*	if($response['error_code'] == 0){
*		echo 'Login success';
*	}
*	else{
*		echo 'Login failed';
*
*	}
*
*
*
*	Response On Success
*	====================
*	Array
*	(
*	    [error_code]  => 0
*	    [name]        => A. F. M. Mahbubur Rahman
*	    [designation] => Lecturer
*	    [department]  => Computer Science & Engineering
*	)
*
* 	Response On Error
* 	=================
* 	Array
*	(
*	    [error_code]  => 3
*	    [name]        => 0
*	    [designation] => 0
*	    [department]  => 0
*	)
*/
class RuAuth {

	public static function verify($user, $password ) {

		//Radius Auth url
		$url = "http://103.79.117.120/authentication/";
		$ru_user = $user;
		$ru_pass = $password;

		//prepare post data
		$request_data = array(
							"ru_user" => $ru_user,
						    "ru_pass" => md5($ru_pass),
						    "key"     => config("app.ru_key", null)
                        );
                        // dd(config("app.ru_key", null));

		$data_string = base64_encode(json_encode($request_data));

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


		$result = curl_exec($ch);

		// $result;
		if(curl_errno($ch)){
			$msg_status = curl_strerror(curl_errno($ch));
			echo $msg_status;
			// return new Exception('$message_status');
		}

		return $result_array = json_decode(base64_decode($result), true);

	}

}



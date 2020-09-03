<?php

namespace App\RUAuths;

use App\Identification;

class Auth {

	public static function login($data ) {
        $response = RuAuth::verify($data->input('id'), $data->input('password'));

        $membership = substr($data->input('id'), 0, 3);
        if($membership == 227){
            $membership = 'Teacher';
        } else {
            $membership = 'Student';
        }
        $avatar = "avatars/null.jpg";
        $contact = "+880XXX";
        $email = "XX@XX.XX";

        if($response['error_code'] == '0'){
            $identification = Identification::select('avatar', 'contact', 'email')->where("identification", $data->input('id'))->first();
            if($identification != null){
                session ( [
                    'error_code' => $response['error_code'],
                    'id' => $data->input( 'id' ),
                    'membership' => $membership,
                    'name' => $response['name'],
                    'department' => $response['department'],
                    'designation' => $response['designation'],
                    'avatar' => $identification->avatar,
                    'contact' => $identification->contact,
                    'email' => $identification->email
                ] );
            } else{
                session ( [
                    'error_code' => $response['error_code'],
                    'id' => $data->input( 'id' ),
                    'membership' => $membership,
                    'name' => $response['name'],
                    'department' => $response['department'],
                    'designation' => $response['designation'],
                    'avatar' => $avatar,
                    'contact' => $contact,
                    'email' => $email
                ] );
            }

            return response()->json(['error'=>'', 'response' => $response], 200);
        }
        return response()->json(['error'=>'Invalid User!', 'response' => $response], 404);
	}
}



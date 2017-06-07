<?php defined('BASEPATH') OR exit('No direct script access allowed');

class EncryptingModel extends CI_Model {

	public function encrypt_decrypt($proc,$input) {
        $key = pack('H*', "acb04b3e103b0cd2b34763251cef01bc55aba029cecbae5e1d417e2ffb2b00a3");
        $securekey = hash('sha256',$key,TRUE);
        $iv = mcrypt_create_iv(32);
        if($proc == 'encrypt'){
            return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $securekey, 
            $input, MCRYPT_MODE_ECB, $iv));
        }elseif($proc == 'decrypt'){
            return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $securekey, 
            base64_decode($input), MCRYPT_MODE_ECB, $iv));
        }
    }
    
}
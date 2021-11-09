<?php

namespace App\Libraries;

use AfricasTalking\SDK\AfricasTalking;

class Sms_lib
{
    // This function converts a string into slug format
    public function send($recipients, $message)
    {
        // Set app credentials
        $username = getenv('AT_USERNAME');
        $apiKey = getenv('AT_API_KEY');
        $shortcode = getenv('AT_SHORTCODE');

        // Initialize SDK
        $AT = new AfricasTalking($username, $apiKey);

        // SMS service
        $sms = $AT->sms();

        try {
            $result = $sms->send([
                'to' => $recipients,
                'message' => $message,
                'from' => $shortcode
            ]);
            return $result;
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

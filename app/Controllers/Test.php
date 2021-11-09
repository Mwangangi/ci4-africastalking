<?php

namespace App\Controllers;

use App\Libraries\Sms_lib; // Import SMS library

class Test extends BaseController
{
    public function sms()
    {
        $sms = new Sms_lib(); // create an instance of Library
        // Set recipients in international format
        $recipients = "+254723692500,+254720246513";
        $message = "This is another test message from CI-4. Cheers!"; // message

        echo json_encode($sms->send($recipients, $message));
    }
}

# Africa's Talking Wrapper for CodeIgniter 4 

## Step 1

Setup the new Codeigniter framework on your development environment from this link ==> [official site](http://codeigniter.com).

Version 4 is a complete rewrite of the CI framework.
I recommend using composer to setup everything, as it is easy and direct.

## Step 2

Add the Africa's Talking PHP library to your project either by running this composer command

`composer require africastalking/africastalking`

You can also include it within the required dependancies of your composer.json file as shown below then run composer update to install all required dependencies

```json
"require": {
    ...

    "africastalking/africastalking": "^3.0",
    ...
}
```

## Step 3

In your .env file add these 3 variables and provide the valid values as per your Africa's Talking Account.

```
#--------------------------------------------------------------------
# AFRICA'S TALKING
#--------------------------------------------------------------------
AT_SHORTCODE = ''; // optional
AT_USERNAME = 'YOUR USERNAME GOES HERE';
AT_API_KEY   = 'YOUR KEY GOES HERE';
```

Lastly, copy the `Sms_lib.php` file to your `app/Libraries/` folder

You can now test sending messages by running the following code as shown in the `app/Controllers/Test.php` file

```php
{
    $sms = new Sms_lib(); // create an instance of Library
    // Set recipients in international format
    $recipients = "+254712345678,+254112345678";
    $message = "This is another test message from CI-4. Cheers!"; // message

    echo json_encode($sms->send($recipients, $message));
}
```

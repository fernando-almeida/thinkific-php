<?php


namespace Thinkific\Api;

class ApiException extends \Exception
{
    public function __construct($errors, $code = 0)
    {
        $message = "";

        foreach ($errors as $name => $messages) {
            $message .= "Error with ${name}: ";

            if (is_array($messages)) {
                foreach ($messages as $msg) {
                    $message .= $msg.", ";
                }
            } else {
                    $message .= $messages;
            }

            if (count($errors) > 1) {
                $message .= "\n";
            }
        }
        parent::__construct($message, $code);

    }

}
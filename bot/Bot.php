<?php
class Bot
{

    public function hears($message, callable $call)
    {
        $call(new Bot);
        return $message;
    }
    public function reply($response)
    {
        echo $response;
    }

}

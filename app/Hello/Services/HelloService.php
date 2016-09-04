<?php namespace App\Hello\Services;

class HelloService
{
    public function welcome()
    {
        return [
            'welcome' => 'Welcome from vaccuum framework.',
        ];
    }

    public function hello($name)
    {
        return [
            'hello' => "Hello there, {$name}!",
        ];
    }
}

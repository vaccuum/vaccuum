<?php namespace App\Hello\Controllers;

use App\Hello\Services\HelloService;

class HelloController
{
    /** @var HelloService */
    protected $helloService;

    /**
     * AccountsController constructor.
     *
     * @param HelloService $service
     */
    public function __construct(HelloService $service)
    {
        $this->helloService = $service;
    }

    public function welcome()
    {
        return json_encode($this->helloService->welcome());
    }

    public function hello($name)
    {
        return json_encode($this->helloService->hello($name));
    }
}
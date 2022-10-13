<?php

abstract class CookieDecorator implements Cookie
{
    protected Cookie $cookie;
    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }
}
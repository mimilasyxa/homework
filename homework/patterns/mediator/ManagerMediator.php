<?php

class ManagerMediator implements Mediator
{
    private Colleague $customer;
    private Colleague $programmer;
    private Colleague $tester;
    public function setColleagues(
        Colleague $customer,
        Colleague $programmer,
        Colleague $tester
    )
    {
        $this->customer = $customer;
        $this->programmer = $programmer;
        $this->tester = $tester;
    }

    public function send(string $string, Colleague $colleague)
    {
        match ($colleague){
            $this->customer => $this->programmer->notify($string),
            $this->programmer => $this->tester->notify($string),
            $this->tester => $this->programmer->notify($string)
        };
    }
}
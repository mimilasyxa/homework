<?php

class ManagerService
{
    public function handleMessage()
    {
        $manager = new ManagerMediator();

        $customer = new CustomerColleague($manager);
        $programmer = new ProgrammerColleague($manager);
        $tester = new TesterColleague($manager);

        $manager->setColleagues($customer, $programmer, $tester);

        $customer->send('Нужно что-то сделать с этим.'); // Сообщение от покупателя отправляется программисту
        $programmer->send('И правду, шо делать будем');  // Сообщение от программиста отправляется тестировщику
        $tester->send('Без понятия');                    // Сообщение от тестировщика отправляется программисту
    }
}
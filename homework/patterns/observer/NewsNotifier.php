<?php

namespace Observer;

class NewsNotifier
{
    /** @var User[]  */
    public array $subscribers;
    public function subscribe(User $user)
    {
        $this->subscribers[] = $user;
    }

    public function unsubscribe(User $user)
    {
        unset($this->subscribers[array_search($user, $this->subscribers)]);
    }

    public function sendNew(User $user,News $new)
    {
        var_dump('Отправляем письмо '. $user->getName() . ' о' . $new->getText());
    }

    public function sendNewToAll(News $new)
    {
        foreach ($this->subscribers as $subscriber){
            $this->sendNew($subscriber, $new);
        }
    }
}
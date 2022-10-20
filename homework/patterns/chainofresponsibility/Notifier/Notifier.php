<?php

abstract class Notifier
{
    public int $priority;
    public ?Notifier $nextNotifier;
    public function __construct(?Notifier $notifier = null)
    {
        $this->nextNotifier = $notifier;
    }

    public function notifyManager(string $message, int $priority)
    {
        if ($priority >= $this->priority){
            var_dump($message);
        }
        if (!$this->nextNotifier){
            $this->nextNotifier->notifyManager($message, $priority);
        }

    }
}
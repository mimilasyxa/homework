<?php

use Developer\Developer;

class DeveloperFactory
{
    protected array $developers;
    public function getDeveloperBySpecialty(string $specialty): Developer
    {
        if (!array_key_exists($specialty, $this->developers)){
            switch ($specialty){
                case('Delphi'):
                    $developer = new DelphiDeveloper();
                    break;
                case('Javascript'):
                    $developer = new JavascriptDeveloper();
                    break;
                default:
                    // Кидаем ошибку что нет такого разраба
            }

            $this->developers[$specialty] = $developer;
        }

        return $this->developers[$specialty];
    }
}
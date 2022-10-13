<?php

namespace Text;

class ProxyText implements Text
{
    public Text $text;
    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        $text = $this->text->getText();
        if ($text){
            $this->cacheText($text);
        } else {
           $text = $this->getCachedText();
        }

        return $text;
    }

    private function getCachedText(): string
    {
        return file_get_contents('demo.txt');
    }

    private function cacheText(string $text)
    {
        file_put_contents('demo.txt', $text);
    }
}
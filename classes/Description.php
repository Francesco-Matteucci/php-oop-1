<?php
class Description {
    public string $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function getDescriptionText(): string {
        return $this->text;
    }
}
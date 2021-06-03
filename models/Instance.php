<?php

class Instance
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function time()
    {
        return $this->data['datetime'];
    }
}

<?php

namespace belyys7\Tools;

class TestManageImage
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . ' - commit 2';
    }
}
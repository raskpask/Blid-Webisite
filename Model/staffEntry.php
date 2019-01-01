<?php

/**
 * Class staffEntry
 */
class staffEntry
{
    private $userNamn;


    public function __construct($userNamn)
    {
        $this->userNamn = $userNamn;

    }


    public function getUserNamn()
    {
        return $this->userNamn;
    }
}
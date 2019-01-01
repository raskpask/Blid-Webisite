<?php

/**
 * Class teamEntry
 */
class teamEntry
{
    private $userNamn;
    private $userPaddling;
    private $userSimning;
    private $userCykling;
    private $userLopning;
    private $comment;

    public function __construct($userNamn,$userPaddling, $userSimning, $userCykling, $userLopning,$comment)
    {
        $this->userNamn = $userNamn;
        $this->userPaddling = $userPaddling;
        $this->userSimning = $userSimning;
        $this->userCykling = $userCykling;
        $this->userLopning = $userLopning;
        $this->comment = $comment;
    }


    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @return mixed
     */
    public function getUserCykling()
    {
        return $this->userCykling;
    }

    /**
     * @return mixed
     */
    public function getUserPaddling()
    {
        return $this->userPaddling;
    }

    /**
     * @return mixed
     */
    public function getUserLopning()
    {
        return $this->userLopning;
    }

    /**
     * @return mixed
     */
    public function getUserSimning()
    {
        return $this->userSimning;
    }

    /**
     * @return mixed
     */
    public function getUserNamn()
    {
        return $this->userNamn;
    }
}
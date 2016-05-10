<?php

namespace Instagram\API\Response;

class LoginResponse extends BaseResponse {

    /**
     * Logged in User
     * @var Model\User
     */
    protected $logged_in_user;

    /**
     * @return Model\User
     */
    public function getLoggedInUser()
    {
        return $this->logged_in_user;
    }

    /**
     * @param Model\User $logged_in_user
     */
    public function setLoggedInUser($logged_in_user)
    {
        $this->logged_in_user = $logged_in_user;
    }

}
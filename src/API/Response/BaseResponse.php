<?php

namespace Instagram\API\Response;

use JsonSerializable;

class BaseResponse implements JsonSerializable {

    const STATUS_OK = "ok";
    const STATUS_FAIL = "fail";

    const MESSAGE_FEEDBACK_REQUIRED = "feedback_required";

    /**
     *
     * Response Status
     *
     * @var string
     */
    protected $status;

    /**
     *
     * Response Message
     *
     * @var string
     */
    protected $message;

    /**
     *
     * Spam Detected
     *
     * @var boolean
     */
    protected $spam;

    /**
     *
     * Feedback Message
     *
     * @var string
     */
    protected $feedback_message;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getMessage(){
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return boolean
     */
    public function isSpam()
    {
        return $this->spam;
    }

    /**
     * @param boolean $spam
     */
    public function setSpam($spam)
    {
        $this->spam = $spam;
    }

    /**
     * @return string
     */
    public function getFeedbackMessage()
    {
        return $this->feedback_message;
    }

    /**
     * @param string $feedback_message
     */
    public function setFeedbackMessage($feedback_message)
    {
        $this->feedback_message = $feedback_message;
    }

    public function isOk(){
        return $this->getStatus() == self::STATUS_OK;
    }

    function jsonSerialize(){
        return get_object_vars($this);
    }

}
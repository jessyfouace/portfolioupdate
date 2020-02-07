<?php
class Messages
{
    protected $idMessage;
    protected $firstName;
    protected $lastName;
    protected $phone;
    protected $mail;
    protected $message;

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of idMessage
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * set value of IdMessage
     *
     * @param [int] $idMessage
     * @return self
     */
    public function setIdMessage($idMessage)
    {
        $idMessage = (int) $idMessage;
        $this->idMessage = $idMessage;

        return $this;
    }

    /**
     * Get the value of idMessage
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * set value of FirstName
     *
     * @param [string] $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of idMessage
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * set value of LastName
     * @param [string] $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * set value of phone
     * @param [int] $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $phone = (int) $phone;
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * set value of mail
     * @param [string] $mail
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * set value of message
     * @param [string] $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}

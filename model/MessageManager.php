<?php
class MessageManager
{
    private $_bdd;

    public function __construct(PDO $bdd)
    {
        $this->setBdd($bdd);
    }


    /**
     * Get the value of _bdd
     */
    public function getBdd()
    {
        return $this->_bdd;
    }

    /**
     * Set the value of _bdd
     *
     * @return  self
     */
    public function setBdd(PDO $bdd)
    {
        $this->_bdd = $bdd;

        return $this;
    }

    public function addMessage(Messages $message)
    {
        $query = $this->getBdd()->prepare('INSERT INTO message (firstName, lastName, phone, mail, message) VALUES(:firstName, :lastName, :phone, :mail, :message)');
        $query->bindValue('firstName', $message->getFirstName(), PDO::PARAM_STR);
        $query->bindValue('lastName', $message->getLastName(), PDO::PARAM_STR);
        $query->bindValue('phone', $message->getPhone(), PDO::PARAM_INT);
        $query->bindValue('mail', $message->getMail(), PDO::PARAM_STR);
        $query->bindValue('message', $message->getMessage(), PDO::PARAM_STR);
        $query->execute();

        return $this->getBdd()->lastInsertId();
    }
}

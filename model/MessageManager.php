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

    public function getMessages()
    {
        $query = $this->getBdd()->prepare('SELECT * FROM message');
        $query->execute();
        $allMessages = $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayOfMessages = [];
        foreach ($allMessages as $message) {
            $arrayOfMessages[] = new Messages($message);
        }

        $arrayLength = count($arrayOfMessages);
        if ($arrayLength >= 1) {
            return $arrayOfMessages;
        }
    }

    public function getMessageById($idMessage)
    {
        $idMessage = (int) $idMessage;
        $query = $this->getBdd()->prepare('SELECT * FROM message WHERE idMessage = :idMessage');
        $query->bindValue('idMessage', $idMessage, PDO::PARAM_INT);
        $query->execute();
        $messages = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $arrayOfMessage = [];

        foreach ($messages as $message) {
            $arrayOfMessage[] = new Messages($message);
        }

        $arrayLength = count($arrayOfMessage);
        if ($arrayLength >= 1) {
            return $arrayOfMessage;
        }
    }

    public function deleteMessageById($id)
    {
        $id = (int) $id;
        $query = $this->getBdd()->prepare('DELETE FROM message WHERE idMessage = :idMessage');
        $query->bindValue('idMessage', $id,PDO::PARAM_INT);
        $query->execute();
    }
}

<?php
class AdminManager
{
    protected $_bdd;

    public function __construct(PDO $bdd)
    {
    	$this->setBdd($bdd);
    }

    /**
    * get value of Bdd
    *
    * @return self
    */
    public function getBdd()
    {
    	return $this->_bdd;
    }

    /**
    * set value of Bdd
    *
    * @param [PDO] $bdd
    * @return self
    */
    public function setBdd(PDO $bdd)
    {
    	$this->_bdd = $bdd;
    	return $this;
    }

    /**
    * get TABLENAME
    *
    * @return self
    */
    public function getAdminByMail($mail)
    {
        $query = $this->getBdd()->prepare('SELECT * FROM admin WHERE mail = :mail');
        $query->bindValue('mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $admins = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($admins as $admin) {
            return new Admins($admin);
        }
    }
}
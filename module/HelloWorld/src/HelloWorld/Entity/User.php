<?php

namespace HelloWorld\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* User 
* @ORM\Table(name="user")
* @ORM\Entity
*/
class User {
    
    /**
    * @var integer
    * 
    * @ORM\Column(name="id", type="bigint", nullable=false)
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    private $id;

    /**
    * @var string
    *        
    * @ORM\Column(name="email", type="string", length=255, nullable=false)
    */
    private $email;


    /**
    * Get id
    * 
    * @return integer
    */
    public function getId() 
    {
        return $this->id;
    }

    /**
    * Get email
    * 
    * @return string
    */
    public function getEmail() 
    {
        return $this->email;    
    }

    /**
    * Set email
    * 
    * @param string $email
    * @return User
    */
    public function setEmail($email){
        $this->email = $email;

        return $this;
    }
}
<?php 

namespace HelloWorld\Entity;

use Doctrine\ORM\Mapping as ORM;

class Session 
{
    /**
    * @var integer
    * 
    * @ORM\Column(name="session_id", type="bigint", nullable=false)
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    private $sessionId;

    /**
    * @var array
    * 
    * @ORM\Column(name="data", type="json_array", nullable=true)
    */
    private $data;    

    /**
    * @var \HelloWorld\Entity\User
    * 
    * @ORM\ManyToOne(targetEntity="\HelloWorld\Entity\User")
    * @ORM\JoinColumns({}
    *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    * })
    */
    private $user;


    /**
    * Get sessionId
    * 
    * @return integer
    */
    public function getSessionId() 
    {
        return $this->sessionId;
    }

    /**
    * Get data
    * 
    * @return array
    */
    public function getData()
    {
        return $this->data;
    }

    /**
    * Set data
    * 
    * @param array $data
    * @return \HelloWorld\Entity\Session
    */
    public function setData(array $data){
        $this->data = $data;

        return $this;
    }

    /**
    * Get user
    * 
    * @return \HelloWorld\Entity\User
    */
    public function getUser() 
    {
        return $this->user;
    }

    /**
    * Set user
    * 
    * @param \HelloWorld\Entity\User $user 
    * @return \HelloWorld\Entity\Session
    */
    public function setUser(\HelloWorld\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }
}
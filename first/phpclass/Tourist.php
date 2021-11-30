<?php


class Tourist
{

    private $name ;
    private $Id ;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    protected  $password;
    protected  $email;
    private  $age;
    private  $address;

    /**
     * Tourist constructor.
     * @param $name
     * @param $Id
     * @param $password
     * @param $email
     * @param $age
     * @param $address
     */
    public function __construct($name, $Id, $password, $email, $age, $address)
    {
        $this->name = $name;
        $this->Id = $Id;
        $this->password = $password;
        $this->email = $email;
        $this->age = $age;
        $this->address = $address;
    }


}
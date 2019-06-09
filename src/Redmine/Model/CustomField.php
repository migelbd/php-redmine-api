<?php


namespace Redmine\Model;


class CustomField
{

    public $id;
    public $name;
    public $value;


    /**
     * CustomField constructor.
     * @param $id
     * @param $name
     * @param $value
     */
    public function __construct($id, $name, $value)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $id
     * @return CustomField
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $name
     * @return CustomField
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * @param mixed $value
     * @return CustomField
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }



}

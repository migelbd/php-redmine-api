<?php


namespace Redmine\Model;


class Field
{

    public $id;
    public $name;


    /**
     * Field constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


    public function __toString()
    {
        return $this->name;
    }


}

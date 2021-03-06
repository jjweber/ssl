<?php

class fruits {

    public function __construct($parent)
    {
        $this->db = $parent->db;
    }

    public function select($sql, $value=array())
    {
        //var_dump($value);
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
        $data = $this->sql->fetchAll();
        //var_dump($data);
        return $data;
    }

    public function add($sql, $value=array())
    {
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);

    }

    public function delete($sql, $value=array())
    {
        //var_dump($value);
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
    }


    public function update($sql, $value=array())
    {
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
    }
    

}
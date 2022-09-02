<?php

namespace Seif;

class Model
{
    protected $conn;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $db = new Db_Conn();

        $this->conn = $db->getConn();
    }

    public function create($data)
    {
        $fields = '';
        $placeholders = '';
        $values = '';

        foreach ($data as $key => $value) {
            // print_r($key);
            // print_r($value);
            $fields .= $key . ',';
            $placeholders .= ':' . $key . ',';
            $values .= '\'' . $value . '\',';
        }

        // echo $fields . '<br>';
        // echo $placeholders . '<br>';

        // echo rtrim($fields, ',') . '<br>';
        // echo rtrim($placeholders, ',') . '<br>';

        $fields = rtrim($fields, ',');
        $placeholders = rtrim($placeholders, ',');
        $values = rtrim($values, ',');

        // $sql = 'INSERT INTO ' . $this->table . ' (' . $fields . ') VALUES (' . $placeholders . ')';
        $sql = 'INSERT INTO ' . $this->table . ' (' . $fields . ') VALUES (' . $values . ')';
        // echo $sql . '<br>';

        return $this->conn->query($sql);
    }

    public function retrieve()
    {
        // echo '<pre>';
        $sql = 'SELECT * FROM ' . $this->table;
        // echo $sql . '<br>';

        return $this->conn->query($sql);
    }

    public function update($id)
    {
    }

    public function drop($id)
    {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE id=' . $id;
        print_r($sql);

        // return $this->conn->query($sql);
    }
}

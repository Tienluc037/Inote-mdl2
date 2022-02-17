<?php

namespace App\model;

class TypeModel extends BaseModel
{

    public $table = "note_type";

    public function create($type)
    {
        $sql = "insert into note_type(name, description) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $type['name']);
        $stmt->bindParam(2, $type['description']);
        $stmt->execute();

    }


    public function update($request)
    {
        $sql = "update $this->table set name = ?,description = ? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindValue(1, $request["name"]);
        $stmt->bindValue(2, $request["description"]);
        $stmt->bindValue(3, $request["id"]);
        $stmt->execute();
    }
}
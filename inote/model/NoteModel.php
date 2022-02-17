<?php

namespace App\model;

class NoteModel extends BaseModel
{
    public $table = "note";


//    public function getAll($id)
//    {
//        $sql = "SELECT * FROM note join note_type as notetype on note.type_id = notetype.id where note.id=$id";
//        $stmt = $this->connect->query($sql);
//        return $stmt->fetchAll(\PDO::FETCH_OBJ);
//    }


    public function create($note)
    {
        $sql = "insert into note(title, content) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $note['title']);
        $stmt->bindParam(2, $note['content']);
        $stmt->execute();

    }


    public function update($request)
    {
        $sql = "update $this->table set title = ?,content = ? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindValue(1, $request["title"]);
        $stmt->bindValue(2, $request["content"]);
        $stmt->bindValue(3, $request["id"]);
        $stmt->execute();
    }
}
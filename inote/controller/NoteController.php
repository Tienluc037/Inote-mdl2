<?php
namespace App\controller;
use App\model\NoteModel;
class NoteController
{
    public $noteModel;

    public function __construct()
    {
        $this->noteModel= new NoteModel();
    }

    public function getAllNote()
    {
        $notes = $this->noteModel->getAll();
        include_once "inote/view/note/list.php";
    }



    public function getNoteById($id){
        $note= $this->noteModel->getById($id);
        include "inote/view/note/detail.php";

    }
    public function createNote(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "inote/view/note/create.php";
        }
        else {
            $data=[
                "title"=>$_REQUEST["title"],
                "content"=>$_REQUEST["content"]
            ];
            $this->noteModel->create($data);
            header("location:index.php?page=note-list");
        }
    }
    public function delete($id){
        $this->noteModel->delete($id);
        header("location:index.php?page=note-list");

    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $note = $this->noteModel->getById($_REQUEST['id']);
            include_once "inote/view/note/update.php";
        }
    }


    public function update()
    {
        $this->noteModel->update($_REQUEST);
        header("Location:index.php?page=note-list");
    }

}
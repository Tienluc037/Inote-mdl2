<?php

namespace App\controller;
use App\model\TypeModel;
class TypeController
{
    public $typeModel;

    public function __construct()
    {
        $this->typeModel= new TypeModel();
    }

    public function getAllType()
    {
        $types = $this->typeModel->getAll();
        include_once "inote/view/type/list.php";
    }



    public function getTypeById($id){
        $type= $this->typeModel->getById($id);
        include "inote/view/type/detail.php";

    }
    public function createType(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "inote/view/type/create.php";
        }
        else {
            $data=[
                "name"=>$_REQUEST["name"],
                "description"=>$_REQUEST["description"]
            ];
            $this->typeModel->create($data);
            header("location:index.php?page=type-list");
        }
    }
    public function delete($id){
        $this->typeModel->delete($id);
        header("location:index.php?page=type-list");

    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $type = $this->typeModel->getById($_REQUEST['id']);
            include_once "inote/view/type/update.php";
        }
    }


    public function update()
    {
        $this->typeModel->update($_REQUEST);
        header("Location:index.php?page=type-list");
    }
}
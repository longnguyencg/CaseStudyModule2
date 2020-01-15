<?php


namespace Controller;
include_once "../model/Note.php";


use Note\DBConnect;
use Note\NoteDB;
use Note\Note;

class NoteManagement
{
    public $noteDB;

    public function __construct()
    {
        $db = new DBConnect("mysql:host=localhost;dbname=casestudy", "root", "long1996");
        $this->noteDB = new NoteDB($db->connect());
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $note_type_id = $_POST['note_type_id'];
            $note = new Note($title, $content, $note_type_id);
            $this->noteDB->save($note);
            include 'view/add.php';
            header('Location: index.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $note_id = $_GET['note_id'];
            $note = $this->noteDB->get($note_id);
            include 'view/delete.php';
        } else {
            $note_id = $_POST['note_id'];
            $this->noteDB->delete($note_id);
            header('Location: index.php');
        }
    }

    public function index()
    {
        $notes = $this->noteDB->getAll();
        include 'view/list.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $note_id = $_GET['note_id'];
            $note = $this->noteDB->get($note_id);
            include 'view/edit.php';
        } else {
            $note_id = $_POST['note_id'];
            $note = new Note($_POST['title'], $_POST['content'], $_POST['note_type_id']);
            $this->noteDB->update($note_id, $note);
            header('Location: index.php');
        }
    }

    public function detail()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $note_id = $_GET['note_id'];
            $note = $this->noteDB->get($note_id);
            include 'view/detail.php';
        }
    }
    public function search()
    {
        $note_type_id = $_REQUEST['note_type_id'];
            $keyWord = $_REQUEST['search'];
            $notes = $this->noteDB->search($keyWord,$note_type_id);
            include 'view/list.php';
    }
}
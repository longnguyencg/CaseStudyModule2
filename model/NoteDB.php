<?php


namespace Note;


class NoteDB
{
    public $connect;
    public function __construct($connect)
    {
        $this->connect = $connect;
    }
    public function save($note)
    {
        $title = $note->title;
        $content = $note->content;
        $note_type_id = $note->note_type_id;
        $sql = "INSERT INTO note(title,content,note_type_id) VALUES('$title','$content','$note_type_id')";
        $this->connect->query($sql);
    }

    public function delete($note_id)
    {
        $sql = "DELETE FROM note WHERE note_id = '$note_id'";
        $this->connect->query($sql);
    }
    public function getAll(){
        $sql = "SELECT * FROM note";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr =[];
        foreach ($result as $item){
            $note = new Note($item['title'],$item['content'],$item['note_type_id']);
            $note->setNoteId($item['note_id']);
            array_push($arr,$note);
        }
        return $arr;
    }
    public function get($note_id){
        $sql = "SELECT * FROM note WHERE note_id = ?";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $note_id);
        $statement->execute();
        $row = $statement->fetch();
        $note = new Note($row['title'], $row['content'], $row['note_type_id']);
        $note->note_id = $row['note_id'];
        return $note;
    }
    public function update($note_id, $note)
    {
        $sql = "UPDATE note SET title = ?, content = ?, note_type_id = ? WHERE note_id = ?";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $note->title);
        $statement->bindParam(2, $note->content);
        $statement->bindParam(3, $note->note_type_id);
        $statement->bindParam(4, $note_id);
        return $statement->execute();
    }
    public function search($key_word,$note_type_id){
        $sql = "SELECT * FROM note WHERE note_type_id = '$note_type_id' AND (title LIKE '%$key_word%' OR content LIKE '%$key_word%' OR note_type_id LIKE '%$key_word%')";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr =[];
        foreach ($result as $item){
            $note = new Note($item['title'],$item['content'],$item['note_type_id']);
            $note->setNoteId($item['note_id']);
            array_push($arr,$note);
        }
        return $arr;
    }
}
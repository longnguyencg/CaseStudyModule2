<?php

namespace Note;

class Note
{
    public $note_id;
    public $note_type_id;
    public $title;
    public $content;

    public function __construct($title, $content,$note_type_id)
    {
        $this->title = $title;
        $this->content = $content;
        $this->note_type_id = $note_type_id;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getNoteTypeId()
    {
        return $this->note_type_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $note_type_id
     */
    public function setNoteTypeId($note_type_id)
    {
        $this->note_type_id = $note_type_id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getNoteId()
    {
        return $this->note_id;
    }

    /**
     * @param mixed $note_id
     */
    public function setNoteId($note_id)
    {
        $this->note_id = $note_id;
    }
}
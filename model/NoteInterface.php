<?php

interface INote
{
public function save($title,$content,$note_type_id);
public function delete($note_id);
}
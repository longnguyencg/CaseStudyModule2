<h1>Bạn chắc chắn muỗn xóa note này?</h1>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="note_id" value="<?php echo $note->note_id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>
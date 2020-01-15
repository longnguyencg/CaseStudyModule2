<h2>Cập nhật thông tin Note </h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="note_id" value="<?php echo $note->note_id; ?>"/>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo $note->title; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Content</label>
        <input type="text" name="content" value="<?php echo $note->content; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" name="note_type_id" value="<?php echo $note->note_type_id; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
<h2>List Note </h2>
<a href="./index.php?page=add">Thêm mới</a>
<div>
    <form class="form-inline my-2 my-lg-0" method="post">
        <select name="note_type_id" class="form-control mt-3" id="exampleFormControlSelect1" style="width:20%">
            <option>Thể loại</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <input name="search" class="form-control mr-sm-2 mt-3 ml-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tiêu đề</th>
        <th>Phân loại</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($notes as $key => $note): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><a href="./index.php?page=detail&note_id=<?php echo $note->note_id; ?>"><?php echo $note->title ?></a></td>
        <td><?php echo $note->note_type_id ?></td>
        <td> <a href="./index.php?page=delete&note_id=<?php echo $note->note_id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&note_id=<?php echo $note->note_id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>
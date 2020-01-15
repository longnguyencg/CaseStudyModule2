<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới Note</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Title </label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" name="content">
                </div>
                <div class="form-group">
                    <label>Note type</label>
                    <input type="text" class="form-control" name="note_type_id">
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
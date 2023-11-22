<h2 style="text-align: center;">Thêm Loại Phòng</h2>
<div class="container-fluid">
    <form style="margin-bottom: 20px;" action="index.php?act=add_loai_phong" method="post" enctype="multipart/form-data">
        <div style="margin-bottom: 10px;" class="mb-3 row">
            <label class="col-sm-2 col-form-label">Tên Loại Phòng</label>
            <div class="col-sm-10">
                <input type="text" name="ten_loai_phong" class="form-control">
            </div>
        </div>
        <div  class="mb-3 row">
            <label class="col-sm-2 col-form-label">Ảnh</label>
            <div class="col-sm-10">
                <input style="margin-bottom: 10px;" type="file" name="anh_loai_phong" class="form-control">
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chi Tiết Loại Phòng</label>
                <div class="col-sm-10">
                    <input type="text" name="chi_tiet_loai_phong" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" name="add" class="btn btn-success">Thêm</button>
                </div>
            </div>
    </form>
</div>
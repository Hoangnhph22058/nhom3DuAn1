<h2 style="text-align: center;">Thêm Phòng</h2>
<div class="container-fluid">
    <form style="margin-bottom: 20px;" action="index.php?act=add_phong" method="post" enctype="multipart/form-data">
        <div style="margin-bottom: 10px;" class="mb-3 row">
            <label class="col-sm-2 col-form-label">Tên Phòng</label>
            <div class="col-sm-10">
                <input type="text" name="ten_phong" class="form-control">
            </div>
        </div>
        <div style="margin-bottom: 10px;" class="mb-3 row">
            <label class="col-sm-2 col-form-label">Loại Phòng</label>
            <div class="col-sm-10">
                <select name="id_loai_phong">
                    <?php foreach($ten_loai_phong as $value){ ?>
                    <option value="<?= $value['id_loai_phong'] ?>"><?php echo $value['ten_loai_phong'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div  class="mb-3 row">
            <label class="col-sm-2 col-form-label">Ảnh</label>
            <div class="col-sm-10">
                <input style="margin-bottom: 10px;" type="file" name="anh" class="form-control">
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Sức Chứa</label>
                <div class="col-sm-10">
                    <input type="number" name="suc_chua" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chi Tiết Phòng</label>
                <div class="col-sm-10">
                    <input type="text" name="chi_tiet_phong" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Giá Tiền</label>
                <div class="col-sm-10">
                    <input type="number" name="gia_tien" class="form-control">
                </div>
            </div>
            <input type="hidden" name="trang_thai" value="0" id="">
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" name="add" class="btn btn-success">Thêm</button>
                </div>
            </div>
    </form>
</div>
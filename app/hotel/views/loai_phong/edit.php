<h2 style="text-align: center;">Sửa Loại Phòng</h2>
<div class="container-fluid">
    <form style="margin-bottom: 20px;" action="index.php?act=update_loai_phong" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_loai_phong" value="<?= $one_loai_phong['id_loai_phong'] ?>" id="">
        <div style="margin-bottom: 10px;" class="mb-3 row">
            <label class="col-sm-2 col-form-label">Tên Loại Phòng</label>
            <div class="col-sm-10">
                <input type="text" name="ten_loai_phong" value="<?= $one_loai_phong['ten_loai_phong'] ?>" class="form-control">
            </div>
        </div>
        <div  class="mb-3 row">
            <label class="col-sm-2 col-form-label">Ảnh</label>
            <div class="col-sm-10">
                <input style="margin-bottom: 10px;" type="file" name="anh_loai_phong" class="form-control">
                <td><img style="width: 200px;height:200px" src="../upload/<?php echo $one_loai_phong['anh_loai_phong'] ?>" alt=""><img src="" alt=""></td>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chi Tiết Loại Phòng</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $one_loai_phong['chi_tiet_loai_phong'] ?>" name="chi_tiet_loai_phong" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" name="update" class="btn btn-success">Cập Nhật</button>
                </div>
            </div>
    </form>
</div>
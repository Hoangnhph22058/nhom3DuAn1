<h2 style="text-align: center;">Sửa Phòng</h2>
<div class="container-fluid">
    <form style="margin-bottom: 20px;" action="index.php?act=update_phong" method="post" enctype="multipart/form-data">
        <div style="margin-bottom: 10px;" class="mb-3 row">
        <input type="hidden" name="id_phong" value="<?= $one_phong['id_phong'] ?>" id="">
            <label class="col-sm-2 col-form-label">Tên Phòng</label>
            <div class="col-sm-10">
                <input type="text" name="ten_phong" value="<?= $one_phong['ten_phong'] ?>" class="form-control">
            </div>
        </div>
        <div style="margin-bottom: 10px;" class="mb-3 row">
            <label class="col-sm-2 col-form-label">Loại Phòng</label>
            <div class="col-sm-10">
                <select name="id_loai_phong">
                    <?php foreach ($loai_phong as $value) { ?>
                        <?php if ($value['id_loai_phong'] == $id_loai_phong){
                            echo '<option value="'.$value['id_loai_phong'].'" selected>'.$value['ten_loai_phong'].'</option>';
                        }else{
                            echo '<option value="'.$value['id_loai_phong'].'">'.$value['ten_loai_phong'].'</option>';
                        } ?>
                    <?php }  ?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Ảnh</label>
            <div class="col-sm-10">
                <input style="margin-bottom: 10px;" type="file" name="anh" class="form-control">
                <img style="width: 200px;height:200px" src="../upload/<?php echo $one_phong['anh'] ?>" alt=""><img src="" alt="">
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Sức Chứa</label>
                <div class="col-sm-10">
                    <input type="number" value="<?= $one_phong['suc_chua'] ?>" name="suc_chua" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chi Tiết Phòng</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $one_phong['chi_tiet_phong'] ?>" name="chi_tiet_phong" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label">Giá Tiền</label>
                <div class="col-sm-10">
                    <input type="number" value="<?= $one_phong['gia_tien'] ?>" name="gia_tien" class="form-control">
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" name="update" class="btn btn-success">Sửa</button>
                </div>
            </div>
    </form>
</div>
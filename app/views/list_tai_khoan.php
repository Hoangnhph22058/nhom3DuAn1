<table>
    <tr>
        <th>STT</th>
        <th>ten tai khoan</th>
        <th>mat khau</th>
        <th>email</th>
        <th>sdt</th>
        <th>anh_dai_dien</th>
        <th>vai tro</th>
        <th>trang thai</th>
    </tr>
    <?php 
        foreach($list_tai_khoan as $item){
            extract($item);
    echo '<tr boder =1>
        <td>'.$id_tai_khoan.'</td>
        <td>'.$ten_tai_khoan.'</td>
        <td>'.$mat_khau.'</td>
        <td>'.$email.'</td>
        <td>'.$sdt.'</td>
        <td>'.$anh_dai_dien.'</td>
        <td>'.$vai_tro.'</td>
        <td>'.$trang_thai.'</td>
        
    </tr>';
    } 
    ?>
</table>
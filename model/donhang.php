<?php
//  require_once 'connect.php';


function bill_insert_id($madh, $iduser,$nguoidat_ten, $nguoidat_email, $nguoidat_tel,$nguoidat_diachi,$nguoinhan_ten,$nguoinhan_diachi,$nguoinhan_tel,$total,$ship,$voucher, $tongthanhtoan,$pttt){
    $sql = "INSERT INTO bill(madh, iduser,nguoidat_ten, nguoidat_email, nguoidat_tel,nguoidat_diachi,nguoinhan_ten,nguoinhan_diachi,nguoinhan_tel,total,ship,voucher,tongthanhtoan,pttt)
     VALUES ('$madh', '$iduser','$nguoidat_ten', '$nguoidat_email', '$nguoidat_tel','$nguoidat_diachi','$nguoinhan_ten','$nguoinhan_diachi','$nguoinhan_tel','$total','$ship' ,'$voucher', '$tongthanhtoan','$pttt')";
return get_one_id($sql, $madh, $iduser,$nguoidat_ten, $nguoidat_email, $nguoidat_tel,$nguoidat_diachi,$nguoinhan_ten,$nguoinhan_diachi,$nguoinhan_tel,$total,$ship,$voucher, $tongthanhtoan,$pttt);
}


?>


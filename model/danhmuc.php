<?php 

function showall_dm(){
    $sql="select * from vat_tu order by id ";
    $lists=pdo_query($sql);
    return $lists;
}

function showone_dm($id){
    $sql="select * from vat_tu where id=".$id;
    $dm = pdo_query_one($sql);   
    return $dm;
}

function add_dm($tenloai,$mavt,$dvt,$dongia,$soluong){
    $sql="insert into vat_tu(MaVT,TenVT,DVT,DonGia,SoLuongTon) values('$mavt','$tenloai','$dvt','$dongia','$soluong')";
    pdo_execute($sql);
}

function checkten($tenloai){
    $sql="select * from vat_tu order by id ";
    $lists=pdo_query($sql);
    return $lists;
}

function del_dm($id){
    $sql="delete from vat_tu where id=".$id;
    pdo_execute($sql);

}

function up_dm($tenloai,$mavt,$dvt,$dongia,$soluong,$id){
    $sql="update vat_tu set TenVT='".$tenloai."', MaVT='".$mavt."', DVT='".$dvt."', DonGia='".$dongia."', SoLuongTon='".$soluong."' where id=".$id;
    pdo_execute($sql);
}


?>


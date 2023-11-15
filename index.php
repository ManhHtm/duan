<?php
include "view/header.php";
// dang nhap, dang ký, dổi mk
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'dangnhap':
            
            include "view/dangnhap.php";
            break;
        
        case 'dangky':
            include "view/dangky.php";
            break;

        case 'quenmk':
            include "view/quenmk.php";
            break; 

        case 'user':
            include "view/user.php";
            break; 

        
    }
}else{
    include "view/home.php";
}


//tất cả sản phẩm
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'iphone':
            include "view/iphone.php";
            break;
        
        case 'samsung':
            include "view/samsung.php";
            break;

        case 'oppo':
            include "view/oppo.php";
            break; 

        case 'realme':
            include "view/realme.php";
            break; 

        case 'xiaomi':
            include "view/xiaomi.php";
            break; 

        
    }
}else{
    include "view/home.php";
}

 

include "view/footer.php";

?>
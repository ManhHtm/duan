
<?php

    include "header.php";
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'addm':
                include "danhmuc/add.php";
                break;
            
            case 'adsp':
                include "sanpham/add.php";
                break;
                
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
?>
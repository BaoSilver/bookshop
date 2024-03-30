<?php
    require_once '../database/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Trang quản trị </title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
           switch ($variable) {
            case 'admin_product':
                require_once 'admin_product.php';
                break;

            case 'them':
                require_once 'them.php';
                break;

            case 'xoa':
                require_once 'xoa.php';
                break;
                
            case 'sua':
                require_once 'sua.php';
                break;     
           }     
        }else{
            require_once 'admin_product.php';
        }
        ?>  
</body>
</html>
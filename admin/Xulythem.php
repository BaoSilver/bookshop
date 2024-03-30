<?php
require('../database/config.php');

$title = isset($_POST['title']) ? $_POST['title'] : '';
$author = isset($_POST['author']) ? $_POST['author'] : '';
$descriptions = isset($_POST['descriptions']) ? $_POST['descriptions'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';
$images = isset($_POST['images']) ? $_POST['images'] : '';

if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO books (title, author, descriptions, price, category_id, images) VALUES ('" . $title . "', '" . $author . "', '" . $descriptions . "', '" . $price . "', '" . $category_id . "', '" . $images . "')";
    if (mysqli_query($conn, $sql_them)) {
        echo "Thêm dữ liệu thành công";
        header('Location: admin_index.php?action=Xulythem.php');
    } else {
        echo "Lỗi: " . $sql_them . "<br>" . mysqli_error($conn);
    }
//Xoa
} else {
    $id = isset($_GET['bookid']) ? $_GET['bookid'] : '';
    if (!empty($id)) {
        $sql_xoa = "DELETE FROM books WHERE book_id='" . $id . "'";
        mysqli_query($conn, $sql_xoa);
        // header('Location: admin_index.php?action=Xulythem.php');
    }
}
//Sua

?>
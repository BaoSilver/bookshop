<?php
    require('../database/config.php');
    $sql_admin_product = "SELECT * FROM books ORDER BY author DESC";
    $query_admin_product = mysqli_query($conn,$sql_admin_product);
?>
<p>Tên sách</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Tên sách</th>
    <th>Giá tiền</th>
    <th>Quản lý</th>
</tr>
<?php
  $i = 0;
while($row = mysqli_fetch_array($query_admin_product)){
  $i++;
?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['title'] ?></td>
    <td><?php echo $row['price'] ?></td>
    <td>
    <a href="Xulythem.php?bookid=<?php echo $row['book_id'] ?>">Xoá</a> | <a href="admin&query=sua">Sửa</a>
</td>
</tr>
<?php
}
?>
</table>
<?php
/**
 * Created by VSCode.
 * User: Igor
 * Date: 05/11/2020
 * Time: 09:14
 */

$top = 
'<head> 
    <meta charset="UTF-8"> </meta>
    <title> Подписки </title>
</head>';
print($top);
$text_string = "";
 print("<h1>Подписчики</h1>");
 print("<br>");

$user = 'root';
$password = 'root';
$db = 'DB_TEST';
$host = 'localhost';
$port = 8889;;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

$sql = 'SELECT * FROM wp_wpmm_subscribers';

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
    print("<hr>Электронный адрес: <b>" . $row['email'] . "</b>; Дата и время подписки: <b>" . $row['insert_date'] . "</b><br>");
}
print("<hr>");






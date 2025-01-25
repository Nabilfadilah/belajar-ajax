<?php
// kita bisa olah tau uji datanya

// menyambungkan datanya ke database dengan query
// select * from users where name = $_GET['keyword'];

// memberikan response dalam bentuk html
echo "Nama: <strong>" . $_POST['keyword'] . "</strong>";

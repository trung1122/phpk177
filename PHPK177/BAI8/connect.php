<?php
//lấy ra data trong sql có 3 bước:
//buowcs1: kết nối data
    $connect = mysqli_connect('localhost','root','','hocphpk177');
    if($connect){
        mysqli_query($connect, "SET NAMES 'utf8'"); // giá trị kết nối
        print_r ('kết nối thành công');
    }else{
        die('Kết nối thất bại');
    }
//
    
    ?>
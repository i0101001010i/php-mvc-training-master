<?php

// This is Simple MVC for Internship

error_reporting(E_ALL ^ E_DEPRECATED);

// define: định nghĩa hằng số
define('DS', DIRECTORY_SEPARATOR); // DIRECTORY_SEPARATOR: dấu "/" hoặc "\"
define('ROOT', dirname(__FILE__));

// require: code bên dưới sẽ KHÔNG được thực thi require bị lỗi
require ROOT . DS . 'includes' . DS . 'common.php';

// Lấy tham số c và m
$controller = empty($_GET['c']) ? 'index' : strtolower($_GET['c']); // Lấy ra tên controller
$method = empty($_GET['m']) ? 'index' : strtolower($_GET['m']); // lấy ra tên method

echo 'Controller name: ' . $controller . '<br>';
echo 'Controller method: ' . $method.'<br>';

// Lấy tên controller file từ c và method từ m
$c_file = ROOT . DS . 'controllers' . DS . $controller . '.php'; // lấy ra tên file của controller
$m_func = $controller . '_' . $method; // lấy ra tên function của controller

echo 'Controller file name: ' . $c_file . '<br>';
echo 'Controller function' . $m_func;

// kiểm tra tên file có đọc được không
if (is_readable($c_file)) {

    // include: code bên dưới vẫn sẽ được thực thi nếu include bị lỗi
    include $c_file;
    call_user_func($m_func);
} else {
    die("Page not found !");

}

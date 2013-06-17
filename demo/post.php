<?php
//!index.php 总入口
/**
 * index.php的 调用形式为：
 * 显示所有留言：index.php?action=list
 * 添加留 言 ：index.php?action=post
 * 删除留言 ：index.php?action=delete& id=x
 */
require_once('lib/DataAccess.php');
require_once('model/Driver.php');
require_once('view/DriverView.php');
require_once('controller/DriverController.php');


$code = $_POST["code"];
$name = $_POST['name'];
$address = $_POST['address'];
$dao =& new DataAccess ('127.0.0.1', 'root', '', 'full');
$post[code] = $code;
$post[name] = $name;
$post[address] = $address;


$controller = new postController($dao, $post);
$controller->getView()->display();

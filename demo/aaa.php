<?php
header("Content-Type: text/html; charset=utf-8");
echo "你好<br>";

try {
    $conn = @mysql_connect("127.0.0.1", "admin", "admin"); //连接数据库

    mysql_select_db("test", $conn); //选择数据库

} catch (Exception $e) {
    echo "ss";
    $e->__toString();
}





if($conn){


    $recode="select CODE from DRIVER";
    $result=mysql_query($recode,$conn);
    $re_num = mysql_num_rows($result);//获取记录数
    echo $re_num;
    echo "<table border=1><tr><td>code</td></tr>";
    while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $users=$row["CODE"];
        echo "<tr><td>".$users."</td></tr>";
    }
    echo "</table>";
}else{
    echo "aaa";
    die("aa" . 'Could not connect: ' . mysql_error());
}
?>
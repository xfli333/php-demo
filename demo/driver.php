<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHP MVC留言板</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">


        <div class="span9">

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
                //创建DataAccess对象（请根据你的需要修改参数值）
                $dao =& new DataAccess ('127.0.0.1', 'root', '', 'full');
                //根据$_GET["action"]取值的不同调用不同的控制器子类
                $action = $_GET["action"];


                switch ($action) {
                    case "post":
                        $controller =& new postController($dao, $_POST);
                        break;
                    case "list":
                        $controller =& new listController($dao);
                        break;
                    case "delete":
                        $controller =& new deleteController($dao, $_GET["code"]);
                        break;
                    default:
                        $controller =& new listController($dao);
                        break; //默认为显示留言
                }

                $view = $controller->getView(); //获取视图对象
                $view->display(); //输出HTML
                ?>
            <a href="add.php" class="btn btn-large" style="margin-bottom: 20px">添加新留言</a><br>
        </div>
    </div>
</div>
</body>
</html>
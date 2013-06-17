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
            <form action="post.php" name="form" method="post">
                <input type="text" name="code" id="code" />
                <input type="text" name="name" id="name" />
                <input type="text" name="address" id="address" />
                <input type="submit" value="submit"/>
                <input type="reset" value="cancel"/>

            </form>
        </div>
    </div>
</div>


</body>
</html>
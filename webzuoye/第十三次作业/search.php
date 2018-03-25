<?php
	header('Content-type:text/json');
    @mysql_connect('localhost','root','a20153312');
    @mysql_select_db('user');
    $name=$_POST['name'];
    $sql="select * from  `info`  where `name`='$name'";
    $query=mysql_query($sql);
    $re=mysql_fetch_array($query);
    echo json_encode($re);

?>
<?php
	 header('Content-type:text/json');
	@mysql_connect("localhost:3306","root","a20153312")or die("mysql连接失败");
	@mysql_select_db("student")or die("数据库连接失败");
	
	if(!empty($_POST['name'])&&$_POST['stat']==1){
		// 查询
		$name=$_POST['name'];
		$sql="select * from `info` where `name`='$name' ";
		$query=mysql_query($sql);
		$re=mysql_fetch_array($query);
		echo json_encode($re);
	}else if(!empty($_POST['name'])&&$_POST['stat']==2){
		// 插入
		$number=$_POST['number'];
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$major=$_POST['major'];
		$date=$_POST['date'];
		$score=$_POST['score'];
		$info=$_POST['info'];
		$photo=$_POST['photo'];
		
		$sql="INSERT INTO `student`.`info` (`id`,`number`, `name`, `sex`, `major`, `date`, `score`, `info`, `photo`) VALUES ('','$number', '$name', '$sex', '$major', '$date', '$score', '$info', '$photo')";
		$query=mysql_query($sql);
		if($query){
			$arr=array('success'=>true);
			echo json_encode($arr);
		}
	}
	else if(!empty($_POST['name'])&&$_POST['stat']==3){
		// 修改
		$number=$_POST['number'];
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$major=$_POST['major'];
		$date=$_POST['date'];
		$score=$_POST['score'];
		$info=$_POST['info'];
		$photo=$_POST['photo'];
		$id=$_POST['id'];
		$sql="UPDATE `info` SET `number`='$number',`name`='$name',`sex`='$sex',`major`='$major',`date`='$date',`score`='$score',`info`='$info' WHERE `id`='$id'  LIMIT 1";
		$query=mysql_query($sql);
		if($query){
			$arr=array('success'=>true);
			echo json_encode($arr);
		}
	}
	else if(!empty($_POST['id'])&&$_POST['stat']==4){
		// 删除
		$id=$_POST['id'];
		$sql="DELETE FROM `student`.`info` WHERE `info`.`id` = '$id'";
		$query=mysql_query($sql);	
		if($query){
			$arr=array('success'=>true);
			echo json_encode($arr);
		}
	}

?>
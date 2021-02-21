<?php
$id=$_GET['id'];
delete_news($id);
header("location:dashbord.php?m=news_cat&p=list");
//echo("<script>location.href='/cms/admin/dashbord.php?m=products_cat&p=list\';</script>");

//        header("Location:".ADMIN_URL."/index.php");

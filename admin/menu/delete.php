<?php
$id=$_GET['id'];
deleteMenu($id);
//header("location:dashbord.php?m=menu&p=list");
?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=menu&p=list';
    </script>
<?php

<?php
$id=$_GET['id'];
deletenews ($id);
//header("location:dashbord.php?m=news&p=list");
?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=news&p=list';
    </script>
<?php

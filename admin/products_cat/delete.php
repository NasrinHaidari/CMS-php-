<?php
$id=$_GET['id'];
deleteProcat($id);
?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=products_cat&p=list';
    </script>
<?php
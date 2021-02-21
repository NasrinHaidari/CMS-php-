<?php
$id=$_GET['id'];
delete_widget ($id);
?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=widget&p=list';
    </script>
<?php

<?php
$id=$_GET['id'];
deleteContact ($id);
?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=contact&p=list';
    </script>
<?php

<?php
$id=$_GET['id'];
//echo $id;
$result=showDetail($id);

?>
<h1 class="pageLables">
    <?php echo $result['subject']; ?>
</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $result['name']." : ".$result['subject']; ?>
            </header>
            <div class="panel-body">
                <p><?php echo $result['text']; ?></p>
                <h6>Email: <?php echo $result['email']; ?></h6>
            </div>
        </section>
    </div>
</div>

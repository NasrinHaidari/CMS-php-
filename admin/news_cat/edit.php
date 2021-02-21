<?php
$id=$_GET['id'];
//echo $id;
$result=showEdit_Cat($id);

if (isset($_POST['btn'])) {
    $data= $_POST['frm'];
//    addmenu($data);
    edit_News($data,$id);
//    header("location:dashbord.php?m=news_cat&p=list");
    ?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=news_cat&p=list';
    </script>
    <?php
}
?>
<h1 class="pageLables">ویرایش دسته بندی </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش دسته بندی <?php echo $result['title']; ?>

            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']; ?>">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

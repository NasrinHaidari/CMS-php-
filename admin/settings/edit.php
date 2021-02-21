<?php
if (isset($_POST['btn'])) {
    $data= $_POST['frm'];
//    addmenu($data);
    editsettings($data);
    ?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=settings&p=edit';
    </script>
    <?php
}
?>
<h1 class="pageLables">ویرایش تنظیمات وب سایت </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">ویرایش تنظیمات </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان </label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $settings['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" value="<?php echo $settings['description']; ?>">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>
            </div>
        </section>
    </div>
</div>

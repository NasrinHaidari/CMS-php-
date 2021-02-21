<?php
$id=$_GET['id'];
//echo $id;
$result=show_edit_page($id);

if (isset($_POST['btn'])) {
    $data= $_POST['frm'];
    edit_page($data,$id);
    ?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=page&p=list';
    </script>
    <?php
}
?>
<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به ویب سایت

            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> کلمات کلیدی</label>
                        <input type="text" name="frm[keywords]" class="form-control" value="<?php echo $result['keywords']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control" value="<?php echo $result['description']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتویات</label>
                        <textarea name="frm[body]" class="form-control ckeditor" rows="7"><?php echo $result['body']; ?></textarea>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

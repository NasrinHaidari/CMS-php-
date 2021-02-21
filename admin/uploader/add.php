<?php
    if (isset($_POST['btn'])) {
        $data= $_POST['frm'];
        $img=file_uploader('img');
        $name=$img['0'];
        $size=$img['1'];
//        var_dump($img); die();
        add_file($data, $name, $size);
    }
?>
<h1 class="pageLables">افزودن فایل جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن فایل جدید به ویب سایت

            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان فایل</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">انتخاب فایل</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>
            </div>
        </section>
    </div>
</div>

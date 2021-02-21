<?php
    if (isset($_POST['btn'])) {
        $data= $_POST['frm'];
        $folder="new-".rand();
        $img=uploader('img',"images/news/",$folder,"news");
//        var_dump($img); die();
        addnews($data, $img);
    }
?>
<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به ویب سایت

            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تاریخ خبر</label>
                        <input type="date" name="frm[date]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="7"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control m-bot15" name="frm[news_cat]">
                            <option value="0">سرگروه</option>
                            <?php
                            $cat=newscat();
                            foreach ($cat as $val){
                                echo "<option value=\"$val[id]\">$val[title]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleInputEmail1">ترتیب نمایش</label>-->
<!--                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش">-->
<!--                    </div>-->

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>

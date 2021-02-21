<?php
    if (isset($_POST['btn'])) {
        $data= $_POST['frm'];
//        $folder="pro-".rand();
        $img=uploader('img',"../images/products/",$data['title'],"product");
//        var_dump($img); die();
        addpro($data, $img);
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
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="7"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control m-bot15" name="frm[procat]">
                            <option value="0">سرگروه</option>
                            <?php
                            $procat=procat();
                            foreach ($procat as $val){
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

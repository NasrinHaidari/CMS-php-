<?php
    if (isset($_POST['btn'])) {
        $data= $_POST['frm'];
        addmenu($data);
    }
?>
<h1 class="pageLables">افزودن مینو جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن مینو جدید به ویب سایت

            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" name="frm[url]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control m-bot15" name="frm[parent]">
                            <option value="0">سرگروه</option>
                            <?php
                            $summenu=submenu();
                            foreach ($summenu as $subs){
                                echo "<option value=\"$subs[id]\">$subs[title]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" checked>فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0">غیرفعال
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>

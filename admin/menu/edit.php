<?php
$id=$_GET['id'];
//echo $id;
$result=showEdit($id);

if (isset($_POST['btn'])) {
    $data= $_POST['frm'];
//    addmenu($data);
    editmenu($data,$id);
//    header("location:dashbord.php?m=menu&p=list");
    ?>
    <script type="text/javascript">
        window.location.href = 'dashbord.php?m=menu&p=list';
    </script>
<?php
}
?>
<h1 class="pageLables">ویرایش مینو </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش مینو <?php echo $result['title']; ?>

            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" name="frm[url]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" value="<?php echo $result['url']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control m-bot15" name="frm[parent]">
                            <option value="0">سرگروه</option>
                            <?php
                            $summenu=submenu();
                            foreach ($summenu as $subs){
                                echo "<option value=\"$subs[id]\" ";
                                    if($result['chid']==$subs['id']){
                                        echo " selected";
                                    }
                                echo ">$subs[title]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" <?php if($result['status']==1){ echo "checked";} ?>>فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0" <?php if($result['status']==0){ echo "checked";}?>>غیرفعال
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش" value="<?php echo $result['sort']; ?>">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

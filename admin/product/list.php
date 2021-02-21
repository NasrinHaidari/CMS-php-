<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست محصولات اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>نام محصول</th>
                    <th>دسته بندی</th>
                    <th>تصویر</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $listPro=listProAdmin();
                    foreach ($listPro as $val):
                ?>
                <tr>
                    <td><?php echo $val['title']; ?></td>
                    <td><?php
                            $parent=selectProCat($val['procat']);
                            echo $parent;
                        ?>
                    </td>
                    <td><img width="80" src="<?php echo $val['img']; ?>"/></td>
                    <td>
                        <a href="dashbord.php?m=product&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                    </td>
                    <td>
                        <a href="dashbord.php?m=product&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

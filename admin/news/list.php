<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست مدیریت خبرها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان خبر</th>
                    <th>دسته بندی</th>
                    <th>تصویر</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $listNews=listnewsAdmin();
                    foreach ($listNews as $val):
                ?>
                <tr>
                    <td><?php echo $val['title']; ?></td>
                    <td><?php
                            $parent=selectNewsCat($val['news_cat']);
                            echo $parent;
                        ?>
                    </td>
                    <td><img width="80" src="<?php echo $val['img']; ?>"/></td>
                    <td>
                        <a href="dashbord.php?m=news&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                    </td>
                    <td>
                        <a href="dashbord.php?m=news&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
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

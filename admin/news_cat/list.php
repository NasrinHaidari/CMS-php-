<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسته بندی خبرها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان دسته بندی</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $listcat=listnewscatAdmin();
                    foreach ($listcat as $val):
                ?>
                <tr>
                    <td><?php echo $val['title']; ?></td>
                    <td>
                        <a href="dashbord.php?m=news_cat&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                    </td>
                    <td>
                        <a href="dashbord.php?m=news_cat&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
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

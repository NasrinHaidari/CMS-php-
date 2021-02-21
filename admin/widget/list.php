<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست ویجیت اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان خبر</th>
                    <th>تصویر</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $list=list_widget_Admin();
                    foreach ($list as $val):
                ?>
                <tr>
                    <td><?php echo $val['title']; ?></td>
                    <td><img width="80" src="<?php echo $val['img']; ?>"/></td>
                    <td>
                        <a href="dashbord.php?m=widget&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                    </td>
                    <td>
                        <a href="dashbord.php?m=widget&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
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

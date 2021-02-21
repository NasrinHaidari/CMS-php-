<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منوهای اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>آدرس</th>
                    <th>حجم</th>
                    <th>تصویر</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $list=list_file();
                    foreach ($list as $val):
                ?>
                <tr>
                    <td><?php echo $val['title']; ?></td>
                    <td><input type="text" style="direction: ltr" value="admin/<?php echo $val['img'];?>" size="50"></td>
                    <td><?php echo $val['size']; ?></td>
                    <td><img width="80" src="<?php echo $val['img']; ?>"/></td>
                </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

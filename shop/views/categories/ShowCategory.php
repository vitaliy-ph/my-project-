    <form action="" method="post" >
        <div >
            <select name="title" id="title">
                <option value="">Select category</option>
                <?php foreach (getCategories() as  $category): ?>
                    <option value="<?= $category['title'] ?>"><?= $category['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Show">
    </form>
</div>
<?php
$cat = showCategory($_POST);
?>
<table border="black" cellspacing="1px" cellpadding="10px">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Parent_Category_id</th>
        <th scope="col">Created_at</th>
        <th scope="col">Update_at</th>
    </tr>
    <?php
    $count = count($cat);
    for($i = 0; $i < $count; $i++):
        ?>
        <tr align="center">
            <td><?= $cat[$i]['id'] ?></td>
            <td><?= $cat[$i]['title'] ?></td>
            <td><?= $cat[$i]['parent_category_id'] ?></td>
            <td><?= $cat[$i]['created_at'] ?></td>
            <td><?= $cat[$i]['updated_at'] ?></td>
        </tr>
    <?php endfor;?>
</table>

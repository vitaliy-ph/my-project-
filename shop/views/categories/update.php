
    <form action="" method="post" >
            <label for="parent_category_id">Select category</label>
            <select   name="parent_category_id" id="parent_category_id">
                <option value="">--</option>
                <?php foreach (getCategories() as  $category): ?>
                    <option value="<?= $category['title'] ?>"><?= $category['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="newTitle">New title</label>
            <input  type="text" name="newTitle" id="newTitle" >
        </div>
        <div>
            <label for="parent_category_id">Select parent category</label>
            <select  name="new_parent_category_id" id="new_parent_category_id">
                <option value="none">None</option>
                <?php foreach (getCategories() as  $category): ?>
                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input name="button"  type="submit" value="Update">
    </form>
</div>

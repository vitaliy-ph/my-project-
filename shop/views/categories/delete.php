

    <form action="" method="post">
        <div class="mb-3">
            <select  name="title" id="title">
                <option value="">--</option>
                <?php foreach (getCategories() as  $category): ?>
                    <option value="<?= $category['title'] ?>"><?= $category['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Delete">
    </form>
</div>
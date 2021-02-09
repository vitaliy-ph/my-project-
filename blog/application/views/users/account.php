
<div class="container">
    <h1 class="mt-4 mb-3"><?php echo $title; ?></h1>
<div class="row">
    <div class="col-lg-8 mb-4">
        <form action="/account/profile" method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Логин:</label>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['users']['login'];?>" disabled>
                    <p class="help-block"></p>
                    <?php if (isset($_SESSION['users']['id'])): ?>
                        <a class="nav-link" href="/users/logout">logout</a>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/login">login</a>
                    </li>
                    <?php endif; ?>
                    <a class="nav-link" href="/">Home page</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
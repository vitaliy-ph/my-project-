<div class="container">
    <br><br>
    <h1 class="mt-4 mb-3">Registration</h1>
    <div class="row">
        <div class="col-lg-4 mb-4">
            <form action="/users/register" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Login</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registration</button>
            </form>
            <br>
            <a class="" href="/users/login">Login</a>
        </div>
    </div>
</div>

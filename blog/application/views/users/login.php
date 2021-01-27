<div class="container">
    <br><br>
    <h1 class="mt-4 mb-3">Login</h1>
    <div class="row">
        <div class="col-lg-4 mb-4">
            <form action="/users/login" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Login</label>
                        <input type="text" class="form-control" name="login">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <br>
            <a class="" href="/users/register">Registration</a>
            or
            <a class="" href="/">Home page</a>
        </div>
    </div>
</div>



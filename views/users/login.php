<div class="container">
    <section id="login">
        <div class="row">
            <div id = "log_in_border_box" class="col-xs-12 col-xs-offset-4">
                <h2 class="log_in">LOG IN</h2>
                <br>
                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                    <div class="alert alert-danger">
                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                    <div class="alert alert-success">
                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                <?php endif; ?>

                <div class="col-md-6 col-md-offset-3" id="log_in_box">

                    <form method="POST" action="" data-validation data-required-message="This field is required">

                        <div class="form-group" id= "log_in_group">
                        USERNAME<br>
                            <input type="text" class="form-control" id="email_user" name="email_user" data-required>
                        </div>
                        <div class="form-group" id= "log_in_group">
                        <br><br>PASSWORD<br>
                            <input type="password" class="form-control" id="log_in_password" name="password" data-required>
                        </div>
                        <div class="row">
                            <!-- <div class="col-sm-6"> -->
                            <br><br>
                                <button a href="/account" class="login_button"> LOG IN </button>
                            </div>
                            <!-- <div class="col-sm-6"> -->
                            <br>
                                <button a href="/signup" class="create_account_button"> CREATE ACCOUNT </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

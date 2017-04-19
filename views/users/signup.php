<div class="container">
    <section id="login">
        <div class="row">
            <div id = "sign_up_border_box" class="col-md-6 col-md-offset-3">

                <h2 class="sign_up">SIGN UP</h2>
                    <p class="sign_up_info">FILL OUT THE INFO BELOW
                       <br> TO CREATE AN ACCOUNT</p>
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

                    <form method="POST" action="" data-validation data-required-message="This field is required">

                        <div class="form-group" id= "sign_up_group">
                        FULL NAME<br>
                            <input type="text" class="form-control" id="sign_up_name" name="name" data-required>
                        </div>

                        <div class="form-group" id= "email_sign_up_group">
                        EMAIL<br>
                            <input type="text" class="form-control" id="sign_up_email" name="email" data-required>
                        </div>

                        <div class="form-group" id= "sign_up_group">
                        USERNAME<br>
                            <input type="text" class="form-control" id="sign_up_username" name="username" data-required>
                        </div>

                        <div class="form-group" id= "sign_up_group">
                        PASSWORD<br>
                            <input type="password" class="form-control" id="sign_up_password" name="password" data-required>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <br><br>
                                <button type="submit" class="sign_up_button">SIGN UP</button>
                            </div>
                            <br>
                            <div class="col-sm-6 text-right">
                                <button a href="/login" class="log_in_button"> GO TO LOG IN </button>
                            </div>
                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

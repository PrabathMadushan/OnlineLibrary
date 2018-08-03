<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <?php require './templates/imports.php' ?>
        <link href="styles/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="wraper">
            <div class="login-wraper">
                <div class="title-wraper">
                    <h2><i class="fa fa-university"></i> Lowa State University</h2>
                    <p>A service dedicated to students of the University of Lowa State. We provide online resources, professional support and guidance to all our students whenever, and from wherever they have chosen to study.</p>
                   </div>
                <div class="form-wraper">
                    <form>
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" type="text" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input class="form-control" type="password" name="email" placeholder="password">
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Wrong </strong> Username or password is incorrect try again..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="#">Reset your password</a>
                        </div>
                        <div class="form-group" style="text-align: right;">
                            <button class="btn btn-success" type="submit">login</button>
                        </div>
                    </form>
                    <div class="form-group">
                        <a id="rb" class="btn btn-outline-success" href="rcode.php">If you don't have account yet Please register</a>   
                    </div>
                </div>

            </div>
            <div class="image-wraper">

            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require './templates/imports.php'; ?>
        <link href="styles/rrequest.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="title-wraper">
            <h2><i class="fa fa-university"></i> Lowa State University</h2>              
        </div>
        <div class="wraper">
            <form>
                <div class="form-group">
                    <label>Who you are:</label>
                    <select class="form-control" required="">
                        <option>Student</option>
                        <option>Professor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Your id:</label>
                    <input class="form-control" type="text" name="id" placeholder="id" required="">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="email" name="email" placeholder="email" required="">
                </div>
                <div class="form-group" style="text-align: right;">
                    <button class="btn btn-success" type="submit">Send Request</button> 
                </div>
            </form>
            <div style="text-align: center;">
                <span class="badge badge-pill">We will send you code to your email if you are selected as user</span>
            </div>
        </div>
    </body>
</html>

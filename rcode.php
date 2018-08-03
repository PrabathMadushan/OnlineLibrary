<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require './templates/imports.php';?>
        <link href="styles/rcode.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="wraper">
            <form>
                <div class="form-group">
                    <label>Enter code:</label>
                    <input class="form-control" type="text" name="rcode" placeholder="code">            
                </div>
                <div class="form-group" style="text-align: right;">
                    <button type="submit" class="btn btn-success">validate</button>          
                </div>
                <div class="form-group">
                    <a style="width: 100%;" class="btn btn-outline-success" href="rrequest.php">Send request for get code</a>
                </div>
            </form>
        </div>

    </body>
</html>

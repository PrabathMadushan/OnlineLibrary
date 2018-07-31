<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require './templates/imports.php'; ?>
    </head>
    <body>
        <?php require './templates/header.php'; ?>
        <div class="menu">
            <?php require './templates/mainmanu.php'; ?>
            <?php require './templates/submmanagebook.php'; ?>   
        </div>
        <div>
            <form>
                <div class="form-group">
                    <label>Name:</label>
                    <input class="form-control" type="text" placeholder="Name">
                </div>
            </form>
        </div>
    </body>
</html>
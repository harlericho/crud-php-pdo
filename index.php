<!DOCTYPE html>
<html>
    <head>
        <title>CRUD-PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="dist/fontA/css/all.css" rel="stylesheet" type="text/css"/>
        <link href="dist/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css"/>
        <link href="dist/alertifyjs/css/themes/default.css" rel="stylesheet" type="text/css"/>
        <script src="dist/jquery-3.5.0.js" type="text/javascript"></script>
        <script src="dist/js/bootstrap.js" type="text/javascript"></script>
        <script src="dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="dist/alertifyjs/alertify.js" type="text/javascript"></script>
        <script src="funciones.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>PDO-PHP-MYSQL</h2>
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Crud PDO</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#exampleModal">
                                        <i class="fa fa-plus-square"></i>
                                         Agregar
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="tabla"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    mostrar();
</script>
<?php include './modal.php'; ?>

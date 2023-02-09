<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>Tutorial DataTables</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <!-- <script src="popper/popper.min.js"></script> -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="datatables/datatables.min.js"></script>


    <!--Para usar los botones-->
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

    <!--Para los estilos en Excel-->
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.templates.min"></script> -->

    <!-- <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script> -->



    <script type="text/javascript" src="main.js"></script>


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Puntos de Cambio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"> Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paginas/cargarArchivos.php">Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cdpalabras/index.php">Palabras</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Ejemplo tabla con DataTables-->
    
    <div class="container bg-light rounded p-5"><H3>Vulneravilidades</H3>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="excel" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>APS</th>
                                <th>Nombre del Componente</th>
                                <th>Descripción</th>
                                <th>Nombre de Proyecto</th>
                                <th>Asignado</th>
                                <th>Estatus</th>
                                <th>Avance Desarollo %</th>
                                <th>Avance Pruebas %</th>
                                <th>Pruebas</th>
                                <th>Desarollo</th>
                                <th style="background-color: red;">Alta</th>
                                <th style="background-color: rgb(196, 196, 0);">Media</th>
                                <th style="background-color: green;">Baja </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>
                                    <select name="aps" id="aps">
                                        <option value="1">APS 5</option>
                                        <option value="1">APS 6</option>
                                    </select>
                                </td>
                                <td>Nombre del Componente</td>
                                <td>Descripción</td>
                                <td>Nombre de Proyecto</td>
                                <td>Asignado</td>
                                <td>Estatus</td>
                                <td>Avance Desarollo %</td>
                                <td>Avance Pruebas %</td>
                                <td>Pruebas</td>
                                <td>Desarollo</td>
                                <td><input type="number" name="alta" id="" style="width: 50px;"></td>
                                <td><input type="number" name="media" id="" style="width: 50px;"></td>
                                <td><input type="number" name="baja" id="" style="width: 50px;"> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>
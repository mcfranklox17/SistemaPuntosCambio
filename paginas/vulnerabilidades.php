<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Vulnerabilidades</title>
      
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../main.css">  
      
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
    <style>
            div.dataTables_wrapper div.dataTables_filter label{
                font-weight: normal;
                white-space: nowrap;
                text-align: right;
                visibility: hidden 
            }
        </style>


  </head>
    
  <body> 
     <header>
     <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Vulnerabilidades</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> Proyectos <span class="sr-only">(current)</span></a>
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
    <div style="height:50px"></div>
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
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
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      

    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     

    <!--Para usar los botones-->
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

    <!--Para los estilos en Excel-->
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.templates.min"></script>
    
    <!-- <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script> -->
    
     

    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>

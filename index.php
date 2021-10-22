<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<?php 
  $db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8', 'root', '');
  
  $sentenciab = $db->prepare( "SELECT * FROM books");
  $sentenciab->execute();
  $books = $sentenciab->fetchAll(PDO::FETCH_OBJ);

  $sentenciaa = $db->prepare( "SELECT * FROM autor");
  $sentenciaa->execute();
  $autor = $sentenciaa->fetchAll(PDO::FETCH_OBJ);
  

?>  
    <div class="container">
        
    <!-- FILA QUE CONTIENE EL MENU HEADER--> 
        <div class="row">
          <div class="col">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse cum id quia, unde necessitatibus rem distinctio doloremque dolores illum perspiciatis, expedita laborum maiores aliquid quaerat maxime! Ullam harum officiis sint ducimus nulla aut veniam cumque provident aperiam molestiae repellat officia, impedit sit beatae. Molestias error consequatur ratione iure reiciendis mollitia?</p>
          </div>
          <!-- FIN HEADER--> 
        
         <!-- FILA QUE CONTIENE EL MENU GENERAL --> 
          <div class="row">
          <div class="col">
            <p>
                <!-- MENU-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><img src="img/book.png" class="icon-nav"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">List</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Categories</a></li>
                              <li><a class="dropdown-item" href="#">Books</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                          </li>
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
                  <!-- FIN MENU -->
            </p>
          </div>
        </div>
            <!-- FIN FILA MENU-->

            <!-- COMIENZA FILA DE CATEGORIAS Y LISTADO GENERAL CON DOS COLUMNAS-->
        <div class="row">

            <!-- COLUMNA CATEGORIAS 25% DE LA PANTALLA APROX-->
            <?php
            echo'
          <div class="col-3">


            <div class="accordion" id="accordionExample">
';
foreach ($autor as $au){
      echo'          <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$au->id_autor.'" aria-expanded="false" aria-controls="collapseOne">
                      '.$au->name.'
                    </button>
                  </h2>
                  <div id="collapse'.$au->id_autor.'" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      
                        <div class="btn-group me-1" role="group" aria-label="First group">
                            <button type="button" class="btn btn-outline-secondary">Edit</button>
                            <button type="button" class="btn btn-outline-secondary">Delete</button>
                        </div>
                    </div>
                  </div>
                </div>';
}
     echo'         </div>
          </div>

          <!-- FIN COLUMNA CATEGORIAS -->

          ';
          ?>
          <!-- COLUMNA LISTADO GENERAL 75% DE LA PANTALLA APROX-->
          <div class="col-9">
            <p>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Country</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 

                    foreach ($books as $book) {
                    echo'
                      <tr>
                        <th scope="row">'.$book->id_book.'</th>
                        <td>'.$book->b_title.'</td>
                        <td>'.$book->b_autor.'</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Elegir</option>';
                            foreach ($autor as $aut){
                              echo'<option value='.$aut->id_autor.'>'.$aut->name.'</option>';
                             }
                             echo'
                            </select>
                         
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-secondary btn-sm"><img src="img/find.png" class="icon"></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm"><img src="img/edit.png" class="icon"></button>
                                <button type="button" class="btn btn-outline-secondary btn-sm"><img src="img/delete.png" class="icon"></button>
                              </div>
                        </td>
                      </tr>
                      <tr>';
                    }
                      ?>
                        
                    </tbody>
                  </table>
            </p>
          </div>
          <!-- FIN COLUMNA LISTADO GENERAL-->
        </div>
        <!-- FIN FILA DE DATOS-->
      </div>
      <!-- FIN CONTAINER-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Trivellini</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Esercitazione PHP</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="http://www.divini5g.com/trivellini">Home</a></li>
        <li><a href="http://www.divini5g.com/trivellini/read.php">Lettura</a></li>
        <li class="active"><a href="http://www.divini5g.com/trivellini/write.php">Inserimento</a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <h1>Inserisci dati nella tabella</h1>
<form action ="add.php" method="post">

Nome: <input type="text" name="nome"><br />
Cognome: <input type="text" name="cognome"><br />
Mail: <input type="text" name="mail"><br />

<input type="submit" name="invio" value="Registra" />
<input type="reset" name="cancella" value="Annulla" />
      
      
          
       
    </div>
    </div>
  </div>

<footer class="container-fluid">
  <p>Pagina di Sophia Trivellini</p>
</footer>

</body>
</html>

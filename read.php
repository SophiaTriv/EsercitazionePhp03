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
	table, th, td {
    border: 3px solid black;
    border-collapse: collapse;

}
th, td {
    padding: 10px;
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
        <li class="active"><a href="http://www.divini5g.com/trivellini/read.php">Lettura</a></li>
        <li><a href="http://www.divini5g.com/trivellini/write.php">Inserimento</a></li>
      </ul><br>
      
    </div>
<h1> Tabella dei dati presenti nel Database</h1>
    <div class="col-sm-9">
      <table>
  <tr>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Mail</th>
	<th></th>
	<th></th>
  </tr>
<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "trivellini";

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$sqlquery = "SELECT * FROM $tab_nome";
$result = mysql_query($sqlquery);
$number = mysql_num_rows($result);
while ($row= mysql_fetch_array($result))
{
	$cod = $row['cod'];
	echo "<tr>";
	echo "<td>";
	echo $row['nome'];
	echo "</td>";
	echo "<td>";
	echo $row['cognome'];
	echo "</td>";
	echo "<td>";
	echo $row['mail'] ;
	echo "</td>";
	echo "<td>";
	echo "<a href='/trivellini/mod2.php?utente=$cod' class='btn btn-info' role='button'>Modifica</a> ";
	echo "</td>" ;
	echo "<td>";
	echo "<a href='/trivellini/delete.php?utente=$cod' class='btn btn-info' role='button'>Elimina</a> ";
	echo "</td>" ;
	echo "</tr>";
}
mysql_close();
?>
</table>
</div>
  </div>
</div>

<footer class="container-fluid">
  <p>Pagina di Sophia Trivellini</p>
</footer>

</body>
</html>

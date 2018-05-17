<?php  
      $jsoname = file_get_contents("https://swapi.co/api/people/?format=json");
      $json_data = json_decode($jsoname,true);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>APISys Tecnologia</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body data-toggle="modal">

  <audio autoplay loop="true" id="musau">
    <source src="audio/starwarstheme.mp3" type="audio/mpeg">
  </audio>
          <div id="jumbtext" class="jumbotron text-center">
              <h1>Star Wars</h1> 
          </div>

<form action="">
		<table class="table">
  <thead class="table-dark">
    <tr>
      <th></th>
      <th scope="col">Personagens</th>
      <th scope="col">Peso</th>
      <th scope="col">Cor do cabelo</th>
      <th scope="col">Cor dos olhos</th>
      <th scope="col">Aniversario</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <?php for ($i=0; $i<10; $i++) { ?>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $json_data['results'][$i]['name']; ?></td>
      <td><?php echo $json_data['results'][$i]['mass']."Kg"; ?></td>
      <td><?php echo $json_data['results'][$i]['hair_color']; ?></td>
      <td><?php echo $json_data['results'][$i]['eye_color'];?></td>
      <td><?php echo $json_data['results'][$i]['birth_year']; ?></td>
      <td><?php echo $json_data['results'][$i]['gender']; ?></td>
    </tr> 
  </tbody>
<?php } ?>
    </table>
</form>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <h2 id="boav">Welcome soldier</h2>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      </div>
      <div class="modal-body">
          Ola soldado, seja bem vindo a nossa aplicacao... fique avontade
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Obrigado(a)!!</button>
      </div>
    </div>
  </div>
</div>

  <footer style="background-color: black;">

    <!--Footer Links-->
    <br>
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-uppercase">Contatos</h5>
                <ul>
                  <li><img src="Icones/mail.svg">  hallyssonrdev@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright py-3 text-center" style="color: white">
        © 2018 Copyright © : Hallysson Alexandre
    </div>
    <!--/.Copyright-->

</footer>    

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<?php
error_reporting(0);
require('components.php');
require('getdata.php');
if(empty($row["img"])) $row["img"]="avatar/default.jpg";

?>
<html lang="en"><head>

  <meta charset="UTF-8">

  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
<title>AniMe</title>
  <link rel="stylesheet" href="../assets/css/image.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/navbar.css" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&amp;display=swap" rel="stylesheet"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<body translate="no">
<nav  style="width: 100%;" class="navbar-transparent" role="navigation">
  <ul>
    <li><a href="../index.php"><i class="fa fa-home"></i> INICIO</a></li>
    <li><a href="#2"></a></li>
    <li><a href="#3"></a></li>
    <li><a href="#4"></a></li>
    <li><a href="../about.php"><i class="fa fa-question-circle"></i>  Acerca De</a></li>
  </ul>
</nav>
<div class="container">
  <form action="action.php" method="POST" enctype="multipart/form-data">
    <p>PERSONAJES DE ANIME</p>

    <div class="wrapper">
    <a  style="background-image: url('<?php echo $row["img"];?>');" id="img-result">Upload Image</a>
    <input type="file" name="avatar" id="img" hidden>
  </div>
  <div class="upload-result">
    <a type="button" class="hide-button">Close</a>
    <pre class="upload-result__content">  </pre>
  </div>
<br><br><br><br><br><br>
        <?= new Inputs('Nombre', $row["Nombre"] , 'required')?>
        <?= new Inputs('Apellido', $row["Apellido"])?>
        <?= new Inputs('Cedula', $row["Cedula"], 'required')?>
        <br>
        <?= new Inputs('Nacionalidad', $row["Nacionalidad"])?>
        <?= new Inputs('Raza', $row["Raza"])?>
        <?= new Inputs('Ocupacion', $row["Ocupacion"])?>
        <br>
        <?= new Inputs('Poder', $row["Poder"])?>
        <?= new Inputs('Serie', $row["Serie"])?>
        <input type="date" name="Fecha_Nacimiento" value="<?php echo $row["Fecha_Nacimiento"]?>" >  
        
        <?= new Inputs('id', $row["id"], 'hidden' )?> 
        <br>
        <textarea name="Biografia"  required placeholder="Biografía"><?php echo $row["Biografía"]?></textarea> 
        <br>  
        
        <div class="radio-toolbar" id="radios">
        <input type="radio" id="FemeninoRadio" name="Sexo" value="Femenino"  <?php echo ($row['Sexo'] == "Femenino") ? 'checked="checked"' : ''; ?>>
        <label  for="FemeninoRadio" id="Femenino"><i class="fa fa-female"></i></label>
        <input type="radio" id="MasculinoRadio" name="Sexo" value="Masculino"  <?php echo ($row['Sexo'] == "Masculino") ? 'checked="checked"' : ''; ?>>
        <label for="MasculinoRadio"  id="Masculino"><i class="fa fa-male"></i></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" id="VivoRadio" name="Estado" value="Vivo" <?php echo ($row['Estado'] == "Vivo") ? 'checked="checked"' : ''; ?>>
        <label  for="VivoRadio"  id="Vivo"><i class="fa fa-heartbeat"></i></label>
        <input type="radio" id="MuertoRadio" name="Estado" value="Muerto" <?php echo ($row['Estado'] == "Muerto") ? 'checked="checked"' : ''; ?>>
        <label  for="MuertoRadio"  id="Muerto"><i class="fas fa-skull-crossbones"></i></label>
    </div>  
    


<br><br><br>
    <input type="submit" value="Enviar"><br>
  </form>
<script></script>
  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('.radio-toolbar').on('click', '#Femenino', function(){      
    $("#FemeninoRadio").attr('checked', 'checked');
    $("#MasculinoRadio").removeAttr('checked');
  })
  $('.radio-toolbar').on('click', '#Masculino', function(){      
    $("#MasculinoRadio").attr('checked', 'checked');
    $("#FemeninoRadio").removeAttr('checked');
  })
  $('.radio-toolbar').on('click', '#Vivo', function(){      
    $("#VivoRadio").attr('checked', 'checked');
    $("#MuertoRadio").removeAttr('checked');
  })
  $('.radio-toolbar').on('click', '#Muerto', function(){      
    $("#MuertoRadio").attr('checked', 'checked');
    $("#VivoRadio").removeAttr('checked');
  })
})
</script>

<script src="../assets/js/image.js"></script>
 
</body></html>
<?php 
error_reporting(0);
include('php/getalldata.php');
?>

<html lang="en"><head>

  <meta charset="UTF-8">
  
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>AniMe</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/card.css" type="text/css">
  <link rel="stylesheet" href="assets/css/navbar.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  
</head>

<body translate="no">
  <nav class="navbar-transparent" role="navigation">
  <ul>
    <li><a href="php/form.php"><i class="fa fa-plus"></i> Personaje</a></li>
    <li><a href="#2"></a></li>
    <li><a href="#3"></a></li>
    <li><a href="#4"></a></li>
    <li><a href="about.php"><i class="fa fa-question-circle"></i>  Acerca De</a></li>
  </ul>
</nav>

<?php
 foreach($dir as $row){ 
    echo 
    '<br>
    <div class="card" id="card'.$row["id"].'" data-state="#about'.$row["id"] .'">
  <div class="card-header">
    <div class="card-cover" style="background-image: url(php/'.$row['img'].')"></div>
    <img class="card-avatar" src="php/'.$row['img'].'" alt="avatar">
    <h1 class="card-fullname">'.$row['Nombre'].'  '.$row['Apellido'].'</h1>
    <h2 class="card-jobtitle">'.$row['Serie'].'</h2>
  </div>
  <div class="card-main">
    <div class="card-section'.$row["id"].' is-active" name="card-section'.$row["id"].'" id="about'.$row["id"].'">
      <div class="card-content">
        <div class="card-subtitle">BIOGRAFIA</div>
        <p class="card-desc">'.$row['Biografía'].'
        </p>
      </div>

      
      <div class="card-social">

       <a href="php/form.php?id='.$row["id"].'"><i class="fa fa-user-edit"></i>
            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"></path></svg></a>
        <a href="php/delete.php?id='.$row["id"].'"><i class="fa fa-trash"></i>
            <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0"></path>
            <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0"></path>
            <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0"></path></svg></a>
     </div>
    </div>
    <div class="card-section'.$row["id"].'" name="card-section'.$row["id"].'" style="width:300px;" id="experience'.$row["id"].'">
      <div class="card-content">
        <div class="card-subtitle">Información General</div>
        <div class="card-timeline">
        <div class="card-item" data-year="">
            <div class="card-item-title">Fecha de <span>Nacimiento</span></div>
            <div class="card-item-desc">'.$row["Fecha_Nacimiento"].'</div>
          </div>
          <div class="card-item" data-year="">
            <div class="card-item-title">Poder<span></span></div>
            <div class="card-item-desc">'.$row["Poder"].'</div>
          </div>
          
          <div class="card-item" data-year="">
            <div class="card-item-title">Ocupación<span></span></div>
            <div class="card-item-desc">'.$row["Ocupacion"].'</div>
          </div>
          <div class="card-item" data-year="">
            <div class="card-item-title">Sexo<span></span></div>
            <div class="card-item-desc">'.$row["Sexo"].'</div>
          </div>
          <div class="card-item" data-year="">
          <div class="card-item-title">Raza<span></span></div>
          <div class="card-item-desc">'.$row["Raza"] .'</div>
        </div>
        </div>
      </div>
    </div>
    <div class="card-section'.$row["id"].'" name="card-section'.$row["id"].'" style="width:300px;" id="contact'.$row["id"].'">
      <div class="card-content">
        <div class="card-subtitle">INFORMACIÓN GENERAL</div>
        <div class="card-contact-wrapper">
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
              <circle cx="12" cy="10" r="3"></circle></svg>
              '.$row["Estado"] .'
          </div>
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></i>
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path></svg> '.$row["Nacionalidad"] .'</div>
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <path d="M22 6l-10 7L2 6"></path></svg>
              '.$row["Cedula"] .'
          </div>
          <button class="contact-me">'.$row["Serie"] .'</button>
        </div>
      </div>
    </div>
    <div class="card-buttons" id="card-buttons'.$row["id"].'">
      <button data-section="#about'.$row["id"].'" class="is-active">BIOGRAFIA</button>
      <button data-section="#experience'.$row["id"].'">GENERAL</button>
      <button data-section="#contact'.$row["id"].'">CONTACTO</button>
    </div>
  </div></div>
  
  <script>
  const buttons'.$row["id"].' = document.querySelectorAll("#card-buttons'.$row["id"].' button");
  const sections'.$row["id"].' = document.querySelectorAll(".card-section'.$row["id"].'");
  const card'.$row["id"].' = document.querySelector("#card'.$row["id"] .'");

const handleButtonClick'.$row["id"].' = e => {
  const targetSection'.$row["id"].' = e.target.getAttribute("data-section");
  const section'.$row["id"].' = document.querySelector(targetSection'.$row["id"].');
  targetSection'.$row["id"].' !== "#about'.$row["id"].'" ?  card'.$row["id"].'.classList.add("is-active") : card'.$row["id"].'.classList.remove("is-active");
  card'.$row["id"].'.setAttribute("data-state", targetSection'.$row["id"].');
  sections'.$row["id"].'.forEach(a => a.classList.remove("is-active"));
  buttons'.$row["id"].'.forEach(b => b.classList.remove("is-active"));
  e.target.classList.add("is-active");
  section'.$row["id"].'.classList.add("is-active");
  
};

buttons'.$row["id"].'.forEach(btn => {
  btn.addEventListener("click", handleButtonClick'.$row["id"].');
});
  </script>

  <style>
	.card-section'. $row["id"] . ' {
		display: none;
	  }
	  .card-section'. $row["id"] . '.is-active {
		display: block;
		-webkit-animation: fadeIn 0.6s both;
				animation: fadeIn 0.6s both;
	  }
	  
	</style>
  ';
};
?>
  
   
</body></html>
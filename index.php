<?php if(isset($_POST["submit"]))
    $nombre = filtrado($_POST["nombre"]);
    $email = filtrado($_POST["email"]);
    // Utilizamos implode para pasar el array a string
    $select = <select name="" id=""></select>(implode(", ", $_POST["checked"]));
  ?>
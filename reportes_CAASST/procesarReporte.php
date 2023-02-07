<?php

if(isset($_POST["enviar"])) {
  $causa = $_POST["causa"];
  $descripcion = $_POST["descripcion"];
  $telefono = $_POST["telefonoUs"];
  $nombre = $_POST["nombreUS"];
  $ubicacion = $_POST["ubicacion"];

  // Validación de datos (opcional)
  if(empty($causa) || empty($descripcion) || empty($telefono) || empty($nombre)) {
    echo "Todos los campos son obligatorios";
    exit;
  }

  // Procesamiento de datos (por ejemplo, guardar en una base de datos)

  // Mensaje de éxito
  echo "Reporte enviado exitosamente";
}

?>

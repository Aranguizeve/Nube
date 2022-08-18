<?php
session_start();
session_destroy();
echo
'<script>
  alert("Adios");
  window.location = "login.php";
  </script>
  ';
?>
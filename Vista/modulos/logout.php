<?php
session_start();
session_destroy();
header('Location: /sys/'); // Redirigir a la raíz del sitio o a donde desees
exit();
?>
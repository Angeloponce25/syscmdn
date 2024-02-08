function cerrarSesion() {
    // Eliminar la cookie de sesión (si está configurada)
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    
    // Redirigir a la página de inicio de sesión o a la página principal
    window.location.href = "/syscmdn/";
    /*window.location.href = "/sys/";*/
}
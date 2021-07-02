<?php
    session_start();
    session_unset();
    echo "
    <script>
        alert('Logout Berhasil ...');
        window.location = 'index.php?file=login'
    </script>
    ";
?>
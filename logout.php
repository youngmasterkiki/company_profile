<?php 
session_start();

    session_destroy();
    unset($_COOKIE['user']);
    echo "<body>
                <script>
                    alert('Anda berhasil logout ! ')
                    window.location.replace('index.php')
                </script>
            </body>";

?>
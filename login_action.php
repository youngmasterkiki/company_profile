<?php
    session_start();
    if (empty($_COOKIE['user'])) {
        echo "<body>
            <script>
                alert('Akun tidak terdaftar ! mohon buat akun terlebih dahulu')
                window.location.replace('login.php')
            </script>
        </body>";
    }

    $dec = json_decode($_COOKIE['user'], true);
    $get_email = $_POST['email'];
    $get_password = $_POST['password'];

    function set_session() {
        global $get_email, $dec;
        session_start();
        $_SESSION['email'] = $get_email;
        $_SESSION['another'] = json_encode($dec);
        setcookie('user', json_encode($dec));
    }

    if (isset($_POST['login'])) {
        if (in_array($get_email, $dec) && in_array($get_password, $dec)) {
            if(password_verify($get_password, $dec['password'])) {
                set_session();
                echo "<body>
                    <script>
                        window.location.replace('database.php')
                    </script>
                </body>";
            } else {
                echo "<body>
                    <script>
                        alert('username atau password salah ! ')
                        window.location.replace('index.php')
                    </script>
                </body>";
            }
        } else {
            echo "<body>
                <script>
                    alert('username atau password salah ! ')
                    window.location.replace('index.php')
                </script>
            </body>";
        }
    }
    
?>
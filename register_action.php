<?php 
session_start();
    $tipe_vendor        = $_POST["tipe_vendor"];
    $kewarganegaraan    = !empty($_POST["kewarganegaraan"])?$_POST["kewarganegaraan"]: "None";
    $tipe_instansi      = !empty($_POST["tipe_instansi"])?$_POST["tipe_instansi"]: "None";
    $profesi            = !empty($_POST["profesi"])?$_POST["profesi"]: "None";
    $email              = $_POST["email"];
    $phone_number       = $_POST["phone_number"];
    $tax_id             = $_POST["tax_id"];
    $password           = $_POST["pass"];
    $pass2              = $_POST["pass2"];
    $tax_id_doc         = $_POST["file_tax_id"];


    function cookies(){
        global$tipe_vendor,$kewarganegaraan,$tipe_instansi,$profesi,$email,$phone_number,$tax_id,$password,$pass2,$tax_id_doc;     
        $array =[
            'tipe_vendor' => $tipe_vendor,
            'kewarganegaraan' => $kewarganegaraan,
            'tipe_instansi' => $tipe_instansi,
            'profesi' => $profesi,
            'email' => $email,
            'phone_number' => $phone_number,
            'tax_id' => $tax_id,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'password2' => $pass2,
            'tax_id_doc' => $tax_id_doc
        ];
        setcookie('user', json_encode($array));
    }

    if ( $password !== $pass2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                window.location.replace('registration.php');
              </script>";
    }

    if (isset($_POST['register'])){
        if(!empty($tipe_vendor)&&!empty($kewarganegaraan)&&!empty($tipe_instansi)&&!empty($profesi)&&!empty($email)&&!empty($phone_number)&&!empty($tax_id)&&!empty($password)&&!empty($pass2)&&!empty($tax_id_doc)) {
        cookies();
        echo "<body>
                <script>
                    window.location.replace('index.php')
                </script>
            </body>";
        die();
    
    }else{
        echo "<body>
            <script>
                window.location.replace('registration.php')
            </script>
        </body>";
    }

}

?>
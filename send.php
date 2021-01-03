<?php
    if (isset($_POST)) {
        $name          = $_POST['name'];
        $email         = $_POST['email'];
        $message       = $_POST['message'];
        $no_wa         = $_POST['noWa'];
        header("Location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPesan:%20$message");
        die();
    } else {
        echo "
            <script>
                window.location=history.go(-1);
            </script>
        ";
    
    }
?>
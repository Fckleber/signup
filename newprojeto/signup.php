<?php
  include("conexao.php");
  if(isset($_POST['submit'])){
    $name = mysli_real_escape_string($conn, $_POST['user']);
    $email = mysli_real_escape_string($conn, $_POST['email']);
    $password = mysli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysli_real_escape_string($conn, $_POST['cpass']);

    $sql="select * from signup where name='$name'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="select * from signup where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 & $count_email==0){
        if($password==$cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup(name, email, password) VALUES('$name', '$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: bem-vindo.php");
            }
        }
        else{
            echo '<script>
                alert("senha não confere")
                window.location.href = "index.php";
                </script>';
        }
    }
    else{
        if($count_user>0){
            echo '<script>
                window.location.href="index.php";
                alert("Nome já existe!!");
            </sccript>';
        }
        if($count_email>0){
            echo '<script>
                window.location.href="index.php";
                alert("Email já existe!!");
            </sccript>';
        }
    }
  }
?>

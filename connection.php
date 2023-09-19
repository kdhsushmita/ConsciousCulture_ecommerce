<?php
class loginlogout{
    public static function conect()
    {
        try{
            $con=new PDO('mysql:host=localhost;dbname=loginlogoutsystem','root','');
            return $con;
        }catch(PDOException $erro1){
            echo $erro1->getMessage();
        }catch(Exception $erro2){
            echo $erro2->getMessage();
        }
        }

    public static function inserting($email,$password)
    {
        $insert=loginlogout::conect()->prepare("INSERT INTO users(email,password) VALUES(:e,:p)");
        $insert->bindValue(':e',$email);
        $insert->bindValue(':p',$password);
        $insert->execute();
    }    
    public static function login($email,$password)
    {
        $login=loginlogout::conect()->prepare("SELECT id FROM users WHERE email=:e and password=:p");
        $login->bindValue(':e',$email);
        $login->bindValue(':p',$password);
        $login->execute();
        if($login->rowCount()>0){
            $fetch=$login->fetch(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['id']=$fetch['id'];
            echo "
            <script> alert('Successfully Logged in');
            </script>
            "; 
            header('location:indexlogin.php');
        }
        else{
            $fetch=array();
            echo "
            <script> alert('User not found...!');
            </script>
            "; 
        }
        return $fetch;
    }    
}
?>
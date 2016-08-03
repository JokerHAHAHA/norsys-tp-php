<?php
use \Poo\Autoloader;
use \Poo\Model\ConnectDB;
use \Poo\Manager\UserManager;
?>

<!DOCTYPE html>
<html lang="fr">

<!-- head -->
<?php include './head.php'; ?>


<body class="user">

    
    <!-- add user button -->
    <div class="row">
        <div class="btn-add-user">
            <h6>UTILISATEUR</h6>
            <a class="btn-floating btn-large waves-effect waves-light white txtOrange" href="./addUser.php">
                <i class="material-icons">add</i>
            </a>
        </div>
    </div>

</body>
</html>
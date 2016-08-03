<?php
use \Poo\Autoloader;
use \Poo\HTML\Templates;
use \Poo\Model\ConnectDB;
use \Poo\Manager\UserManager;

require '../src/class/Autoloader.php';
Autoloader::require();
?>

<!DOCTYPE html>
<html lang="fr">

<!-- head -->
<?php include './head.php'; ?>


<body class="user">


<?php echo Templates::loadNavbar(); ?>

    <!-- add user button -->
    <div class="row">
        <div class="btn-add-user">
            <h6>UTILISATEUR</h6>
            <a class="btn-floating btn-large waves-effect waves-light white txtOrange" href="./addUser.php">
                <i class="material-icons">add</i>
            </a>
        </div>
    </div>

    <!-- get all users -->
    <?php $datas = UserManager::findAll();?>

    <ul class="collection user-list">
        <?php

        foreach ($datas as $user) {

            echo '<li class="collection-item"><h5>' . $user['first_name'] . 
            '</h5><h5>' . $user['name'] . 
            '</h5><h5 class="secondary-content">' . $user['email'] . '</h5></li>';

        }

        ?>
    </ul>

</body>
</html>
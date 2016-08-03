<?php

use \Poo\Autoloader;
use \Poo\HTML\Templates;
use \Poo\Model\ConnectDB;
// use \Poo\Model\User;
use \Poo\Manager\UserManager;

require '../src/Autoloader.php';
Autoloader::require();
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include './head.php'; ?>
<body>
    <?php echo Templates::loadNavbar(); ?>

</body>
</html>

<?php 
$user = UserManager::findOneById(1);

var_dump($user);
?>







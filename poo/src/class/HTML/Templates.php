<?php

namespace Poo\HTML;


/**
* Templates
* 
* to create html templates
*/
class Templates
{

    public static function loadNavbar()
    {



         return '<div class="navbar-fixed">
                    <nav>
                        <ul class="nav-bar">
                            <li>KANBAN by Jok</li>
                            <a href="./index.php"><li class="hover">BOARD</li></a>
                            <a href="./user.php"><li class="hover">UTILISATEURS</li></a>
                        </ul>
                    </nav>
                </div>';


    }

}
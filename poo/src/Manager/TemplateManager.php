<?php

namespace Poo\HTML;


/**
* Templates
* 
* to include templates into the layout.php
*/
class TemplateManager
{

    /**
     * Load NavBar
     * 
     * @return html navbar
     */
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
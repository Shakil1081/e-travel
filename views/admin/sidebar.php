
<?php

$root = "http://localhost/e-travel";

?>
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">

        <ul class="nav side-menu">
            <li><a><i class="fa fa-building"></i> Hotels <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $root ?>/views/admin/hotels/create.php"> Add New </a>
                    </li>
                    <li><a href="<?php echo $root ?>/views/admin/hotels/list_view.php"> List View </a>
                    </li>
                    <li><a href="<?php echo $root ?>/views/admin/hotels/trash_view.php"> Trash View </a>
                    </li>
                </ul>
            </li>
            <li><a><i class="fa fa-comments"></i> Hotels Room <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $root ?>/views/admin/rooms/create.php"> Add New </a>
                    </li>
                    <li><a href="<?php echo $root ?>/views/admin/rooms/list_view.php"> List View </a>
                    </li>
                    <li><a href="<?php echo $root ?>/views/admin/rooms/trash_view.php"> Trash View </a>
                    </li>
                </ul>
            </li>
            <li><a href="<?php echo $root ?>/views/admin/orders/index.php"><i class="fa fa-comments"></i> Room Orders <span class="fa fa-chevron-down"></span></a>

            </li>

            <li><a><i class="fa fa-comments"></i> Admin users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $root ?>/views/admin/rooms/create.php"> Add New </a>
                    </li>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
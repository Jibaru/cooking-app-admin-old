<div id="main">
    <?php
        if (empty($group)) {
            require_once('./pages/' . $page . '.php');
        } else {
            require_once('./pages/' . $group . "/" . $page . '.php');
        }
    ?>
</div>
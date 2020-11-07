<?php
    $menu_items = [
        [
            "group" => "recipe",
            "pages" => [
                [
                    "path" => "create-recipe",
                    "name" => "Crear receta"
                ],
                [
                    "path" => "list-recipes",
                    "name" => "Listar recetas"
                ],
            ],
        ],
        [
            "group" => "user",
            "pages" => [
                [
                    "path" => "create-user",
                    "name" => "Crear usuario"
                ],
                [
                    "path" => "list-users",
                    "name" => "Listar usuarios"
                ],
            ],
        ],
    ];
?>

<div id="app-menu">
    <ul>
        <?php
            foreach($menu_items as $group_item) {
                foreach($group_item["pages"] as $page_item) {
                    echo "<li><a href=\"?group=". $group_item["group"] ."&page=" . $page_item["path"] ."\">".
                         "<span>" . $page_item["name"] . "</span>".    
                         "<i class=\"fas fa-angle-right\"></i>".
                         "</a></li>";
                }
            }
        ?>
        
    </ul>
</div>
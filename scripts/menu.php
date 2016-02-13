<?php
    $menu = [
        [
            "name" => "Home",
            "subcategories" => [
                [
                    "name" => "Home"
                ],
                [
                    "name" => "About us"
                ],
                [
                    "name" => "Articles"
                ],
                [
                    "name" => "Ellipse",
                ],
                [
                    "name" => "Contact"
                ]
            ],
        ],
        [
            "to" => "about",
            "name" => "About us"
        ],
        [
            "to" => "video",
            "name" => "Articles"
        ],
        [
            "to" => "ellipse",
            "name" => "Ellipse"
        ],
        [
            "to" => "footer",
            "name" => "Contact"
        ]
    ];

    $result = "";

    foreach ($menu as $item) {
        $to = '';

        if (array_key_exists('to', $item)) {
            $to = "to='{$item['to']}'";
        }

        $class = '';

        if (count($item['subcategories']) > 0) {
            $liClass = "class='nav-item dropdown'";
            $class = "class='nav-link dropdown-toggle' data-toggle='dropdown'";
        }

        $result .= "<li {$liClass}><a href='#' {$class} {$to}>{$item['name']}</a>";

        if (count($item['subcategories']) > 0) {
            $result .= "<ul class='dropdown-menu'>";
            foreach ($item['subcategories'] as $subcategory) {
                  $result .= "<li><a href='#' class='nav-link'>{$subcategory['name']}</a></li>";
            }
            $result .= "</ul>";
        }

        $result .= "</li>";
    }
?>

<ul class="nav navbar-nav left">
    <?= $result ?>
</ul>

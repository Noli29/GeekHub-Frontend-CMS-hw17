<?php
    $sliders = [
        [
            'title' => 'Lorem ipsum dolor',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor',
        ],
        [
            'title' => 'Lorem ipsum dolor',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor',
        ],
        [
            'title' => 'Lorem ipsum dolor',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor',
        ],
        [
            'title' => 'Lorem ipsum dolor3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor',
        ],
    ];

    $result = '';

    foreach ($sliders as $item) {
        $result .= "<div class='item'>";
            $result .= "<div class='info'>";
                $result .= "<h3>{$item['title']}</h3>";
                $result .= "<p>{$item['description']}</p>";
            $result .= "</div>";
        $result .= "</div>";
    }
?>

<?= $result ?>

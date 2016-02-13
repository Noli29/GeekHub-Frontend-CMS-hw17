<?php
    $features = [
        [
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit sed."',
            'title' => '<span>YODA,</span> JEDI ACADEMY',
            'image' => 'images/elipse.png'
        ],
        [
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit sed."',
            'title' => '<span>YODA,</span> JEDI ACADEMY',
            'image' => 'images/elipse.png'
        ],
    ];

    $result = '';

    foreach ($features as $feature) {
        $result .= '<div class="feature">';
            $result .= "<img alt='' src='{$feature['image']}' />";
            $result .= "<p class='italic'>{$feature['description']}</p>";
            $result .= "<p>{$feature['title']}</p>";
        $result .= '</div>';
    }
?>

<?= $result ?>

<?php
    $block_lorem = [
        [
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit sed."',
            'title' => '<span>YODA,</span> JEDI ACADEMY',
            'image' => 'images/elipse.png'
        ],
        [
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit sed."',
            'title' => '<span>MACE WINDU,</span> JEDI ACADEMY',
            'image' => 'images/elipse.png'
        ],
        [
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit sed."',
            'title' => '<span>OBI WAN,</span> JEDI ACADEMY',
            'image' => 'images/elipse.png'
        ],
        [
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit sed."',
            'title' => '<span>A. SKYWALKER,</span> JEDI ACADEMY',
            'image' => 'images/elipse.png'
        ],

    ];

    $result = '';

    foreach ($block_lorem as $lorem) {
        $result .= '<div class="block_lorem">';
            $result .= "<img alt='' src='{$lorem['image']}' />";
            $result .= "<p class='italic'>{$lorem['description']}</p>";
            $result .= "<p>{$lorem['title']}</p>";
        $result .= '</div>';
    }
?>

<?= $result ?>

<?php

namespace Controller;

class Author {
    private $bio;
    private $image;
    private $products;

    public function __construct($bio, $image, $products) {
        $this->bio = $bio;
        $this->image = $image;
        $this->products = $products;
    }

    public function display() {
        // Start displaying author details
        echo '<h1>Author Bio</h1>';
        echo '<p>' . $this->bio . '</p>';
        echo '<img src="' . $this->image . '" alt="Author Image" />';

        echo '<h2>Associated Products</h2>';
        echo '<ul>';
        foreach ($this->products as $product) {
            echo '<li>' . $product . '</li>';
        }
        echo '</ul>';
    }
} 

?>
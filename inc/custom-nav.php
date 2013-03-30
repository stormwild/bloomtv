<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

    public function __construct() {

    }
    
    public function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

}
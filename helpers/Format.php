<?php

class Format{
    public function formatDate($date){
        return date('F j, Y', strtotime($date));
    }

    public function excerpt($text, $limit){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text.".....";
        return $text;
    }
}
?>
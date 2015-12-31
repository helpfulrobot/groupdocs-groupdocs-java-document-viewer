<?php

class groupdocsJavaViewer
{
    
    public static function handle_shortcode($arguments, $url, $parser, $shortcode)
    {
        $width = 600 ;
        $height = 800;


        if (isset($arguments['width']) && !empty($arguments['width'])) {
            $width = strip_tags($arguments['width']);
        }

        if (isset($arguments['height']) && !empty($arguments['height'])) {
            $height = strip_tags($arguments['height']);
        }

        $url = strip_tags(trim($url));

        $grpJavaViewer = new groupdocsJavaViewer_Result($width, $height, $url);
        return $grpJavaViewer->forTemplate();
    }
}

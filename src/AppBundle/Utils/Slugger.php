<?php

namespace AppBundle\Utils;

class Slugger
{

    /**
     * Used to format string into a slug
     *
     * @param $string
     * @return mixed
     */
    public function slugify($string)
    {
        return preg_replace(
            '/[^a-z0-9]/','-',strtolower(trim(strip_tags($string)))
        );
    }
}

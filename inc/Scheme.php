<?php

class Scheme {
    private static $schemes = [
        "Muse",
        "Mist",
        "Pisces",
    ];

    private static $current;

    static function get() {
        if (!isset(self::$current)) {
            self::$current = get_option("next_theme_scheme", 2);
        }
        return self::$schemes[self::$current];
    }

    static function is($scheme) {
        if (array_search($scheme, self::$schemes) === self::get()) {
            return true;
        }
        return false;
    }

    static function form($name = "next_theme_scheme") {
        $form = "";
        $current = &self::$current;
        array_walk(self::$schemes, function ($scheme, $id) use (&$name, &$form, &$current) {
            $form .= "<label for=\"$scheme\"><input type=\"radio\" name=\"$name\" id=\"$scheme\" value=\"$id\"" .
                checked($id, $current, false) . ">$scheme</label>";
        });
        return $form;
    }
}

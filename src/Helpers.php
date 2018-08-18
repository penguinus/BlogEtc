<?php
namespace WebDevEtc\BlogEtc;

class Helpers
{
    const FLASH_MESSAGE = "webdevetc_flash";

    public static function flash_message($message)
    {
        \Session::flash(Helpers::FLASH_MESSAGE, $message);
    }

    public static function rss_html_tag()
    {


        return '<link rel="alternate" type="application/rss+xml"
  title="Atom RSS Feed"
  href="' . route("blogetc.feed") .'?type=atom" />

  <link rel="alternate" type="application/rss+xml"
  title="XML RSS Feed"
  href="' . route("blogetc.feed") .'?type=rss" />

  ';




    }

    public static function image_sizes()
    {
        return [

            'image_large' => [
                'w' => config("blogetc.image_sizes.image_large.w", 1000),
                'h' => config("blogetc.image_sizes.image_large.h", 1000),
                'name' => "Large",
                'enabled' => config("blogetc.image_sizes.image_large.enabled", true),
            ],

            'image_medium' => [
                'w' => config("blogetc.image_sizes.image_medium.w", 500),
                'h' => config("blogetc.image_sizes.image_medium.h", 500),
                'name' => "Medium",
                'enabled' => config("blogetc.image_sizes.image_medium.enabled", true),
            ],

            'image_thumbnail' => [
                'w' => config("blogetc.image_sizes.image_thumbnail.w", 150),
                'h' => config("blogetc.image_sizes.image_thumbnail.h", 150),
                'name' => "Thumbnail",
                'enabled' => config("blogetc.image_sizes.image_thumbnail.enabled", true),
            ]];



    }

}

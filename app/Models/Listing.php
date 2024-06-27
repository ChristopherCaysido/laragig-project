<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [[
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Fusce hendrerit
            vehicula accumsan. Aliquam erat volutpat. 
            Integer varius congue placerat. Integer 
            dictum sem non nisl pellentesque, 
            et vulputate sapien luctus. Pellentesque
            tortor nulla, tristique id efficitur fringilla,
            accumsan non nulla. Nulla dictum molestie varius.
            Pellentesque at efficitur nisl. Pellentesque quis 
            bibendum tellus. Aenean pellentesque nisl nec 
            malesuada convallis. Class aptent taciti sociosqu 
            ad litora torquent per conubia nostra, per inceptos 
            himenaeos. Duis fringilla porttitor tincidunt.
             Integer quis ante. '
        ],[
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Fusce hendrerit
            vehicula accumsan. Aliquam erat volutpat. 
            Integer varius congue placerat. Integer 
            dictum sem non nisl pellentesque, 
            et vulputate sapien luctus. Pellentesque
            tortor nulla, tristique id efficitur fringilla,
            accumsan non nulla. Nulla dictum molestie varius.
            Pellentesque at efficitur nisl. Pellentesque quis 
            bibendum tellus. Aenean pellentesque nisl nec 
            malesuada convallis. Class aptent taciti sociosqu 
            ad litora torquent per conubia nostra, per inceptos 
            himenaeos. Duis fringilla porttitor tincidunt.
             Integer quis ante. '
        ]];
        }
    public static function findOne($id){
        $listings = self::all();
        foreach ($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
    }

    
<?php

class ReviewModel extends BaseModel
{
    public function __construct()
    {
        $this->table = 'reviews';
    }

    public function avg_stars($name)
    {
        $query = "select * from reviews where product_name = '$name'";
        $review = $this->read($query);
        $count = 0;
        $star_count = 0;
        foreach ($review as $rev){
            $star_count ++;
            $count += $rev['stars'];
        }
        $avarage_count = round($count/$star_count, 1);
        return $avarage_count;
    }
}
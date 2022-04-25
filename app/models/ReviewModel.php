<?php

class ReviewModel extends BaseModel
{
    public function __construct()
    {
        $this->table = 'reviews';
    }

    public function avg_stars($id)
    {
        $query = "select stars from reviews where product_name = '$id'";
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

    public function find_comments($name)
    {
        $query = "select * from $this->table where product_name='$name'";
        $data = $this->read($query);
        return $data;
    }
}
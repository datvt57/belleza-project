<?php

namespace Model;

use Config\Database;

class postModel
{
    private $postInstance = null;

    function __construct()
    {
        if ($this->postInstance == null) {
            $this->postInstance = $this;
            return $this->postInstance;
        }

        return $this->postInstance;
    }

    function getPosts()
    {
        $data = null;
        $database = new Database();
        $conn = $database->connect();
        if ($conn == null) {
            return null;
        } else {
            $query = "select * from posts";
            $results = mysqli_query($conn, $query);
            $rows = mysqli_num_rows($results);
            if ($results == null || $rows ==  0) {
                return $data;
            } else {
                $data_results = mysqli_fetch_all($results);
                foreach ($data_results as $records) {
                    $data[] = [
                        'title' => $records[1],
                        'content' => $records[2],
                        'slug' => $records[3]
                    ];
                }
            }
            return $data;
        }
    }
}

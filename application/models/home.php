<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 22.03.16
 * Time: 19:18
 */

class HomeModel extends Model
{

    public function Index()
    {
//        $this->query('SELECT * FROM posts ORDER BY create_date DESC');
//        $rows=$this->resultSet();


        $variables = array(
            'setInIndexDotPhp' => "hi there"
        );

        return $variables;
    }
}
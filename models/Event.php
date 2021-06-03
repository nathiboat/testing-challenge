<?php

class Event
{

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function dateRange()
    {
        $start_date = $this->data["instances"][0]["datetime"];

        $final_Date = "";

        foreach ($this->data["instances"] as $date){

            if($date > $date){
                $final_Date = $date;
            }

        }

        return $start_date . " to " . $final_Date;
    }


    public function title()
    {
        return $this->data['title'];

    }


    public function venue()
    {
        $search_array = $this->data; //['instances'];

        $key = "venue";
        $venue = "";

        if (array_key_exists('venue', $search_array)) {
        
            $venue = isset($array[$key]) ? $array[$key] : null;
        }

        return $search_array;
    }
}

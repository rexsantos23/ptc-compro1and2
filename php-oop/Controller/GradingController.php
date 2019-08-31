<?php

/**
 * Grading Controller
 * A Class that handle students grade
 */
class GradingController
{

    /**
     * php magic method __construct()
     * its load all available functions / method inside it
     */
    public function __construct()
    {
    }

    /**
     * A function that will create/save students grade
     * @param $parametes
     * @return response
     */
    public function create($request)
    {
        //$paramets can be an array, object or request
        
        foreach ($request as $key => $value) {
            //the value of the $value are prelim, midterm and finals
            //to get the value inside of it we need to initialize another loop
            foreach ($value as $k => $v) {
                echo $v;
            }
        }
    }

    /**
     * A function that will update existing grade
     * @param $request
     * @return
     */
    public function update($request)
    {
    }


    public function get($params = null)
    {
    }
}


//multi-dimensional array
$grades = [
    'prelim' => [
        'attendance' => 10,
        'quizes' => 85,
        'exam' => 90
    ],
    'midterm' => [
        'attendance' => 10,
        'quizes' => 85,
        'exam' => 90
    ],
    'finals' => [
        'attendance' => 10,
        'quizes'=> 85,
        'exam' => 90
    ],
];

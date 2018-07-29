<?php
class Recipe //use studly caps.
{
    //properties
    public $title;
    public $ingredients = array();    
    public $instructions = array();
    public $yield; 
    public $tags = array();
    public $source = "Luke Logan";
    public $measurement = array(
        "tsp",
        "tbsp",
        "oz",
        "pound",
        "cup",
        "pint",
        "quart",
        "gallon"
    );



    //list methods
    public function addIngredient($item, $amount = null, $measure = null)
    {
        if($amount != null && !is_float($amount) && !is_int($amount)){ //check to see if formatting is good 
            exit("The amount must be a float:" . gettype($amount) . " $amount given"); //if it is in wrong format, show error message
        }
        // if($measure != null && !in_array ( $measure, $this->$measurement ) ) {
        //     exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        // }
        $this->ingredients[] = array(
            "item" => $item,
            "amount" => $amount,
            "measure" => $measure
        );
    }


    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
        return $this->tags;
    }


    public function setYield($yield)
    {
        $this->yield = $yield;
    }
    public function getYield()
    {
        return $this->yield;
    }
    public function setSource($source)
    {
        $this->source = ucwords($source);
    }
    public function getSource()
    {
        return $this->source;
    }


}


?>
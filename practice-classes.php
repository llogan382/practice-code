<?php

class Recipe
{
    //declare properties. Public, private, or protected. (these are the access properties)
    public $ingredients = array();
    public $source = "Luke Logan";
    public $title;
    private $measurement = array(
        "tsp",
        "cup",
        "tbsp",
        "oz",
        "cup",
        "pint",
        "qt",
        "gal"
    );


        //list methods
        public function displayRecipe()
        {   
        //methods need access to other objects within the Class
        //use $this the same way you use an object name outside of the class.
        //$this will access properties within the class. 
        return $this->source; 
        }

        //declare methods
    
        //it is a good idea to be consistent. If using getters,
        //use getters and setters for all methods. This will make it easier if adjustments are needed in the future. 

        public function getTitle()
        {
            return $this->title;
        }

        public function setTitle($title) //creates function (called a method when used in a class) "setTitle" 
        //and runs the function on the variable $title, set above (as an object)
        //a "setter" takes the info and formats it before setting the property
        {
            $this->title = ucwords($title);
        }

        public function getTitle() //now that the title was formatted above, we can return the info
        //with the "get" function. So, info comes in and is "set"; Info is returned with a "get" property. 
        {
            return $this->title;
        }

        public function addIngredient($item, $amount = null, $measure = null) //$amount and $measure are not set above; this is the first time
        //they are being used. $item is the only part of this function that is required, so 
        //$amount and $measure are set to NULL
        {
            if ($amount != null && !is_float($amount) && !=is_int($amount) ) {
                exit("The amount must be a decimal format"); //runs a check to see if the values are entered.
            }
            $this->ingredients[] = array(
                "item" => $item,
                'amount' => $amount,
                'measure' => $measure,
            )
        }

        public function addInstruction($string)
        {
            $this->instructions[] = $string; //add this isntruction to our array of instructions
        }
        public function getInstructions()
        {
            return $this->instructions;
        }

        public function addTag($tag) //creates a function
        {
            $this->tags = $tag; //takes the $tag ariable and stores it in the $tags property of this class. The exact same as setting the value 
            $this->tags[] = strtolower($tag); //takes $tag and runs strtolower; then, passes this value into the $tags property of this function.
            
        }
        public function getTags()
        {
            return $this->tags;
        }
    

} //this closes the class.

//everything below here is running the properties defined in the class above. 

//New object is instantiated and stored in variable
$recipe1 = new Recipe ();

//then at the bottom you could add:
$recipe1->addTag("Breakfast"); //and this tag would be added to the array. 


var_dump($recipe1); //this will show the elements 

//once you create an object, you can access its properties
//reference the object name, then the "->" sign. So, what do I want to access? $source with in the object $recipe1
$recipe1->source //notice 'source' does not start with a '$'. This whole line acts as one variable

$recipe1->source = "Grandma Logan"; //this sets the object in the class to a new value

$recipe1->setTitle("my first recipe"); //this will run the function "setTitle" on this string, now that the
//function is defined above. 

//a "setter" can format the data before it is stored in the property. A Getter can accept the info from a user
// getters and setters work toegether to access private properties. 

//after all of the info is setup, a different class can be created to display the data

//to use a static method on a class, use :: . So this class: 

class Render
{
    public static function displayRecipe($recipe);
}

//the class above is being called in the method below. 
//class::method($instance):
Render::displayRecipe($recipe1);

//magic methods start with __

// __construct() is called at the time an object is created (indicated by the word "NEW" before a class name. )

public function __construct($title=null)
{
    $this->setTitle($title);
}

//magic constants start with __

public function __toString()
{
    $output = "you are getting a" . __CLASS__ . "object"
}
// __DIR__ and __FILE__ are two other magic constants
// get_class_methods(__CLASS__);

?>
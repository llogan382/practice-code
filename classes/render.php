<?php
class Render
{

    public function __toString()
    {
        $output = "You are calling a " . __CLASS__ . "with the title \"";

     return $this->getTitle();   
    }

    public static function listShopping($ingredient_list)
    {
        return implode("\n", array_keys($ingredient_list));
    }

    public static function ListRecipes($titles)
    {
        asort($titles);
        return implode("\n", $titles);
    }

    public static function listIngredients($ingredients)
    {
        $output = "";
        foreach ( $ingredients as $ing) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n"; 
        }
        return $output;
    }


    public static function displayRecipe($recipe)
    {
       $output = "";
       $output .= $recipe->getTitle() . " by " . $recipe->getSource();
       $output .= "\n\n";
       $output .= implode(", ", $recipe->getTags() );
       $output .= "\n\n";

       //below will call another static method from within this class
       //then pass the recipe ingredients to the method
       $output .= self::listIngredients($recipe->getIngredients() );
        $output .= "\n";         
        $output .= implode("\n", $recipe->getInstructions() );
        $output .= "\n"; 
        $output .= $recipe->getYield();        
       return $output;
    }

}

?>
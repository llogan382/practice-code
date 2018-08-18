/*
The Random number generator creates a number between 1 and 6
and gives the player two attempts to guess the number. 
*/

//assumes the player did not guess correct.
var correctGuess = false;

// rounds the number down, and adds 1
var randomNumber = Math.floor(Math.random() * 6 ) +1;

//prompts user for a number (guess)
var guess = prompt("I am thinking of a number between 1 and 6. What is it?");
//checks if guess is true
if (parseInt(guess)=== randomNumber) {
    correctGuess = true;
//if guess is too low:
} else if ( parseInt(guess) < randomNumber) {
    var guessMore = prompt("try again. The number I am thinking of is more than " + guess);
    if (parseInt(guessMore) === randomNumber ) {
        correctGuess = true;
    }
//if guess is too high:
} else if ( parseInt(guess) > randomNumber ){
    var guessLess = prompt("Try again. The number I am thinking of is less than " + guess);
    if ( parseInt(guessLess) === randomNumber) {
        correctGuess = true;
    }
}
//if guess is correct: document.write.
if ( correctGuess ) {
    document.write('<p>You guessed the number!</p>');
} else {
    //if guess is still wrong:
    document.write('<p>Sorry. The number was ' + randomNumber + '.</p>');
}
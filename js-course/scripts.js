var randomNumber = Math.floor(Math.random() * 6 ) +1;
var guess = prompt("I am thinking of a number between 1 and 6. What is it?");
if (parseInt(guess)=== randomNumber) {
    document.write('<p>You guessed the right number!</p>');
} else {
    document.write('<p>sorry, you guessed wrong. The correct numbr is ' + randomNumber + '</p>');
}
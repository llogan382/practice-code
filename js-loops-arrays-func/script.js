var randomnumber = getrandomNumber(10);
var guess;
var guessCount = 0.
var correctGuess = false;



function getrandomNumber(upper) {
  return Math.floor( Math.random() * upper ) + 1;
}


do {
  guess = prompt("guess a number between 1 and 10")
  guessCount += 1;
 if (parseInt(guess) === randomnumber ) {
    correctGuess = true;
  }
} while ( ! correctGuess );


document.write('the correct number was ' + randomnumber + '.')
document.write('<p> It took the you ' + guessCount + ' number of times to guess right.</p> ');

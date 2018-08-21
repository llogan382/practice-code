var upper = 10000;
var randomnumber = getrandomNumber(upper);
var guess;
var attempts = 0.

function getrandomNumber(upper) {
  return Math.floor( Math.random() * upper ) + 1;
}


while ( guess !== randomnumber ) {
  guess = getrandomNumber(upper );
  attempts += 1;
}
document.write('the correct number was ' + randomnumber + '.')
document.write(' It took the computer ' + attempts + ' number of times to guess right. ');

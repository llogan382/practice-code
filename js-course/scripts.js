var correct = 0;

/*
Ask at least five questions
Keep track of the number of questions the user answered correctly
Provide a final message after the quiz letting the user know the number of questions he or she got right.
Rank the player. If the player answered all five correctly, give that player the gold crown: 3-4 is a silver crown; 1-2 correct answers is a bronze crown and 0 correct is no crown at all.
*/
var answer1 = prompt("What vegetable did mcdonalds try to make 'bubble gum' flavored?");
if ( answer1.toUpperCase() === 'BROCCOLI' ) {
    correct += 1;
}
var answer2 = prompt("Next question: What is the only letter not found in the name of a US State?");
if ( answer2.toUpperCase() === 'Q' ) {
    correct += 1;
}
var answer3 = prompt("Next question: What is a cow-bison hybrid called?");
if ( answer3 === answer3.toUpperCase() === 'BEEFALO' ) {
    correct += 1;
}
var answer4 = prompt("Next question: What vegetable were Europeans afraid to eat when it was introduced?");
if ( answer4.toUpperCase() === 'TOMATO' ) {
    correct += 1;
}
var answer5 = prompt("Next question: What body parts never stop growing? (hint, there are two!");
if ( answer5.toUpperCase() === "NOSE" || answer5.toUpperCase() == "EARS" )  {
    correct += 1;
}

if ( correct === 5 ) {
    document.write("<p>You answered all 5 questions correct. Gold crown! You know a lot of random stuff!</p>")
} else if ( correct === 3 || correct === 4 ) {
    document.write("<p>You missed a few, Silver crown, but you know a lot of random stuff!</p>")
} else if ( correct === 1 || correct === 2 ) {
    document.write("<p>You missed a several, bronze crown. </p>")
} else if ( correct === 0 ) {
    document.write("<p>You missed all of the quesitons, and you stink at guessing :( </p>")
}
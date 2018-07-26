var message = 'once upon a time there was a '
var noun = prompt('enter a noun');
message +=  noun;
var verb = prompt('enter a verb');
message +=' that would love to ';
message += verb;
var adj = prompt('enter an adjective');
message +=' and it was the most ';
message += adj + ' ' + noun;
var loc = prompt('enter a location');
message += ' in the land of ' + loc;
document.write(message);

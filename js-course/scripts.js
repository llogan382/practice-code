// document represents the current page that you are on. You can use JS to write info onto
//the current page you are on. 
var passphrase = "Open Sesame";
console.log(passphrase.length);
console.log(passphrase.toLowerCase());//to lower case returns a value.

//shout app
var string_to_shout =  prompt("What would you like to shout?");
var string_to_shout = string_to_shout.toUpperCase();
document.write('<h6>'+ string_to_shout + '!!!!</h6>');
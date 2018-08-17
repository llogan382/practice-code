// document represents the current page that you are on. You can use JS to write info onto
//the current page you are on. 
var secondsPerMin = 60;
var minutesPerHr = 60;
var hoursPerDay = 24;
var daysPerWeek = 7;
var weeksPerYear = 52;

var secondsPerDay = secondsPerMin * minutesPerHr * hoursPerDay;
document.write('There are ' + secondsPerDay + ' seconds in a day.')

var yearsAlive = prompt("how old are you?");

var minutesPerYear = minutesPerHr * hoursPerDay * daysPerWeek * weeksPerYear;
var minutesAlive = yearsAlive * minutesPerYear;
document.write('<p>You have been alive for ' + minutesAlive + ' minutes. WOW that is long!</p>')

function getRandomNumber( upper, lower ) {
    if( isNaN(upper) || isNaN(lower)){
        throw new Error("Please enter a number");
    }
    return  Math.floor( Math.random() * (upper - lower + 1)) + lower;
    
}


console.log( getRandomNumber( 16, 5));
console.log( getRandomNumber( 16, 'five'));


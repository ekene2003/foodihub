function log(anythingISay){
    return console.log(anythingISay)
}

// Assignment  class
// 1. Take 3 arguments and add them all up 
function add3nums(num1, num2, num3){
    log(num1 + num2 + num3)
}
add3nums(12,10,17)

// 2. Take 3 arguments, adds the first 2 and subtract the last
function addAndsubs(num1, num2, num3){
    log(num1+num2-num3)
}
addAndsubs(12,10,17)

// 3. Divides the 1st number by the last number (take 0 arrays)
function num(num1, num2){
    log(num1/num3)
}
num(12,10)


// 4. Take 3 arguments, subtract the first and last and adds the 2nd to the swimResult
function subAdd(num1, num2, num3){
    log(num1-num3+num2)
}
subAdd(12,10,17)

// Function multiply 3 numbers (number, num2){
   // Let total = num * num2;
   // Return total;
// }



let churchBoy = ["BabyBoy", "Angela", "Idris", "Demola", "Junior", "Giveon", "Henry", "Johnny", "Moriah", "Sam"];
log(churchBoy);
log(churchBoy.length);

let twoGuys = churchBoy.slice(7, 9);
log(twoGuys)

churchBoy.unshift("muyiwa");
log(churchBoy)

churchBoy.pop();
log(churchBoy);

churchBoy.push("leanring");
log(churchBoy);

churchBoy.shift();
log(churchBoy);

churchBoy.splice(4,5);
log(churchBoy);

let anotherBatch = new Array("Tomato", "Pepper", "Onions");
// let combinedArray = churchBoy.concat(anotherBatch);
log(anotherBatch);

let muyiwaJoined = [...anotherBatch, "Janet", "Tolu", ...churchBoy ];
log({muyiwaJoined})

// churchBoy.indexOf[3];
// log({churchBoy})

// churchBoy.lastIndexOf("sam");
// log(churchBoy)

let learnInward = ["Jenny", "Susan", "Moses", "John", "Mary", "Peter" ];
log(learnInward)

let totalHere = learnInward.length
log({totalHere})

let first3Now = learnInward.slice(0,3)
log({first3Now})

// let last3now = learnInward.slice(3, 6)
// log({last3now})

let last3now = learnInward.slice(totalHere-3)
log({last3now})

let lastOne = learnInward.slice(totalHere-1)
log({lastOne})

let firstFour = learnInward.slice(0,4)
log({firstFour});

learnInward.unshift("Feranmi", "Peace");
let walkIn = ["Feranmi", "Peace", ...learnInward]
log({walkIn})


learnInward.splice(3,3)
log({learnInward})


// 7 Cindy, Josiah and Manasseh failed to register but they came in between the programme, kindly fix them in the middle of the guestlist after John but before Mary.
// let learnnward = ["Jenny", "Susan", "Moses", "John", "Mary", "Peter" ];

let meGetJohn = learnInward.indexOf("John");
let firstme = learnInward.slice(0, meGetJohn+1);
let lastme = learnInward.slice(meGetJohn+1)
learnInward = [...firstme, "Cindy", "Josiah", "Manasseh", ...lastme]
log({learnInward})

let schools = ["Hope", "Peace", "Youth", "Faith", "Love", "Joy", "Life", "Youth", "Trust"];
console.log(schools)
log(schools.indexOf("Life"));

let guest = [
    {name: 'John Doe', age:30}
]
console.log(guest.indexOf({
    name: 'John Doe',
    age: 30,
}));


function doingWork(Dm1, Dm2, Dm3){
    return (Dm1+Dm2+Dm3)
}
doingWork(23, 12, 17)


/* WORK TO DO
CREATE A FORM, THAT TAKES A PRODUCT NAME, PRICE, AND DESCRIPTION (max of 20words) and upon submission of the for form output a look=like of the cart content in the picture you took.

calculate the total after each post*/



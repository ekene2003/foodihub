
// Utility function 

function log(anythingISay){
    return console.log(anythingISay)
}

// variable declaration keywords: var, let, const
// Variable declartion Rule: FirstLetter lowerCase - (unless it is a Claas) - and an alphabet, no special character (apart from $ and _ ); must not begin with a number; vaiableNames must not be  on the left-hand side and the value on the right-hand side; must NOT be any of the reserved keywords.

let canChange = 2;
const cannotChange = 9;
canChange = 5;
console.log({canChange,cannotChange});

// Variable declaration methods

let someVar;
let anotherVar;
anotherVar = "Something";
let moreVar = "Straight";
log({someVar,anotherVar,moreVar})

let pageTitle = document.querySelector('.page-title');
pageTitle.style.color = 'tomato';
pageTitle.style.fontSize = '2rem';
console.log(pageTitle.innerText);

pageTitle.innerText = "Welcome to Javascript, Chiamaka!";

let pageSubtitle = document.querySelector('.page-subtitle');
pageSubtitle.style.color = 'tomato';
pageSubtitle.style.fontSize = '2rem';
pageSubtitle.innerText = "lorem ipsum whateverrr";

// Data Types in JS: Integer(number), String("alphabets"), Boolean(true/false), Array (a collection of related items), object(human or item), null(does not exist), undefined(does not have a value). 

let myNumber = 123;
let alphabets = "abc";
let notExist = null;
let noValue = undefined;
let myArray = [2,true,null];
let myArray2 = new Array(20,"Demola","Angela",undefined, [1,4,9]);

let myObject = {
    color: 'white',
    shape: 'rectangle',
    hasFrame: true,
    duration: '3years'
}

class Human{
    constructor(){
        this.id = 441199;
        this.firstName = "Chiamaka"
        this.lastName = "Chinedu"  
        this.age = 19  
    }
}
log({myNumber,
    alphabets,
    notExist,
    noValue,
    myArray,
    myArray2,
    myObject,})

    let firstElem = myArray[0];
    log({firstElem})

//Assignment

let section = document.querySelector('.js-section');
section.style.backgroundColor = 'orange';
section.innerText = 'This is a section styled with Javascript';
section.style.color = 'black';
section.style.fontSize = '20px';
section.style.fontWeight = '400';

//Nav Icon

let navIcon = document.querySelector('.nav-icon');
let navSample = document.querySelector('.nav-sample');

navIcon.addEventListener('click' ,function(event){
    navSample.classList.toggle('nav-show');
})

//Working with Time in JS
//To make something happen at a specific time(in miliseconds), ONLY ONCE, we use the window, setTimeout(function(){},time) function.
// If you want something to happen over and over at a specific interval(time), use the window.setInterval() method
// To get or set the content of an element you can use: innerText, innertHTML, textContent or value (applicable only to inputs,buttons and other form components)

let timeClock = document.querySelector('.time-clock');
let currentValue = parseInt(timeClock.innerText);
// To convert string to number, use parseInt if without decimal and parseFloat(theNumber) if with decimal.

let timeMgr;

timeMgr = setInterval(() => {
    currentValue ++;
    timeClock.innerText = currentValue;
    if(currentValue == 60) clearInterval(timeMgr);7
}, 1000);

//Operators in JS
// Arithmetic Operators
//+(addition), -(subtraction), / (division), * (muliplication), % (modulus) -(remainder)
//Arithmetic Assignment Operators
// +=, -=, /=, *=, and %=
let someNumber = 5;
someNumber += 3;
let twiceSN = someNumber * 2;
// someNumber = someNumber + 3;
log({someNumber, twiceSN});

// Comparison Operators
//Less than: <
let compa1 = 15 < 10; //FALSE
//Greater than
let compa2 = 12 > 8; //TRUE
// less than or equal to
let compa3 = 11 <= 19 //TRUE
//Greater than or equal to
let compa4 = 12 >= 21 //FALSE
//Not equal to
let compa5 = 223 != 201 //TRUE
//Equality Operator: ==
let compa6 = 201 == '201' //FALSE
//Idenity operator: ===
let compa7 = 201 === "201" //FALSE
//Not equal to (identity)
let compa8 = 321 !== "321" //TRUE

log({compa1, compa2, compa3, compa4, compa5, compa6, compa7, compa8})

// Work to do

/* Your boss has recently asked you to create a form that would take a user input, and have two buttons ('Reduce and Incraese') buttons. 
This is how he wants the activity on the page to go;
1. The user enters a number of their choice 
2. Presses either the Reduce or Increase button.
*/

//Solution

let btnIncrease = document.querySelector('#btn-increase');
let btnDecrease = document.querySelector('#btn-decrease');
let forValue = document.querySelector('#form-value');

let timer;

btnIncrease.onclick = function(e){
    e.preventDefault();
    clearInterval(timer);
    let enteredNum = forValue.value;
    timer = setInterval(() => {
        enteredNum--;
        formValue.value = enteredNum;
    }, 1000);
}

btnDecrease.onclick = function(e){
    e.preventDefault();
    clearInterval(timer);
    let enteredNum = forValue.value;
    timer = setInterval(() => {
        enteredNum--;
        forValue.value = enteredNum;
    }, 1000);
}

//You hae been assigned a task to award anyone who can hold their breath inside the pool for 20mins. Write a program that tells the user who endures for over 20mins they have passed the test.

// Solution

let swimForm = document.querySelector('.swim-form');
let swimTime = document.querySelector('.swim-value');
let swimResult = document.querySelector('.swim-result');
swimForm.onsubmit = function(e){
    e.preventDefault(); //stops the page from reloading
    let swimValue = swimTime.value;
    if(swimValue > 20) {
        swimResult.innerHTML = "<i class='fa fa-check'></i> Congratulations! You have qualified" ;
    }
    else{
        swimResult.innerHTML = "<i class='fa fa-close'></i> Ouch! You couldn't make it.";
    }
}

let juneClass = ["BabyBoy", "Angela", "Idris", "Demola", "Junior","Giveon","Henry","Johnny","Moriah","Sam"];

//Properties and Methods of an Array (Array Manipulation Methods)
//array.push(newItem)to add a new item to an array from the rear/back
juneClass.push("Angela");
log(juneClass)
//array.pop() removes the last element in an array
juneClass.pop();
log(juneClass)
//array.unshift(newItem) add an element to an array from the front
juneClass.unshift('Jane')
log(juneClass)
//array.shift() removes the first element in an array
juneClass.shift('Jane')
log(juneClass)
//array.length returns the total number of element in an array
let classTotal = juneClass.length
log({classTotal})
//array.splice(index,numberOfElementToRemove) deletes in the ORIGINAL array the number of elements specififed in "numberOfElementToRemove",
//sarting from the specified "index";
juneClass.splice(2,2);
log({splice: juneClass})
//array.slice(startIndex,endIndex) creates a copy out of the otiginal array WITHOUT affecting the original array. Note that the end index is NOT inclusive.
let midPeople = juneClass.slice(3,6);
log({slice: midPeople})
//array.concat(anotherArray) merges(concatenates) the contents of "anotherArray" into the firdst array
let julyBatch = new Array("Antony", "Manasseh", "Greg");
let combinedArray = juneClass.concat(julyBatch);
log({concat: combinedArray})
//Spread Operator (...) is used to copy the values of one array into another array.
let spreadCombined = [...juneClass, "Terry", ...julyBatch];
log({spreadCombined})
//The position of an element in an array is called the index and you start counting from zero (0) and not (1)

//To search for the index of a specific element in an array from the front, use:
//array.indexOf ("Element") e.g. juneClass.indexOf("Angela") [case-sensitive]
//To search for the index of a specific element in an array from the rear/back, if there are multiple occurences of such element, use:
//sampleArray.lastIndexOf("Element") e.g. juneClass.lastIndexOf("Angela") [case-sensitive]

//ASIGNMENT
let guestList = ["Jenny", "Susan", "Moses", "John", "Mary", "Peter"];

//ASSIGNMENT
//Write functions that;

//1. Take 3 args and adds them all up

function add3Nums (numb1, numb2, numb3)  {
    let sum = numb1 + numb2 + numb3;
    return sum;
}
log(add3Nums(3, 2, 1));

//2. Takes 3 args, adds the first 2 and subtracts the last one

function addSubtract(n1, n2, n3) {
    let add = n1 + n2;
    let answer = add - n3;
    return answer;
}

log(addSubtract(40, 2, 10));
// let answer = (n1 + n2) - n3;

//3. Divdes the 1st number by the last number (takes 2 args)

function quotient(number1, number2) {
    let sub = thridNum - firstNum;
    let result = sub + SecNum;
    return result;
}
// log(addSubtractAdd(10, 20, 30));

let students = ["Josh", "Zen", "Greg", "Shawn"];
let salePoint = [150, 188, 193, 197, 210, 240, 270, 311];

//Looping through an array in JS: for, forEach, for/in and for/of
//for(let index = 0; index < Array.length; index++){}

for(let index = 0; index < salePoint.length; index++){
    let point = salePoint[index];
    if(point > 195) salePoint[index] = point + 50;
    log('index is ${index} and newpoint is ${salePoint[index]} and oldpoint is ${point}');
}

//forEach Loop: arrayyName.forEach(function(element, index){})
students.forEach(function(element, index){
    //log('student ${index} is ${element}');
    if(index == 1) students[index] = "Moriah";
    log("student" + index + " is " + element);
})

//for/of : returns only the elements in an array
for(let element of salePoint) {
    console.log('string literal of ${element}');
}
//for/in : returns only the index in an array
for(let index in salePoint) {
    console.log('string literal in ${index}');
}

//ASSIGNMENT

let myFriendsAge = [19, 14, 15, 21, 42, 18, 20];

//Write a function that would sum up all my friends age    1.

function sumAllAges(ages){
    let total = 0;
//     for(let value of ages){
//         total = total + value;
//     }
//     ages.forEach(function(el,i){
//         total = total + el;
//     })
    for (let index = 0; index < ages.length; index++) {
        const element = ages[index];
        total = total = element;
    }
    console.log({total})
}

sumAllAges(myFriendsAge)

//Write a function that would sum up all my friends who are above 18     2.
function sumAbove18(agesArray){
    let total = 0;
    for(let age of agesArray){
        if(age > 18) total = total + age;
    }
    console.log({total})
}
sumAbove18(myFriendsAge);

//write a function that would return the average age of my friends     3.
function avgAge(agesArray){
    let total = 0;
    for(let value of agesArray){
        total = total + value;
    }
    let totalAgeLength = agesArray.length;
    let average = total/totalAgeLength;
    log({average})
}
avgAge(myFriendsAge)

//Use the different loop JS loops to show all my friends age
for(let i in myFriendsAge) log({i})
for(let i of myFriendsAge) log({i})
myFriendsAge.forEach(function(el){log({el}) })
for(let i; i < myFriendsAge.length; i++) log({el: myFriendsAge[i]});

//My 18 year old friend had his birthday yesterday, increase his age accordingly    4.
myFriendsAge.forEach(function(el,i){
    if(el === 18) myFriendsAge[i] = el + 1;
})
log({myFriendsAge})
//All friends would be plus one on monday 17/10/22 make sure it reflects in the next class     5.
myFriendsAge.forEach(function(el, i){
    if(el === 18) myFriendsAge[i] = el + 1;
})
log({myFriendsAge})

//HIGHER ORDER FUNCTIONS
//HIGHER ORDER FUNCTIONS are functions that take another function as their argument(s).
//forEach, map, filter, reduce e.t.c.
let boyScout = ["Giveon", "Kanye", "Ballam", "Nimrod", "Crowley"];
let examScore = [3,9,2,8,4,7,1];
//forEach
//boyScout.forEach(function(el,i){})
boyScout.forEach((el, i) => {
    log({el,i})
    if(el === "Kanye") boyScout[i] = "Bazuka";
})
//map (upgraded version of slice)
let newBoyScout = boyScout.map((el, i)=>{
    if(el === "Crowley") return "Alister";
    else return el;
})
// filter (upgraded version of splice)
let passMark = examScore.filter((el) => el >= 5);
let failMark = examScore.filter((el) => el < 5);

//reduce 
let totalScore = examScore.reduce((total,value) => total + value, 0);

let chatAll = document.querySelector ('.chat-all'), chatForm = document.querySelector ('.chat-form'), chatText = document.querySelector ('.chat-text'), chatNotice = document.querySelector ('.chat-notice');
// chatNotice.oninput = function(e) { chatNotice.innerHTML = 'Typing'}
chatText.oninput = e => { chatNotice.innerHTML = 'Typing...'}
chatText.onblur = e => { chatNotice.innerHTML = ''}
chatForm.onsubmit = e => {
    e.preventDefault();
    let text = chatText.value;
    if(text != ''){
        chatAll.innerHTML += `<div class="chat-msg">${text}</div>`;
    }else alert("Pls, enter a msg")
}

let product = {
    id: 138, 
    name: "HP Spectra",
    price: 800000,
    qty_in_stock: 40,
    description: "Some description of the products would populate here..."
}

let phone = {
    id: 893,
    
}

let food = {
    id: 80893,
    Image: 'potatoes.jpg',
    name: "Mashed Potatoes",
    type: "Irish",
    price: 3000,
    rating: 1,
    rate_total: 83,
    qty: "two portions",
    duration: "An hour",
    vendor: "foodiehub",
}

let allFood = [
    {
        id: 123,
        name: "Spaghetti",
        image: "download(3).jpg",
        price: 7500,
        description:"Slimy yet satisfying",
    },

    {
        id: 456,
        name: "Naija Jollof",
        image: "download(5).jpg",
        price: 7500,
        description: "Tasty and saucy, the best compared to ghanaian jollof",
    },

    {
        id: 789,
        name: "Burger",
        image: "download(2).jpg",
        price: 7500,
        description:"A very juicy something",
    },

    {
        id: 101112,
        name: "lamb chops",
        image: "download(4).jpg",
        price: 7500,
        description:"A slaughtered innocent lamb ",
    },

    {
        id: 131415,
        name: "Mashed potatoes",
        image: "images(2).jpg",
        price: 7500,
        description:"Perboiled and mashed till smooth and creamy",
    },

    {
        id: 161718,
        name: "Salad",
        image: "download(1).jpg",
        price: 7500,
        description:"A couple of chopped veggies",
    }
]

let foodSection = document.querySelector(".dish-wrap");

allFood.forEach((food,i)=>{
    console.log({food: food})
    foodSection.innerHTML += `<aside class="dish-card" data-type="main">
    <img src="./images/foods/${food.image}"
     alt="" class="dish-image">
    <div class="dish-info">
        <div class="dish-label">
            <span>Food <i class="fa fa-chevron-right"></i></span>
            <span>Starter </span>
        </div>
        <h3 class="dish-title">${food.name}</h3>
        <div class="dish-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-stroke"></i>
            <i class="far fa-star"></i>
            <span class="rating-total">56</span>
        </div>
        <h4 class="dish-price">${food.price}</h4>
        <p class="dish-desc">${food.description}</p>
        <button onclick="addToCart(${food.id})" class="dish-btn"> <i class="fa fa-shopping-cart"></i> Add to Cart</button>
    </div>
</aside>`;
})

let cartLabel = document.querySelector(".cart-label");
let cart = [];
cartLabel.innerHTML = cart.length;

function addToCart(id){
    let food = allFood.filter(el => el.id === id)[0];
    let findFood = cart.filter(el => el.id === id)[0];
    if(findFood.length){
        cart = cart.map(el =>{
            if(el.id === id){
                return {...el, qty: el.qty+1}
            }
            return el;
        })
    }else{
        cart = [...cart,{...food,qty:1}]
        updateLabel(cart);

    }
    //OR cart.push({...food,qty:1});
    log({food});
}

function updateLabel (cart){
    cartLabel.innerHTML = cart.length;
}
// console.log("hello");
// document.write('hy');
// alert(1);
// document.write("<h1>Learn JS</h1>");
// document.write("<h2>Learn JS</h2>");
// document.write("<h3>Learn JS</h3>");

/////////////////////////////////////////////

// var a = prompt("Enter a character A,B or C");
// switch(a){
//     case "A","a": document.write("<h1>Apple</h1>");break;
//     case "B","b": document.write("<h1>Bat</h1>");break;
//     case "C","c": document.write("<h1>Cat</h1>");break;
//     default:document.write("<h1>invalid output</h1>");
// }

// for(var i=1;i<=50;i++){
//     document.write("<h2>Hy this is js loop using 'for' </h2>"+"<br>");
// }
// for(var i=1;i<=50;i++){
//     document.write(i + "<br>");
// }
// function greetings(){
//     document.write("Good morning"+"<br>");

       
// }

// var text = "Learn java script";
// document.write(text.slice(6, 10));


// var a = 10;
// document.write(Math.sqrt(a));

// var a = Math.random();
// var round = Math.ceil6(a*10);
// document.write(round);

// var a = document.getElementById("heading");
// a.innerHTML = "learn js";
// a.style.color = "red";
// var a = document.getElementsByName("text")[0];
// // console.log(a);
// var b = document.getElementById("head");


// function message(){
//     b.innerHTML = "Hy " + a.value;
// }

// var heading = document.createElement("h1");

// function create(){
//     heading.innerHTML = "Hello world!";
//     document.body.appendChild(heading);
// }
// function remove(){
//     heading.remove();
// }



// var heading = document.getElementById("head"); 
// var button = document.getElementById("btn");

// button.addEventListener("click", changeColor);
// heading.addEventListener("mouseover",changebg)

// function changeColor(){
//     heading.style.color = "red";
// }

// function changebg(){
//     heading.style.backgroundColor = "blue";
// }

// let student = {
//     name: "owais",
//     position: "student",
//     course: "BCA",
//     salary: 1000,
//     getsalary: function(){
//         document.write("<h1>Name : " + this.name + "<br> position: " + this.position + "<br> salary:  " + this.salary + "</h1>");
//     }
// }
// document.write(student.name + "<br>");
// document.write(student.position  + "<br>");
// document.write(student.course + "<br>");
// document.write(student.salary + "<br>");

// student.getsalary();

class student{
    constructor(name,position,course){
        this.name = name;
        this.position = position;
        this.course = course;
    }
    getinfo(){
        document.write("Name: "+ this.name + "<br>" +"Position: "+ this.position+ "<br>"+"course: "+ this.course+ "<br>"+ "<br>");
    }
}

let std1 = new student("Owais","student","bca");
let std2 = new student("rabee","student","bca");

std1.getinfo();
std2.getinfo();
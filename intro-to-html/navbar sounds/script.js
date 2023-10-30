const clickbutton = document.getElementById("clickbutton");
const audio = new Audio("click_sound.mp3");


function playclicksound(){
    audio.play();
}


clickbutton.addEventListener("click",playclicksound)
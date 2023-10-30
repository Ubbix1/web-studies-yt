let text = document.getElementById('text');
    let bird1 = document.getElementById('bird1');
    let bird2 = document.getElementById('bird2');
    let btn = document.getElementById('btn');
    let rocks = document.getElementById('rocks');
    let forest = document.getElementById('forest');
    let water = document.getElementById('water');
    let header = document.getElementById('header');

    function parallax() {
        let value = window.scrollY;

        text.style.top = 50 + value * -0.5 + '%';
        bird1.style.top = value * -1.5 + 'px';
        bird1.style.left = value * 2 + 'px';
        bird2.style.top = value * -1.5 + 'px';
        bird2.style.left = value * -5 + 'px';
        btn.style.marginTop = value * 1.5 + 'px';
        rocks.style.top = value * -0.12 + 'px';
        forest.style.top = value * 0.25 + 'px';
        header.style.top = value * 0.5 + 'px';

        requestAnimationFrame(parallax);
    }

    // Call the parallax function to start the animation
    parallax();




// const track=getElementById("image-track");

// window.onmousedown = e =>{
//     track.dataset.mouseDownAt = e.clientX;
// }

// window.onmousemove = e =>{
//     if(track.dataset.mouseDownAt == "0") return;
    

//     const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
//     maxDelta = window.innerWidth / 2;

//     const percentage = (mouseDelta / maxDelta) * -100;

//     track.style.transform = `translate(${percentage}%, -50%)`;
// }
const track = document.getElementById("image-track");

window.addEventListener("mousedown", e => {
    track.dataset.mouseDownAt = e.clientX;
});

window.addEventListener("mousemove", e => {
    if (track.dataset.mouseDownAt === undefined) return;

    const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX;
    const maxDelta = window.innerWidth / 2;

    const percentage = (mouseDelta / maxDelta) * -100;
    const prevPercentage = parseFloat(track.dataset.prevPercentage) || 0;
    const nextPercentage = prevPercentage + percentage;

    track.dataset.percentage = nextPercentage;
    track.dataset.prevPercentage = nextPercentage;

    track.style.transform = `translateX(${nextPercentage}%, -50%)`;
});

window.addEventListener("mouseup", () => {
    track.dataset.mouseDownAt = "0";
});


 
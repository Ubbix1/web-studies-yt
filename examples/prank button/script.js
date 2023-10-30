const signupButton = document.getElementById('signupButton');
const prankSound = document.getElementById('prankSound');

signupButton.addEventListener('click', () => {
    prankSound.play();


    const maxVolume = 1.0; 
    if (prankSound.volume < maxVolume) {
        prankSound.volume = maxVolume;
    }

    
    alert('ha haha haha pranked😂');
});

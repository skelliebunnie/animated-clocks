// adapted from https://github.com/Tiarama/Twinkle-Twinkle

const starContainer = document.getElementById('star-container');
const smallStars = starContainer.classList.contains("small-stars");
console.log("small stars?", smallStars);

for (let i = 0; i < 145; i++) {
    let speed = smallStars ? 3 : 1.5;
    let speedMultiplier = 10;
    
    const element = document.createElement('div');
    element.style.top=`${Math.random()*100}%`;
    element.style.left=`${Math.random()*100}%`;
    element.style.animation = `twinkle ${speed+Math.random()*speedMultiplier}s ease-out infinite`;
    starContainer.appendChild(element);
    element.setAttribute('class', 'star');
}
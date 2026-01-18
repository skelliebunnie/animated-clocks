// adapted from https://github.com/Tiarama/Twinkle-Twinkle

const starContainer = document.getElementById('star-container')

for (let i = 0; i < 145; i++) {
    const element = document.createElement('div')
    element.style.top=`${Math.random()*100}%`
    element.style.left=`${Math.random()*100}%`
    element.style.animation = `twinkle ${1.5+Math.random()*10}s ease-out infinite`
    starContainer.appendChild(element)
    element.setAttribute('class', 'star')
}
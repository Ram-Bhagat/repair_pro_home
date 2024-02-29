 //progress bar
 const containe = document.querySelector('.progress-bar');
const bars = document.querySelectorAll('.progress-bar > div');
const labels = document.querySelectorAll('.progress-bar span');
let handler;

function update() {
  handler = setInterval(() => {
    bars.forEach((bar,i) => {
      const percentage = Math.round((bar.clientWidth/containe.clientWidth) * 100);
      labels[i].classList.add(percentage <= 9 ? 'singleDigit' : 'doubleDigit');
      labels[i].textContent = `${percentage}%`;
    });
  },10);
  setTimeout(() => clearInterval(handler),2000);
}

bars[0].addEventListener('animationstart',update,false);


// slider carousel

     $('#myCarousel').carousel({
    interval: 1000,
 })




 















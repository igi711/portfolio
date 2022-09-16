var i = 0;
var txt = 'Hello! My name is Brigitta. I graduated as agricultural technicien in 2018 and electrician in 2021. Now I work in a bicycle service. I am an enthusiastic beginner. I really like Laravel, PHP, CSS, HTML, JS, BOOTSTRAP.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("aboutme").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
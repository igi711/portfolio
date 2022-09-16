@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<div id="logos" class="container-fluid">
  <div class="row">
    <div class="col-12">
        <a href="https://github.com/igi711"><i class="fa-brands fa-github" ></i></a>
        <a href="https://codepen.io/Brigi112"><i class="fa-brands fa-codepen"></i></a>
        <a href="https://www.linkedin.com/in/bujdos%C3%B3n%C3%A9-brigi-3698a5242/"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://www.facebook.com/kovacs.brigitta.10"><i class="fa-brands fa-facebook"></i></a>
      </div>
    </div>
  </div>

<div class="text-center">
    <p id="font">Hello,
     My name is<br></p>
    <h2 class="rainbowtext wpr">
        <span class="text-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-12">
            <span class="letters">
                Bujdosóné Kovács Brigitta
            </span>
            </div>
            </div>
            </div>
        </span>
    </h2> 
</div>



<div class="container-fluid">
  <div class="row justify-content-end">
    <div class="col-12 col-xs-12 col-md-10 col-lg-6 col-xl-3">
      <div class="round"><h3 class="text-white text-fluid" style="margin-top:7rem;"><em>Front-end web development<br><i class="fa-solid fa-code fa-xl" style="margin-top:2rem;"></i></h3></div>
    </div>
  </div>
</div>





<script>
var textWrapper = document.querySelector('.wpr .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    autoplay: false,
    targets: '.wpr .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i,
    complete: () => resetAnimationParams(_actorIdAnimating, _coordsFinal)
  }).add({
    autoplay: false,
    targets: '.wpr',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
    complete: () => resetAnimationParams(_actorIdAnimating, _coordsFinal)
  });
</script>

@endsection
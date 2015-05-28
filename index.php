<?php get_header(); ?>
<svg class="hidden" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="squiggly-0">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="0"/>
      <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="3" />
    </filter>
    <filter id="squiggly-1">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="1"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="4" />
    </filter>
    
    <filter id="squiggly-2">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="2"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="3" />
    </filter>
    <filter id="squiggly-3">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="3"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="4" />
    </filter>
    
    <filter id="squiggly-4">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="4"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="3" />
    </filter>
  </defs> 
</svg>
<header>
    
</header>
<section class="hero">
<?php include 'libs/img/logo.svg'; ?>

<h1 class="intro-text">
    <span>Vi er smartmonkey</span>
    <span>Vi laver pæne ting</span>
    <span>Vi kombinerer brugerorienteret design</span>
    <span>og moderne teknologi</span>
</h1>
</section>

<section id="contact">
    <h2></h2>
    <div>
        <a href="mailto:hej@smartmonkey.dk">hej@smartmonkey.dk</a>
        <a href="tel:+4540409197">+45 40 40 91 97</a>
    </div>
</section>

<?php get_footer(); ?>
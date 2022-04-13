<!--
This site was built using the Tachyons CSS framework - https://tachyons.io/
Do not change anything unless you know what you're doing!
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SOVIET LINUX</title>
  <meta charset="utf-8"/>
  <meta name="description"  content="Soviet Linux, a source based Linux Distribution">
  <meta name="keywords" content="Linux, Soviet, source based, LFS">
  <meta name="author" content="Trevor Beckerson, https://github.com/tbeckerson">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- stylesheets
   don't mess with this unless you intend to move the .css file, or use a different, additional framework.
   If you add another stylesheet, remember that the priority is bottom to top!
   -->
    <link rel="stylesheet" href="assets/tachyons.css">
    <link rel="stylesheet" href="assets/tachyons-custom.css">
  <!-- favicon
   the little icon in the browser tab
  -->
    <link rel="icon" type="image/svg+xml" href="assets/star-favicon.svg">
  
  <!--
  any extra styles can be put here between the <style> tags, or in the stylesheet directly. Any duplicate content put here will override content in the stylesheet. Use with caution.
  -->
  <style>
  </style>
  <?php
    include 'php/php_scripts.php';
    include 'php/Parsedown.php';
  ?>
</head>

<!--
Below here is the visible part of the website. Any classes added to the body tag will be applied to the whole site, unless they're overridden in the tags below.
We're using the Hind font as the default for text. The php is calling the background image that shows through the rays -->
<body class="font-hind bg-center bg-top-l bg-size-75" style="background-image: url('<?php echo $bg_image_1; ?>');">

<!-- the header is the logo, the penguin, and the link to the iso. the entire first screen. -->
<header class="vh-100-l grid grid-3-column grid-row-50 bg-leftbottom ani-fade-in ani-1s" style="background-image: url('assets/rays.svg');">

<!-- the big SOVIET LINUX title, and the subtitle -->
    <div class="self-center gc-start-1 gc-end-4 font-russian f1 f-subheadline-m f-headline-l tracked white tc ani-fade-in ani-2s ani-delay-1s ani-backwards">SOVIET&#9773; LINUX<br />
<!-- the subheadline is nested into the title's div to keep them together on the screen -->
      <div class="font-teko b f3 f3-ns tracked white ani-fade-in ani-1s ani-delay-15s ani-backwards">The source based distribution for the people
      </div>
    </div>

<!-- the iso file and the side stars -->
    <section class="tc z-1 gr-start-2 gc-start-1 gc-end-4 ani-fade-in ani-1s ani-delay-2s ani-backwards">
      <!-- left star -->
      <div class="dib f1 tc white pr2">&#9733;</div>
<!-- the href in this <a> section below is the actual link to the iso -->
      <a class="no-underline ph3 pv3 bg-dark-red hover-bg-light-yellow yellow hover-sov-red font-teko b f3 f2-s f1-l f3 tc bg-animate ba bw1 bw2-ns b--dark-gray br3"
      href="https://drive.google.com/file/d/1-jQcLdOwEA-Fzbn1r6LPaY4E5O0TGIwj/view?usp=sharing"
      >
<!-- I'm calling it soviet-current.iso, but if there's a better name go ahead and change it -->
        SOVIET-CURRENT.ISO
      </a>
      <!-- bottom star -->
      <div class="dib f1 tc white pl2">&#9733;</div>

    </section>
<!-- the penguin image -->
    <section class="self-end gr-start-2 gc-start-1 gc-end-4">
      <img class="mw-100 mvh-50 w-80-m w-75-l v-btm ani-fade-in-right ani-2s ani-ease-out" src="assets/tux-soviet.svg" alt="image of an angry penguin" />
    </section>
     
</header>

<!-- the main content of the page - more stuff will come in here eventually.
 Right now, <main> is acting as a container for the content. It's got the fixed position background image for the section, and the php calls an image from the randomizer -->
<main class="bg-sov-red bg-center bg-top-l contain bg-fixed" style="background-image: url('<?php echo $bg_image_2; ?>');">
  <!-- this section is the about info. It's got a semi-transparent background, which lets the image from <main> show through -->
  <?php
  $file = "./markdown/about.md";
  if (file_exists($file)) { ?>
  <!-- this <p> is the section title -->
    <section class="pv5 ph2 flex flex-column items-center bg-sov-red-t8">
      <p class="font-teko b tracked f2 light-yellow self-start self-center-l pl5 pl0-l">ABOUT</p>
  <!-- the <div> below is the text of the section-->
      <div class="font-hind white flex flex-column">
  <?php
  $filename = fopen($file, 'r') or die("Unable to open file!");
  $Parsedown = new Parsedown ();
  echo $Parsedown->text(fread($filename,filesize($file)));
  fclose($filename);
  ?>
      </div>
    </section>
  <?php
  }
  ?>
</main>

<!-- the <footer> is doing the same as <main> right now - it's a container with a background image. The php calls an image from the randomizer -->
<footer class="bg-dark-gray bg-center bg-size-75 bg-50-m" style="background-image: url('<?php echo $bg_image_3; ?>')">

<!-- this section is semi-transparent grey, which lets the <footer> background image show through. It's using flexbox instead of paragraphs so that we can add more links in later and readjust the flow (if needed)-->
  <section class="pv3 ph2 bg-dark-gray-t9 flex flex-column items-center justify-center">
<!-- This <p> is the title of the content -->
  <p class="font-teko b tracked f2 light-yellow self-start self-center-l pl5 pl0-l">CONTRIBUTE</p>
  <p class="measure-narrow white tc">
  The revolution is calling your name!<br />
  We could use help in all aspects of building this distribution.</p>
<!-- there are two links to other sites, that use the same styling. The <a> tag is on the outside on purpose - everything you can see on the browser is part of the link -->
<!-- Discord -->
    <a class="f4 f3-ns no-underline hover-bg-sov-red br2 mv1" href="https://discord.gg/sPyFwyG6">
      <figure class="tc" style="">
      <img class="h3" src="assets/discord-white.svg" alt="official logo for discord.com">
      <figcaption class="font-teko light-yellow tx-lw-small">Discord - come here to join our community and interact with the creators.</figcaption>
      </figure>
      </a>
<!-- Github -->
    <a class="f4 f3-ns no-underline hover-bg-sov-red br2 mv1" href="https://github.com/Soviet-Linux/">
      <figure class="tc" style="">
      <img class="h3" src="assets/github-white.svg" alt="official logo for Github.com">
      <figcaption class="font-teko light-yellow">Github - view our code and join our development process.</figcaption>
      </figure>
    </a>
  </section>
</footer>

</body>
</html>

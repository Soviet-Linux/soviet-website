<!--
This site was built using the Tachyons CSS framework - https://tachyons.io/
Do not change anything unless you know what you're doing!
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SOVIET LINUX</title>
  
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
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
<body class="font-hind bg-top contain" style="background-image: url('<?php echo $bg_image_1; ?>');">

<!-- the header is the logo, the penguin, and the link to the iso. the entire first screen. -->
<header class="vh-100 flex flex-column align-center justify-start cover bg-leftbottom" style="background-image: url('assets/rays.svg');">

  <section class="vh-50">
  <!-- the big SOVIET LINUX title, and the subtitle -->
    <div class="font-russian f1 f-subheadline-m f-headline-l tracked white tc ani-fade-in ani-1s pt3 pt4-m pt6-l">SOVIET&#9773; LINUX<br />
  <!-- the subheadline is nested into the title's div to keep them together on the screen -->
      <div class="font-teko b f4 f3-ns tracked white">The source based distribution for the people
      </div>
    </div>
  </section>

  <!-- the SECTION contains the Tux image that slides in, and the iso download link -->
  <section class="vh-50 w-100 flex flex-row align-center justify-center pt2">
  <!-- there's two <div>s within the section, this one is the Tux graphic -->
  
  <!-- the penguin image -->
      <div class="self-end absolute left-0 z-0">
        <img class="vh-50 v-btm ani-fade-in-right ani-2s ani-ease-out" src="assets/tux-soviet.svg" alt="image of an angry penguin" />
      </div>
  
  <!-- this <div> contains the iso file and the above & below stars -->
      <div class="tc self-start z-1">
        <!-- top star -->
        <p class="f3 tc white">&#9733;</p>
  <!-- the href in this <a> section below is the actual link to the iso -->
        <a class="no-underline ph2 bg-dark-red hover-bg-sov-red yellow hover-light-yellow font-teko b f3 f2-s f1-l f3 tc bg-animate ba bw1 bw2-ns b--dark-gray br3 ani-fade-in ani-1s ani-ease-out"
        href="https://drive.google.com/file/d/1-jQcLdOwEA-Fzbn1r6LPaY4E5O0TGIwj/view?usp=sharing"
        >
  <!-- I'm calling it soviet-current.iso, but if there's a better name go ahead and change it -->
          SOVIET-CURRENT.ISO
        </a>
        <!-- bottom star -->
        <p class="f3 tc white">&#9733;</p>
      </div>
  </section> 
</header>

<!-- the main content of the page - more stuff will come in here eventually.
 Right now, <main> is acting as a container for the content. It's got the fixed position background image for the section, and the php calls an image from the randomizer -->
<main class="bg-sov-red bg-top contain bg-fixed" style="background-image: url('<?php echo $bg_image_2; ?>');">
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
<footer class="bg-dark-gray bg-center bg-size-50" style="background-image: url('<?php echo $bg_image_3; ?>')">

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

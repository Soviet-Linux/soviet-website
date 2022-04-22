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
    <link rel="stylesheet" href="./assets/tachyons.css">
    <link rel="stylesheet" href="./assets/tachyons-custom.css">
  <!-- favicon
   the little icon in the browser tab
  -->
    <link rel="icon" type="image/svg+xml" href="./assets/star-favicon.svg">
  
  <!--
  any extra styles can be put here between the <style> tags, or in the stylesheet directly. Any duplicate content put here will override content in the stylesheet. Use with caution.
  -->
  <style>
  </style>
  <?php
    include 'php/Parsedown.php';
  ?>
</head>

<!--
Below here is the visible part of the website. Any classes added to the body tag will be applied to the whole site, unless they're overridden in the tags below.
We're using the Hind font as the default for text.

 -->
<body class="font-hind bg-black">
<header class="grid grid-3-column grid-row-50 parallax z-0 gr-start-1 gr-end-4">
  
  <section class="plx-back-4 z-1 gr-start-1 gr-end-3 gc-start-1 gc-end-5 cover ani-fade-in ani-1s" style="background-image:url('./assets/rays.svg');">
  </section>
  
  <section class="plx-back-3 z-1 gr-start-1 gr-end-3 gc-start-1 gc-start-2-m
  gc-start-3-l bg-size-h75 bg-center ani-fade-in ani-1s ani-delay-1s ani-backwards" style="background-image:url('./assets/lenin_inv.svg');">
  </section>
  
  <section class="plx-back-1 z-2 gr-start-1 gr-end-3 gc-start-1 gc-end-4 gc-end-3-l bg-leftbottom bg-size-w100 bg-size-h50-ns ani-fade-in ani-2s" style="background-image:url('./assets/sov_flag-angle.svg');">
  </section>

  <section class="z-3 gr-start-2 gc-start-1 gc-start-2-l gc-end-3 bg-bottom bg-size-h25 bg-size-h50-ns bg-rightbottom ani-fade-in-right ani-1s" style="background-image:url('./assets/penguin-sickle.svg');">
  </section>
  
  <section class="z-4 gr-start-2 gc-start-2 gc-start-3-l gc-end-4 bg-bottom bg-size-h25 bg-size-h50-ns bg-bottom ani-fade-in-right-wide ani-2s" style="background-image:url('./assets/penguin-hammer.svg');">
  </section>

  <section class="plx-back-1 z-4 gc-self-center gr-start-1 gc-start-1 gc-end-4">
  <div class="tc dib w-100 font-russian f1 f-headline-l white tracked">
  SOVIET &#9773; LINUX
    <div class="font-teko f4 f3-m f2-l tracked">The people's distribution
    </div>
  </div>
  </section>
</header>


<!-- the main content of the page - more stuff will come in here eventually.
 Right now, <main> is acting as a container for the content. It's got the fixed position background image for the section, and the php calls an image from the randomizer -->
<main class="relative z-4 bg-sov-red bg-center bg-top-l contain bg-fixed bg-animate bb bw2 bw3-l b--dark-gray" style="background-image: url('./images/unbreakable_union.jpg');">
<aside class="relative z-4 bg-center bg-top-l contain bg-fixed" style="background-image: url('./images/popup_marx_engels_lenin.jpg');">
    <section class="tc mnvh-50 pv3 flex flex-column items-center justify-center bg-sov-yellow-t9 bt bb bw2 bw3-ns b--dark-grayflex flex-column justify-center">
  
  <p class="font-teko b tracked f2 sov-red self-start self-center-l pl5 pl0-l">DOWNLOAD</p>
    <section class="z-5 w-100 flex flex-row justify-center">

    <!-- left star -->
    <div class="f1 tc white pr2">&#9733;</div>
    <!-- the href in this <a> section below is the link to the torrent file -->
    <a class="linux no-underline ph3 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
    href="./assets/soviet-grub-0.1.1.iso.torrent" download
    >
<!-- I'm calling it soviet-current.iso, but if there's a better name go ahead and change it -->
      Torrent File
    </a>
    <a class="linux no-underline ph3 mh1 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
    href="magnet:?xt=urn:btih:c50fa8947f4511309f50dd1552348f988031c2a6&dn=soviet-grub-0.1.1.iso&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&tr=udp%3A%2F%2F9.rarbg.com%3A2810%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=http%3A%2F%2Fopenbittorrent.com%3A80%2Fannounce"
    >
<!-- I'm calling it soviet-current.iso, but if there's a better name go ahead and change it -->
      Magnet Link
    </a>
<!-- the href in this <a> section below is the actual link to the iso -->
    <a class="linux no-underline ph3 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
    href="https://drive.google.com/file/d/1-jQcLdOwEA-Fzbn1r6LPaY4E5O0TGIwj/view?usp=sharing"
    >
<!-- I'm calling it soviet-current.iso, but if there's a better name go ahead and change it -->
      Google Drive
    </a>

    <!-- bottom star -->
    <div class="f1 tc white pl2">&#9733;</div>
  </section>
    <section class="pt4 tracked">
    <div class="font-teko f4 f3-m f2-l sov-red"><b>Username:</b> root</div>
    <div class="font-teko f4 f3-m f2-l sov-red"><b>Password:</b> communism>capitalism</div>
  </section>
</aside>
<!-- this section is the about info. It's got a semi-transparent background, which lets the image from <main> show through -->
  <?php
  $file = "./markdown/about.md";
  if (file_exists($file)) { ?>
  <!-- this <p> is the section title -->
    <section class="z-5 pv5 ph2 flex flex-column items-center bg-sov-red-t9">
      <p class="font-teko b tracked f2 light-yellow self-start self-center-l pl5 pl0-l">ABOUT</p>
  <!-- the <div> below is the text of the section-->
      <div class="font-hind white flex flex-column a-blue measure">
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
  <?php
  $file = "./markdown/main.md";
  if (file_exists($file)) { ?>
  <!-- this <p> is the section title -->
    <section class="z-5 pv5 ph2 self-stretch flex flex-column items-center bg-sov-red-t9">
      <p class="font-teko b tracked f2 light-yellow self-start self-center-l pl5 pl0-l">DOCUMENTATION</p>
  <!-- the <div> below is the text of the section-->
      <div class="font-hind white flex flex-column measure a-blue">
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
<footer class="relative z-5 bg-dark-gray bg-top cover bg-size-75 bg-50-m" style="background-image: url('./assets/lenin.svg')">

<!-- this section is semi-transparent grey, which lets the <footer> background image show through. It's using flexbox instead of paragraphs so that we can add more links in later and readjust the flow (if needed)-->
  <section class="z-5 pv5 ph2 bg-dark-gray-t8 flex flex-column items-center justify-center">
<!-- This <p> is the title of the content -->
  <p class="font-teko b tracked f2 light-yellow self-start self-center-l pl5 pl0-l" id="contribute">CONTRIBUTE</p>
  <p class="measure-narrow white tc">
  The revolution is calling your name!<br />
  We could use help in all aspects of building this distribution.</p>
<!-- there are two links to other sites, that use the same styling. The <a> tag is on the outside on purpose - everything you can see on the browser is part of the link -->
<!-- Discord -->
    <a class="f4 f3-ns no-underline hover-bg-sov-red br2 mv1" href="https://discord.gg/pTFJjckEjp">
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

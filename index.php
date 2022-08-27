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
  <!-- we're using Parsedown for the 'about' & 'documentation' sections. Do NOT remove this php include unless you're prepared to rewrite the middle section of the site. -->
  <?php
    include 'assets/Parsedown.php';
  ?>
</head>

<!--
Below here is the visible part of the website. Any classes added to the body tag will be applied to the whole site, unless they're overridden in the tags below.
We're using the Hind font as the default for text.
 -->
<body class="font-hind bg-sov-red">

  <!-- the parallax effect is contained within the header tag - this is considered a 'code hack', and every browser update could change the behaviour.
  It's totally broken on Webkit.
  The z-indexs aren't doing anything on Chrome or Firefox, within the header. They do help with the changeover to the non-parallax sections.
  The actual z-indexing is based on the fore/back number - plx-back-4 will always be behind plx-back-3, plx-fore-4 will always be in front of plx-fore-3, and so on.
  If you decide to disbable the parallax effect, git rid of ALL the class tags: parallax, plx-back-*, plx-fore-*. The layout might break otherwise.
  --> 
<header class="parallax vh-50 vh-50-ns vh-100-l">
  <!-- the far background - sun rays -->
    <section id="bg-rays" class="plx-back-4 z-1 vh-100 w-100">
        <img class="w-100 ani-fade-in ani-2s ani-delay-2s ani-backwards" src="assets/rays.svg" alt="simple sun ray pattern, starting at bottom left">
    </section>

<!--hammer & sickle sliding in from the left-->
    <section id="bg-flag" class="plx-back-2 z-2" >
        <img class="h-25 ani-fade-in-left ani-2s pl5 pt5" src="assets/hamsic.svg" alt="crossed hammer and sickle">
    </section>

<!-- lenny moving from the right to the left -->
    <section id="lenin" class="plx-back-2 z-3 flex items-center justify-end">
    <img class="h-75 ani-fade-in-right ani-2s ani-delay-1s ani-backwards pr5  " src="assets/lenin_inv.svg" />
    </section>

<!-- Tittle and subtitle-->
    <section id="title card" class="plx-back-1 z-4 flex flex-column items-center justify-center" style="">
        <div id="title" class="ani-fade-in ani-15s ani-delay-1s ani-backwards font-russian near-white  f1 f-headline-l tracked">
        SOVIET &#9773; LINUX
        </div>
        <div id="subtitle" class="ani-fade-in ani-1s ani-delay-2s ani-backwards font-teko near-white f2 tracked">
        The People's Distribution
        </div>
        </section>

</header>

<!-- the main content of the page - more stuff will come in here eventually. -->
<main class="relative z-4 bg-sov-red bg-center bg-top-l contain bg-fixed bg-animate bb bw2 bw3-l b--dark-gray" style="background-image: url('./assets/unbreakable_union.jpg');">
<!-- the aside contains the download links -->
<aside class="relative z-4 bg-center bg-top-l contain bg-fixed" style="background-image: url('./assets/popup_marx_engels_lenin.jpg');">
    <section class="tc mnvh-50 pv5 flex flex-column items-center justify-center bg-sov-yellow-t9 bt bb bw2 bw3-ns b--dark-gray">
  
      <p class="font-teko b tracked f2 sov-red self-start self-center-l pl5 pl0-l">DOWNLOAD
      </p>
      
  <!-- this section contains an number of 'a' links to download Soviet. There are 3 sections, each with 2 links. The top row also has two stars -->
  
  <!-- magnets -->
  <section class="z-5 w-100 flex flex-column flex-row-ns flex-wrap justify-center pb3">
  <!-- left star -->
      <div class="f1 tc white pr2">&#9733;</div>
  <!-- iso magnet file -->
      <a class="linux no-underline mh2 ph3 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
      href="magnet:?xt=urn:btih:178ab85f426b922b2143033a0b05bf2e62e29a6e&dn=soviet-linux-x86%5F64-0.1.3.iso&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce"
      >
        ISO Magnet Link
      </a>
  <!-- rootfs magnet file -->
      <a class="linux no-underline mh2 ph3 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
      href="magnet:?xt=urn:btih:287baa523c236a9788eacd427b15fbdcfe06d296&dn=Soviet_Linux-rootfs-20220607&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce"
      >
        rootfs Magnet Link
      </a>
      <div class="f1 tc white pl2">&#9733;</div>
  </section>

  <!-- direct -->
     <section class="z-5 w-100 flex flex-column flex-row-ns flex-wrap justify-center">
  <!-- iso google drive link -->
      <a class="linux no-underline mh2 ph3 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
      href="https://drive.google.com/file/d/1ucaO4bZ5O8hMuSf2lBhPJNWl1qDcNbLL/view?usp=drivesdk"
      >
        ISO Direct
      </a>
  <!-- rootfs direct download   -->
      <a class="linux no-underline mh2 ph3 pt3 pb2 bg-sov-red hover-bg-dark-red yellow font-teko b f4 f3-s f2-l tc bg-animate ba bw1 bw2-m b--dark-gray br3"
      href="https://sovietlinux.ml/rootfs/soviet-rootfs-20220607.tar.gz"
      >
        rootfs Direct
      </a>
    </section>
    
    <section class="pt4 tracked">
      <div class="font-teko f4 f3-m f2-l sov-red"><b>Username:</b> root</div>
      <div class="font-teko f4 f3-m f2-l sov-red"><b>Password:</b>sovietlinux</div>
    </section>
  </section>
</aside>

<!-- this section is the about info. It's got a semi-transparent background, which lets the image from show through.
This whole section uses markdown! Parsedown is required unless you want to rewrite this space. -->
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

<!-- the <footer> is doing the same as <main> right now - it's a container with a background image. -->
<footer class="relative z-5 bg-dark-gray bg-bottom bg-fixed bg-size-w50" style="background-image: url('./assets/sov_flag-angle.svg')">

<!-- this section is semi-transparent grey, which lets the <footer> background image show through. It's using flexbox instead of paragraphs so that we can add more links in later and readjust the flow (if needed) -->
  <section class="z-5 pt5 ph2 bg-dark-gray-t8 flex items-start justify-center">
      <!-- penguin with sickle -->
    <section class="z-3 self-end tc">
      <img class="w-50 v-btm" src="assets/penguin-sickle.svg" alt="penguin holding a sickle">
    </section>

<!-- text -->
<section class="z-4 flex flex-column items-center pb5">
<!-- This <p> is the title of the content -->
  <p class="font-teko b tracked f2 light-yellow self-start self-center-l pl5 pl0-l" id="contribute">CONTRIBUTE</p>
  <p class="measure white tc">
  The revolution is calling your name!<br />
  We could use help in all aspects of building this distribution.</p>
<!-- there are three external links, that use the same styling. The <a> tag is on the outside on purpose - everything you can see on the browser is part of the link -->

<!-- Discord -->
    <div class="tc pt3 font-teko tracked white">
      <figure class="tc" style="">
    <a class="f4 f3-ns db no-underline hover-bg-sov-red br2 pv2 ph1" href="https://discord.gg/pTFJjckEjp">
      <img class="h3" src="assets/discord-white.svg" alt="official logo for discord.com">
      <figcaption class="light-yellow">DISCORD</figcaption>
      </a>
      </figure>
      join our community and interact with the creators.
      </div>
      
<!-- Gitlab -->
    <div class="tc pt3 font-teko tracked white">
      <figure class="tc" style="">
    <a class="f4 f3-ns db no-underline hover-bg-sov-red br2 pv2 ph1" href="https://git.sovietlinux.ml/sovietlinux">
      <img class="h3" src="assets/gitlab-white.svg" alt="official logo for gitlab">
      <figcaption class="light-yellow">GITLAB</figcaption>
        </a>
      </figure>
      view our code and join our development process.
      </div>
      
<!-- librepay -->
    <div class="tc pt3 font-teko tracked white">
      <figure class="tc" style="">
    <a class="f4 f3-ns db no-underline hover-bg-sov-red br2 pv2 ph1" href="https://liberapay.com/sovietlinux">
      <img class="h3" src="assets/libreapay-white.svg" alt="official logo for libreapay.com">
      <figcaption class="light-yellow">LIBREAPAY
      </figcaption>
    </a>
      </figure>
    support our server upkeep costs.
      </div>
  </section>

  <!-- penguin with hammer -->
    <section class="z-3 self-end tc">
      <img class="w-50 v-btm" src="assets/penguin-hammer.svg" alt="penguin holding a hammer">
    </section>
  </section>
</footer>

</body>
</html>

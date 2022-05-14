<?php
  include 'php/header.php';
  include 'php/overlay.php';
?>


<section class="section-1box-hp">
  <section class="defaul-max-wight">

      <div class="content-container first">
        <div class="box-h1-prepered">

            <div class="box-h2-title">
              <h1>Maso</h1>
            </div>
              <h2>Naše maso</h2>
            <article class="maso-layout">
            <div class="layout-description">
                <p>
                  Námi chované plemeno Limousine je masný typ skotu. Pochází z oblasti Haut ve Francii, kde je druhým nejčastěji chovaným plemenem. Vyniká výtečnou zmasilostí a jatečnou výtěžností.
                </p>
                <p>
                  Kravky u nás žijí celý svůj život na volné pastvě, kde mají volný pohyb během celého dne. Snažíme se tak co nejvíce napodobit přirozený život zvířat. Takové životní podmínky se pozitivně projevují rovněž na vysoké kvalitě našich masných produktů. Stravu kraviček zajišťuje stálá pastva a během zimy seno z našich luk. Traviny našich luk pochopitelně nejsou zasaženy pesticidy ani umělými hnojivy. Naše produkty tímto způsobem hospodaření dosahuje certifikace bio.

                </p>
            </div>
          </article>
        </div>
      </div>
      <!-- ikony smazat
      <div class="bio-icon-bar">
        <a href="#"><div class="bio-icon green ">
        </div></a>
        <a href="#"><div class="bio-icon meat  ">
        </div></a>
        <a href="#"><div class="bio-icon cow-icon ">
        </div></a>
      </div>

    </div >
    <div class="slideshow-container">
      <div class="our-story-1pics">
        <a href="images/slider_hp_3.jpg" data-lightbox="image-1" data-title="Foto">
          <img src="images/slider_hp_3.webp" alt="Frama Vrňak - kráva s rohy">
        </a>
      </div>
    </div>
  -->

  </section>
</section>


<section class="content-2-box">
  <!--Shortcut-->
  <div class="defaul-max-wight">
    <div class="half-circule-positon">
      <div class="half-circule dark">
      </div>
    </div>  
    <div class="maso-content">   
      <div class="content-container ">
        <div class="box-h1-prepered">
          <article class="maso-layout">
             <div class="box-h2-title half-cir">
              <p class="h1">Interaktivní průvodce</p>
            </div>
            
              <h2 class="half-cir">HOVĚZÍ MASO</h2>

            <div class="layout-description">
              <p>
                Na schématu krávy si vyberte kousek masa, který Vás zajímá, pro více informací na něj klikněte. Nevíte si rady? S výběrem Vám pomůže naše rozdělení masa podle způsobu úpravy.

              </p>
            </div>
          </article>
        </div>
      </div>               
    </div>
  </div> 




  <div class="defaul-max-wight">
    <!-- Overlay icon-->
    <div class="shortcut-box">

    <div data-id="minutky" class="shortcut-icon" onclick="onOverlay(this)">
      <a>
        <div class="shortcut-icon-svg minutky ">
        </div>
        <div class="shortcut-text">
          <span>Minutky</span>
        </div>
      </a>
    </div>

    <div data-id="peceni" class="shortcut-icon" onclick="onOverlay(this)">
      <a>
        <div class="shortcut-icon-svg peceni ">
        </div>
        <div class="shortcut-text">
          <span>Pečení</span>
        </div>
      </a>
    </div>

    <div data-id="duseni" class="shortcut-icon" onclick="onOverlay(this)">
      <a>
        <div class="shortcut-icon-svg duseni ">
        </div>
        <div class="shortcut-text">
          <span>Dušení</span>
        </div>
      </a>
    </div>

    <div data-id="mleti" class="shortcut-icon" onclick="onOverlay(this)">
      <a>
        <div class="shortcut-icon-svg mleti ">
        </div>
        <div class="shortcut-text">
          <span>Mletí</span>
        </div>
      </a>
    </div>


    <div data-id="tatarak" class="shortcut-icon" onclick="onOverlay(this)">
      <a>
        <div class="shortcut-icon-svg tatarak ">
        </div>
        <div class="shortcut-text">
          <span>Tatarák</span>
        </div>
      </a>
    </div>
    </div>
  </div>

  <!--Cow-->
  <div class="defaul-max-wight">
    <div class="cow">
      <div class="cow-svg">
        <?php
        include'php/cow.php';
        ?>
      </div>
    </div>
  </div>

  <!--Meat-navigation-->
  <div class="defaul-max-wight">
    <div class="meat-navigation-box">
      <div class="meat-navigation-icon">
        <div class="meat-navigation-icon-svg maso-icon-maso">
        </div>
        <div class="meat-navigation-icon-text"><span>STEAKOVÁ MASA</span></div>
		    <div class="meat-navigation-content">
          <p>Bryndáček, Holubička, Květová špička, Loupaná plec, Nízký roštěnec, Oponka, Pérko, Předkýtí, Svíčková pravá, Váleček, Veverka, Vysoký roštěnec, Zrcátko</p>
		    </div>
      </div>
      <div class="meat-navigation-icon">
        <div class="meat-navigation-icon-svg droby-icon">
        </div>
        <div class="meat-navigation-icon-text"><span>DROBY</span></div>
        <div class="meat-navigation-content">
          <p>Játra, Srdce, Jazyk, Plíce, Slezina, Ledviny, Býčí žlázy (varlata), Dršťky</p>
        </div>
      </div>
      <div class="meat-navigation-icon">
        <div class="meat-navigation-icon-svg ostatni-icon">
        </div>
        <div class="meat-navigation-icon-text"><span>OSTATNÍ</span></div>
        <div class="meat-navigation-content">
          <p>Oso buko, Kost morková, Kost řídká, Harfy</p>
        </div>
      </div>

  </div>
</section>



<!--Dark-box-->
<section class="content-2-box dark">
  <div class="defaul-max-wight">
    <div class="half-circule-positon">
      <div class="half-circule light">
      </div>
   </div>
    <div class="content">
      <div class="content-container ">
        <div class="box-h1-prepered">
          <article>

            <div class="box-h2-title half-cir maso-layout-other">
              <p class="h1">Zadní maso</p>
            </div>

              <h2 class="half-cir">hlavní dělení</h2>

          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KONEC - Dark box -->

<!--Vrchni sal-->
<section id="vrchni-sal" class="content-2-box">
  <div class="defaul-max-wight">
    <div class="half-circule-positon">
      <div class="half-circule dark-black">
      </div>
   </div>
    <div class="content">
      <div class="content-container ">
        <div class="box-h1-prepered">
          <article>

              <div class="box-h2-title half-cir">
              <p class="h1">Vrchní šál</p>
            </div>
            
              <h2 class="half-cir">top round</h2>

            <div class="layout-description">
              <p>
                Vrchní šál je možná jedno z nejkrásnějších mas napohled. Jedná se o velký špalek masa připomínající kulatý pecen chleba výrazné vůně hovězího masa a syté barvy. Má velmi široké použití, od tatarského bifteku přes masové špalky až po různé typy plátků. Od vrchního šálu je možné oddělit plátek, který je určený pouze na dušení a pečení.
              </p>
            </div>
          </article>
        </div>
      </div>
      <div class="meat-info-icon-bar">
        <a data-id="peceni" onclick="onOverlay(this)"><div class="meat-info-icon peceni">
        </div>
        <div class="meat-info-text">
          <span>Pečení</span>
        </div>
      </a>
        <a data-id="duseni" onclick="onOverlay(this)"><div class="meat-info-icon duseni">
        </div>
        <div class="meat-info-text">
          <span>Dušení</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak">
        </div>
        <div class="meat-info-text">
          <span>tatarák</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)" class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/vrchni-sal.svg" data-lightbox="image-1" data-title="My caption">
          <img src="assets/css/cow/vrchni-sal.svg" alt="Frama Vrňak - kráva s rohy">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Hruška-->
<section id="hruska" class="content-1-box">
  <div class="defaul-max-wight">
      <div class="half-circule-positon light">
        <div class="half-circule light">
        </div>
      </div>
    <div class="content">
      <div class="content-container ">
        <div class="box-h1-prepered">
          <article>

              <div class="box-h2-title half-cir">
              <p class="h1">Hruška</p>
            </div>
            
              <h2 class="half-cir">pear steak</h2>

            <div class="layout-description">
              <p>
                Hruška je maličký sval nacházející se pod plátkem vrchního šálu. Po odblanění se křehkostí vyrovná pravé svíčkové. Díky drobným tukovým paprskům zůstává při úpravě šťavnatá a nevysušená, přesto je velmi libová. Hodí se především na minutkovou úpravu. Je to velmi malý sval s hmotností nižší než 0,5 kg.
              </p>
            </div>
          </article>
        </div>
      </div>
      <div class="meat-info-icon-bar">
        <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak">
        </div>
        <div class="meat-info-text">
          <span>tatarák</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)" class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/hruska.svg" data-lightbox="image-1" data-title="My caption">
          <img src="assets/css/cow/hruska.svg" alt="Frama Vrňak - kráva s rohy">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Spodní šál-->
<section id="spodni-sal" class="content-2-box">
  <div class="defaul-max-wight">
    <div class="half-circule-positon">
      <div class="half-circule dark">
      </div>
   </div>
    <div class="content">
      <div class="content-container ">
        <div class="box-h1-prepered">
          <article>

              <div class="box-h2-title half-cir">
              <p class="h1">Spodní šál</p>
            </div>
            
              <h2 class="half-cir">silverside</h2>

            <div class="layout-description">
              <p>
                Spodní šál je objemný špalek zdánlivě libového masa. Vyznačuje se mírně hrubšími vlákny s vyšším zastoupením vaziva. Z toho důvodu je toto maso nejčastěji používáno na španělské ptáčky a na pečení. Spodní šál z mladých kusů masných plemen lze využít na steaky a Italové toto maso používají na roastbeef. Od spodního šálu je oddělen karabáček.
              </p>
            </div>
          </article>
        </div>
      </div>
      <div class="meat-info-icon-bar">
        <a data-id="peceni" onclick="onOverlay(this)"><div class="meat-info-icon peceni">
        </div>
        <div class="meat-info-text">
          <span>Pečení</span>
        </div>
      </a>
        <a data-id="duseni" onclick="onOverlay(this)"><div class="meat-info-icon duseni">
        </div>
        <div class="meat-info-text">
          <span>Dušení</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak">
        </div>
        <div class="meat-info-text">
          <span>tatarák</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)" class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/vrchni-sal.svg" data-lightbox="image-1" data-title="My caption">
          <img src="assets/css/cow/vrchni-sal.svg" alt="Frama Vrňak - kráva s rohy">
       </a>
      </div>
    </div>
  </div>
</section>





<?php

include 'php/footer.php';

?>

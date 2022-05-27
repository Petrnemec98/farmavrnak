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
  </section>
</section>


<section id="interaktivni-pruvodce" class="content-2-box">
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
      <div class="icon-info-bar">
        <div class="meat-info-icon-bar">

             <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky"></div>
                <div class="meat-info-text">
                  <span>Minutky</span>
                </div>
            </a>

            <a data-id="peceni" onclick="onOverlay(this)"><div class="meat-info-icon peceni"></div>
              <div class="meat-info-text">
                <span>Pečení</span>
              </div>
            </a>

            <a data-id="duseni" onclick="onOverlay(this)"><div class="meat-info-icon duseni"></div>
              <div class="meat-info-text">
                <span>Dušení</span>
              </div>
            </a>

            <a data-id="mleti" onclick="onOverlay(this)"><div class="meat-info-icon mleti"></div>
              <div class="meat-info-text">
                <span>mletí</span>
              </div>
            </a>

            <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak"></div>
              <div class="meat-info-text">
                <span>tatarák</span>
              </div>
            </a>

        </div>

        <div class="meat-info-icon-bar cash-recepts-eshop">
          <a class="cash"><div class="meat-info-icon cash-2"></div>
            <div class="meat-info-text">
              <span>cena</span>
            </div>
          </a>
          <a href="pripravujeme" class="recepty"><div class="meat-info-icon recepty-icon"></div>
            <div class="meat-info-text">
              <span>recepty</span>
            </div>
          </a>
          <a href="pripravujeme"><div class="meat-info-icon e-shop-icon"></div>
            <div class="meat-info-text">
              <span>E-shop</span>
            </div>
          </a>
        </div>
      </div>

    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/vrchni-sal.svg" data-lightbox="vrchni-sal" data-title="Vrchní šál">
          <img src="assets/css/cow/vrchni-sal.svg" alt="Vrchní šál">
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
      <div class="icon-info-bar">
        <div class="meat-info-icon-bar">

             <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky"></div>
                <div class="meat-info-text">
                  <span>Minutky</span>
                </div>
            </a>

            <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak"></div>
              <div class="meat-info-text">
                <span>tatarák</span>
              </div>
            </a>

        </div>
        
        <div class="meat-info-icon-bar cash-recepts-eshop">
          <a class="cash"><div class="meat-info-icon cash-2"></div>
            <div class="meat-info-text">
              <span>cena</span>
            </div>
          </a>
          <a href="pripravujeme" class="recepty"><div class="meat-info-icon recepty-icon"></div>
            <div class="meat-info-text">
              <span>recepty</span>
            </div>
          </a>
          <a href="pripravujeme"><div class="meat-info-icon e-shop-icon"></div>
            <div class="meat-info-text">
              <span>E-shop</span>
            </div>
          </a>
        </div>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/hruska.svg" data-lightbox="hruska" data-title="Hruška">
          <img src="assets/css/cow/hruska.svg" alt="Hruška">
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
      <div class="icon-info-bar">
        <div class="meat-info-icon-bar">


            <a data-id="peceni" onclick="onOverlay(this)"><div class="meat-info-icon peceni"></div>
              <div class="meat-info-text">
                <span>Pečení</span>
              </div>
            </a>

            <a data-id="duseni" onclick="onOverlay(this)"><div class="meat-info-icon duseni"></div>
              <div class="meat-info-text">
                <span>Dušení</span>
              </div>
            </a>


            <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak"></div>
              <div class="meat-info-text">
                <span>tatarák</span>
              </div>
            </a>

        </div>
        
        <div class="meat-info-icon-bar cash-recepts-eshop">
          <a class="cash"><div class="meat-info-icon cash-2"></div>
            <div class="meat-info-text">
              <span>cena</span>
            </div>
          </a>
          <a href="pripravujeme" class="recepty"><div class="meat-info-icon recepty-icon"></div>
            <div class="meat-info-text">
              <span>recepty</span>
            </div>
          </a>
          <a href="pripravujeme"><div class="meat-info-icon e-shop-icon"></div>
            <div class="meat-info-text">
              <span>E-shop</span>
            </div>
          </a>
        </div>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/spodni-sal.svg" data-lightbox="spodni-sal" data-title="Spodní šál">
          <img src="assets/css/cow/spodni-sal.svg" alt="Spodní šál">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Tabulová špička-->
<section id="tabulova-spicka" class="content-1-box">
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
              <p class="h1">Tabulová špička</p>
            </div>
            
              <h2 class="half-cir">rump-cap</h2>

            <div class="layout-description">
              <p>
                Horní trojúhelníkovitá část spodního šálu, také známá jako tafelspitz nebo picanha, se nechává u spodního šálu, nebo se řeže samostatně jako steakové maso, závitky či minutky.
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
      <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/tabulova-spicka.svg" data-lightbox="tabulova-spicka" data-title="Tabulová špička">
          <img src="assets/css/cow/tabulova-spicka.svg" alt="Tabulová špička">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Předkýtí-->
<section id="predkyti" class="content-2-box">
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
              <p class="h1">Předkýtí</p>
            </div>
            
              <h2 class="half-cir">thick flank</h2>

            <div class="layout-description">
              <p>
                Předkýtí (velký ořech) je v některých částech mírně tužší. Dá se rozdělit na tři menší části. Plochý plátek, který obepíná stehenní kost, má jemné maso jako roštěná. Objemný střed ořechu připomíná něco mezi válečkem a falešnou svíčkovou a má rovněž jemná vlákna. Vnější část ořechu je nejvíce namáhaným svalem tohoto šálu a pro svůj větší podíl kolagenu se hodí opravdu jen na pečení a dušení. 
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/predkyti.svg" data-lightbox="predkyti" data-title="Předkýtí">
          <img src="assets/css/cow/predkyti.svg" alt="Předkýtí">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Holubička-->
<section id="holubicka" class="content-1-box">
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
              <p class="h1">Holubička</p>
            </div>
            
              <h2 class="half-cir">tri tip roast</h2>

            <div class="layout-description">
              <p>
               Holubička (plátek z kýty, pastorenstück, maminha) je sval ve tvaru nepravidelného trojúhelníku (při lepší představivosti připomíná křídlo holubice) na vnější části ořechu. Má povrchové krytí lojem a jemné mramorování, a proto je ideální pro grilování.
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
      <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/holubicka.svg" data-lightbox="holubicka" data-title="Holubička">
          <img src="assets/css/cow/holubicka.svg" alt="Holubička">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Květová špička -->
<section id="kvetova-spicka" class="content-2-box">
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
              <p class="h1">Květová špička</p>
            </div>
            
              <h2 class="half-cir">rumpsteak</h2>

            <div class="layout-description">
              <p>
                Květová špička z masných plemen patří mezi žádaná steaková masa, protože není příliš namáhaným svalem. Připravují se z ní velké steaky s jemnými žilkami tuku a výraznou chutí. V našich podmínkách je toto maso často využíváno na dušení a pečení. Kromě steaků se dá využít na tatarský biftek, carpaccio, roastbeef atd.
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
      <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>minutky</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak">
        </div>
        <div class="meat-info-text">
          <span>tatarák</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-3">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/kvetova-spicka.svg" data-lightbox="kvetova-spicka" data-title="Květová špička">
          <img src="assets/css/cow/kvetova-spicka.svg" alt="Květová špička">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Váleček-->
<section id="valecek" class="content-1-box">
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
              <p class="h1">Váleček</p>
            </div>
            
              <h2 class="half-cir">eye round</h2>

            <div class="layout-description">
              <p>
               Váleček je pro mnoho lidí nejideálnějším masem na pečeni ke svíčkové omáčce. Je to kulatý podlouhlý špalek masa, ze kterého připravíte velmi pravidelné plátky. Na první pohled dokonalý kousek masa má vlastnosti jako spodní šál, i když Italové jej používají po svíčkové nejčastěji na carpaccio.
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
          <span>Tatarák</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/valecek.svg" data-lightbox="valecek" data-title="Váleček">
          <img src="assets/css/cow/valecek.svg" alt="Váleček">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Velká plec -->
<section id="velka-plec" class="content-2-box">
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
              <p class="h1">Velká plec</p>
            </div>
            
              <h2 class="half-cir">shoulder clod</h2>

            <div class="layout-description">
              <p>
                Květová špička z masných plemen patří mezi žádaná steaková masa, protože není příliš namáhaným svalem. Připravují se z ní velké steaky s jemnými žilkami tuku a výraznou chutí. V našich podmínkách je toto maso často využíváno na dušení a pečení. Kromě steaků se dá využít na tatarský biftek, carpaccio, roastbeef atd.
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
      
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/velka-plec.svg" data-lightbox="velka-plec" data-title="Velká plec">
          <img src="assets/css/cow/velka-plec.svg" alt="Velká plec">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Loupaná plec-->
<section id="loupana-plec" class="content-1-box">
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
              <p class="h1">Loupaná plec</p>
            </div>
            
              <h2 class="half-cir">top blade</h2>

            <div class="layout-description">
              <p>
               Loupaná plec je masem ze střední části plece, odkud byla vyloupnuta lopatka. Má poněkud vyšší podíl vazivových tkání (silná blána na povrchu a šlacha ve středu svalu je dobrým poznávacím rysem) a proto se často marinuje nebo pošíruje. Při odstranění vazivových tkání je chutným masem na tatarský biftek nebo na minutkové úpravy na grilu (iron steak, top blade steak). Loupaná plec je ale také masem našich babiček na omáčku.
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
      <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      <a data-id="tatarak" onclick="onOverlay(this)"><div class="meat-info-icon tatarak">
        </div>
        <div class="meat-info-text">
          <span>Tatarák</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/loupana-plec.svg" data-lightbox="loupana-plec" data-title="Loupaná plec">
          <img src="assets/css/cow/loupana-plec.svg" alt="Loupaná plec">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Kulatá plec -->
<section id="kulata-plec" class="content-2-box">
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
              <p class="h1">Kulatá plec</p>
            </div>
            
              <h2 class="half-cir">chuck tender</h2>

            <div class="layout-description">
              <p>
                Kulatá plec je známá též jako falešná svíčková. Má jemně vláknité maso a skutečně často nahrazuje pravou svíčkovou při přípravě svíčkové na smetaně. Kvůli své křehkosti se také používá na přípravu steaků.
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
       <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/kulata-plec.svg" data-lightbox="kulata-plec" data-title="Kulatá plec">
          <img src="assets/css/cow/kulata-plec.svg" alt="Kulatá plec">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Pravá svíčková-->
<section id="svickova" class="content-1-box">
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
              <p class="h1">Pravá svíčková</p>
            </div>
            
              <h2 class="half-cir">tenderloin</h2>

            <div class="layout-description">
              <p>
               Svíčková, pravá svíčková (fillet), je velmi libový sval uložený podél bederní části páteře a v těle skotu je poměrně málo namáhán. To je hlavní příčinou, proč se svíčková vyznačuje jemnými vlákny a její maso je velmi křehké. Hodí se na přípravu pokrmů s rychlou přípravou, tzn. bifteků či steaků. Absence tuku naopak znamená nepříliš výraznou chuť. I přesto se svíčkové u nás stále přisuzuje určitá jedinečnost, ačkoliv ve světě zdaleka nepatří do steakové špičky. Můžeme říci, že je typickým hovězím pro kuchaře, kteří chtějí začít s hovězími steaky.
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
          <span>Tatarák</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-3">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/svickova.svg" data-lightbox="svickova" data-title="Pravá svíčková">
          <img src="assets/css/cow/svickova.svg" alt="Pravá svíčková">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Nízký roštěnec  -->
<section id="nizky-rostenec" class="content-2-box">
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
              <p class="h1">Nízký roštěnec </p>
            </div>
            
              <h2 class="half-cir">sirloin</h2>

            <div class="layout-description">
              <p>
                Nízký roštěnec, či krátce roštěná, je od boku oddělen rovným řezem těsně podél zádového svalu. Vnitřní část je začištěna do hladka tak, aby roštěnou tvořil jen dlouhý zádový sval. Ve srovnání s vysokým roštěncem je svalovina roštěné více libová – nemá tolik výrazné mramorování. V zahraničí se roštěná běžně dělí do dalších, menších částí. Asi nejznámější steak z roštěné s kostí, na jejíž druhé straně je plátek svíčkové, je T-bone steak (kost mezi roštěnou a svíčkovou tvoří nápadné T). Nejchutnější steaky z roštěné jsou pravidelně a jemně mramorované i s tenkou vrstvou loje na povrchu.
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
       <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      
      <a class="cash"><div class="meat-info-icon cash-3">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/nizky-rostenec.svg" data-lightbox="nizky-rostenec" data-title="Nízký roštěnec">
          <img src="assets/css/cow/nizky-rostenec.svg" alt="Nízký roštěnec">
       </a>
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
              <p class="h1">Přední maso</p>
            </div>

              <h2 class="half-cir">hlavní dělení</h2>

          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KONEC - Dark box -->

<!--Vysoký roštěnec-->
<section id="vysoky-rostenec" class="content-2-box">
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
              <p class="h1">Vysoký roštěnec</p>
            </div>
            
              <h2 class="half-cir">ribeye</h2>

            <div class="layout-description">
              <p>
                Vysoký roštěnec bez kosti je kulinárně zajímavou částí hřbetu mezi podplečím a roštěnou. U nás jde zatím o značně nedoceněnou část. A přitom když roštěnec pochází z pěkného kusu býka, volka či jalovice masného plemene (silně mramorovaný s jemným lojovým krytím z vnější strany), připravíme z něj opravdovou steakovou delikatesu (entrecôte). V případě masa z libových kusů se používá na steaky pouze jeho středová část. Krajové maso, které se prolíná do roštěnce od krku, se pro svou vazivovost odkrajuje a používá se na dušení. Steaky z vysokého roštěnce se připravují také s kostí, což zajišťuje vyšší šťavnatost a silnější aroma masa. Vysoký roštěnec bez kosti se ale využívá i jako maso na pečení, vaření nebo dušení – i zde oceníte jeho excelentní chuť a křehkost.
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
      <a data-id="minutky" onclick="onOverlay(this)"><div class="meat-info-icon minutky">
        </div>
        <div class="meat-info-text">
          <span>Minutky</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-3">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/vysoky-rostenec.svg" data-lightbox="vysoky-rostenec" data-title="Vysoký roštěnec">
          <img src="assets/css/cow/vysoky-rostenec.svg" alt="Vysoký roštěnec">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Podplečí-->
<section id="podpleci" class="content-1-box">
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
              <p class="h1">Podplečí</p>
            </div>
            
              <h2 class="half-cir">karb</h2>

            <div class="layout-description">
              <p>
               Podplečí bez kosti neboli péro je přechodem mezi krkem a vysokým roštěncem. Ve srovnání s krkem je ale méně šlachovité a oproti vysokému roštěnci zase více libové. Kromě dušení a vaření se hodí také na pečení (i vcelku po marinování) a při dostatečném mramorování též na gril. Pokud mramorování nedostačuje, lze jej pokrájet na guláš.
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
      <a data-id="mleti" onclick="onOverlay(this)"><div class="meat-info-icon mleti">
        </div>
        <div class="meat-info-text">
          <span>Mletí</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-1">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/podpleci.svg" data-lightbox="podpleci" data-title="Podplečí">
          <img src="assets/css/cow/podpleci.svg" alt="Podplečí">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Krk-->
<section id="krk" class="content-2-box">
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
              <p class="h1">Krk</p>
            </div>
            
              <h2 class="half-cir">chuck roll</h2>

            <div class="layout-description">
              <p>
                Špička krku a krk bez kosti má uplatnění v kuchyni jako maso lehce prorostlé tukem s hrubšími svalovými vlákny a vysokým podílem vaziva, proto je určeno především na dušení a vaření. Prorostlejší klihovaté části se při pomalé úpravě rozpustí, maso se rozpadá na jazyku a šťáva má silnou chuť. Očištěná svalovina krku se též výborně hodí na mletí. Z krku se připravují ty nejlepší burgery. Francouzi ho používají na své proslulé hovězí po burgundsku.
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
      <a data-id="mleti" onclick="onOverlay(this)"><div class="meat-info-icon mleti">
        </div>
        <div class="meat-info-text">
          <span>Mletí</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/krk.svg" data-lightbox="Krk" data-title="krk">
          <img src="assets/css/cow/krk.svg" alt="krk">
       </a>
      </div>
    </div>
  </div>
</section>

<!--podkrci-->
<section id="podkrci" class="content-1-box">
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
            
            </div>
            
              <h2 class="half-cir">Podkrčí</h2>

            <div class="layout-description">
              <p>
               Podkrčí je namáhaná svalovina s hrubým vláknem a vysokým podílem vaziva. Vhodné je do mletých masových směsí, do gulášů, k dušení nebo i vaření vcelku. Používá se k výrobě uzenin.
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
      <a data-id="mleti" onclick="onOverlay(this)"><div class="meat-info-icon mleti">
        </div>
        <div class="meat-info-text">
          <span>Mletí</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-1">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/podkrci.svg" data-lightbox="podkrci" data-title="Podkrčí">
          <img src="assets/css/cow/podkrci.svg" alt="Podkrčí">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Bok bez kosti-->
<section id="bok-bez-kosti" class="content-2-box">
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
              <p class="h1">Bok bez kosti</p>
            </div>
            
              <h2 class="half-cir">flank</h2>

            <div class="layout-description">
              <p>
                Bok bez kosti neboli pupek je v našich podmínkách typickým masem na vaření nebo dušení. Pupek je břišní stěna s plochými svaly obsahující elastické vazivo a bohaté vnitřní tukové krytí. Má charakter předního hovězího masa. Dělí se na tři steakové části:<a href="#zrcatko"> flank steak (zrcátko) </a>,<a href="#bryndacek"> flap meat (bryndáček)</a> a <a href="#vnitrni-oponka"> inside skirt steak (vnitřní oponka)</a>, což jsou specifická steaková masa mírně hrubším svalovým vláknem a jemnou chutí a vůní. Ostatní části jsou tužší a nazývají se jen pupek
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
      <a data-id="mleti" onclick="onOverlay(this)"><div class="meat-info-icon mleti">
        </div>
        <div class="meat-info-text">
          <span>Mletí</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/bok-bez-kosti.svg" data-lightbox="bok-bez-kosti" data-title="bok-bez-kosti">
          <img src="assets/css/cow/bok-bez-kosti.svg" alt="bok-bez-kosti">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Zrcátko-->
<section id="zrcatko" class="content-1-box">
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
              <p class="h1">Zrcátko</p>
            </div>
            
              <h2 class="half-cir">flank steak</h2>

            <div class="layout-description">
              <p>
               Zrcátko se nachází ve spodní části hovězího pupku. Jedná se o široký kus plochého svalu s vynikající chutí. Svůj název získalo od svého kulatého tvaru a lesklého povrchu připomínajícího zrcátko. Má velmi silná vlákna, proto se upravuje v jednom kuse a po odpočinutí se krájí na slabé plátky přes vlákna.
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/zrcatko.svg" data-lightbox="zrcatko" data-title="zrcatko">
          <img src="assets/css/cow/zrcatko.svg" alt="zrcátko">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Bryndáček-->
<section id="bryndacek" class="content-2-box">
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
              <p class="h1">Bryndáček</p>
            </div>
            
              <h2 class="half-cir">flap steak</h2>

            <div class="layout-description">
              <p>
               Bryndáček je prostřední část pupku, začíná u palce svíčkové. Je to krásný kus masa, který připomíná dětský bryndáček. Má výrazně silná vlákna a šťavnatou chuť. Hodí se na přípravu steaků, které po odpočinutí krájíme na tenká vlákna.
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/bryndacek.svg" data-lightbox="bryndacek" data-title="bryndacek">
          <img src="assets/css/cow/bryndacek.svg" alt="bryndáček">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Vnitřní oponka-->
<section id="vnitrni-oponka" class="content-1-box">
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
              <p class="h1">Vnitřní oponka</p>
            </div>
            
              <h2 class="half-cir">inside skirt steak</h2>

            <div class="layout-description">
              <p>
              Oproti <a href="#oponka"> vnější oponce</a> je vnitřní oponka o něco tužší a širší.  Vlákna jsou výrazně hrubá, hodí se na přípravu steaků, které po odpočinutí krájíme na tenká vlákna.
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/vnitrni-oponka.svg" data-lightbox="vnitrni-oponka" data-title="vnitrni-oponka">
          <img src="assets/css/cow/vnitrni-oponka.svg" alt="vnitrni-oponka">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Kližka-->
<section id="klizka" class="content-2-box">
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
              <p class="h1">Kližka</p>
            </div>
            
              <h2 class="half-cir">shank</h2>

            <div class="layout-description">
              <p>
               Zadní kližka (hindshank) je možná nejtypičtějším masem na guláš, ale také na pozvolné a dlouhé pečení. Jedná se o značně namáhané svalstvo nohou skotu, a proto je velmi šlachovité. Zadní kližka je více libová a méně dělivá než kližka přední. Řádně odleželé maso kližky je zdrojem nejen chutného a měkkého masa, ale i velkého množství dokonale voňavé hnědé šťávy, kterou kližka při dušení pouští. S čerstvou kližkou toho nedocílíme. Pokud zadní kližku ponecháme na holenní kosti a nařežeme na plátky kolmo na kost, získáme tak základ delikatesy Osso Buco.
             </p>
             <p>
                Přední kližka (foreshank) má velmi podobnou charakteristiku jako kližka zadní. Jediným rozdílem je, že přední kližka má více kolagenu a nedá se z ní připravit Osso Buco.
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/zadni-klizka.svg" data-lightbox="zadni-klizka" data-title="zadni-klizka">
          <img src="assets/css/cow/zadni-klizka.svg" alt="Zadní kližka">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Karabáček-->
<section id="karabacek" class="content-1-box">
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
              <p class="h1">Karabáček</p>
            </div>
            
              <h2 class="half-cir">heel of round</h2>

            <div class="layout-description">
              <p>
              Karabáček je libovým zástupcem kližek, je umístěn mezi zadním masem (spodním šálem kýty) a kližkou. Skladbou připomíná maso z plece a má i podobné využití.
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/karabacek.svg" data-lightbox="karabacek" data-title="karabáček">
          <img src="assets/css/cow/karabacek.svg" alt="karabáček">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Husička-->
<section id="husicka" class="content-2-box">
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
             
            </div>
            
              <h2 class="half-cir">Husička</h2>

            <div class="layout-description">
              <p>
              Husička je libová část přední kližky, obdoba zadního karabáčku. Je to malý podlouhlý sval uložený na přední pleci pod vrstvou kližky (musí se z ní vyloupnout). Připomíná falešnou svíčkovou nebo ještě více vepřovou panenku. Je to velice malý sval s jemnými vlákny a hmotností nižší než 0,5 kg. Hodí se na přípravu minutek (po vyzrání), carpaccia a tataráku.
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
          <span>Tatarák</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/husicka.svg" data-lightbox="husicka" data-title="Husička">
          <img src="assets/css/cow/husicka.svg" alt="Husička">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Plátek lopatkový-->
<section id="plecovy-platek" class="content-1-box">
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
              
            </div>
            
              <h2 class="half-cir">Plátek lopatkový</h2>

            <div class="layout-description">
              <p>
              Plátek lopatkový neboli plecový plátek je sval sejmutý z vrchní plochy lopatky při kostění plece. Má podobný charakter jako <a href="#loupana-plec"> loupaná plec</a> (vyšší podíl vazivových tkání) a rovněž podobné využití (marinování a pošírování).
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
      <a data-id="mleti" onclick="onOverlay(this)"><div class="meat-info-icon mleti">
        </div>
        <div class="meat-info-text">
          <span>Mletí</span>
        </div>
      </a>
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/plecovy-platek.svg" data-lightbox="platek-lopatkovy" data-title="Plátek lopatkový">
          <img src="assets/css/cow/plecovy-platek.svg" alt="Plátek lopatkový">
       </a>
      </div>
    </div>
  </div>
</section>

<!--Pavouček-->
<section id="pavoucek" class="content-2-box">
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
              <p class="h1">Pavouček</p>
            </div>
            
              <h2 class="half-cir">spider steak</h2>

            <div class="layout-description">
              <p>
                Pavouček je jedinečný plátek masa z pánevní jamky, je velmi chutný a především šťavnatý, čímž se odlišuje od ostatních částí kýty. Jméno získal díky svému mramorování, které připomíná pavoučí síť. Hodí se především na minutkovou úpravu. Je to velmi malý sval s hmotností nižší než 0,5 kg.
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
      <a class="cash"><div class="meat-info-icon cash-2">
        </div>
        <div class="meat-info-text">
          <span>cena</span>
        </div>
      </a>
      </div>
    </div>
      <div class="slideshow-container meat">
      <div class="our-story-pics right">
       <a href="assets/css/cow/pavoucek.svg" data-lightbox="pavoucek" data-title="Pavouček">
          <img src="assets/css/cow/pavoucek.svg" alt="Pavouček">
       </a>
      </div>
    </div>
  </div>
</section>


<?php

include 'php/footer.php';

?>

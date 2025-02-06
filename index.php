<!DOCTYPE html>
<html lang="cs">
<head>
  <?php include "header/header.php"; ?>
  <title>Bazény Bazény</title>
  <meta name="description" content="Jirout bazény - Firma zabývající se výrobou bazénů, produktů z plastů a prodejem bazénové příslušenství.">
  <meta name="keyword" content="Jirout bazény, bazény, výroba bazénů, výroba z plastů, bazénové příslušenství">
</head>
<body>
  <?php include "menu/menu.php"; ?>
  <?php include "hero/hero.php"; ?>

<!-- Proč si vybrat nás -->
  <section class="py-16">
    <h2 class="text-center text-2xl sm:text-3xl font-bold mb-16">Proč si vybrat nás</h2>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
      <!-- Kalkulace ceny zdarma -->
      <div class="text-center flex flex-col my-4">
        <img src="assets/image/kalkulace-ceny.svg" class="mx-auto w-32 h-[180px]" alt="Kalkulace ceny zdarma">
        <h3 class="text-xl md:text-2xl font-semibold mt-6">Kalkulace ceny zdarma</h3>
       </div>
      <!-- Garance nejnižší ceny -->
      <div class="text-center flex flex-col my-4">
        <img src="assets/image/garance-ceny.svg" class="mx-auto w-32 h-[180px]" alt="Garance nejnižší ceny">
        <h3 class="text-xl md:text-2xl font-semibold mt-6">Garance nejnižší ceny</h3>
      </div>
      <!-- Garance -->
      <div class="text-center flex flex-col my-4">
        <img src="assets/image/zakaznicky-servis.svg" class="mx-auto w-32 h-[180px]" alt="Garance">
        <h3 class="text-xl md:text-2xl font-semibold mt-6">Garance</h3>
      </div>
      <!-- Péče o zákazníka -->
      <div class="text-center flex flex-col my-4">
        <img src="assets/image/ikona-x.svg" class="mx-auto w-32 h-[180px]" alt="Péče o zákazníka">
        <h3 class="text-xl md:text-2xl font-semibold mt-6">Péče o zákazníka</h3>
      </div>
    </div>
  </section>
<!-- Konec Proč si vybrat nás -->

<!-- Naše produkty a služby -->
  <section class="py-10">
    <h2 class="text-center text-2xl md:text-3xl font-bold mb-16">Naše produkty a služby</h2>

    <div class="max-w-6xl mx-auto space-y-8 px-4">
      <!-- První karta - obrázek vlevo, text vpravo -->
      <div class="bg-white rounded-lg p-8 flex flex-col lg:flex-row items-center">
        <img src="assets/image/bazen-75.jpg" class="rounded-lg w-full lg:w-1/2 mb-6 lg:mb-0 lg:mr-6" alt="Výroba bazénů">
        <div class="lg:w-1/2">
          <h3 class="text-xl md:text-2xl font-medium mb-4">Výroba bazénů</h3>
          <p class="text-gray-700">
            <span class="text-sky-400 font-medium text-xl">N</span>aše plastové bazény jsou ideálním řešením, pokud toužíte mít doma vlastní, kvalitní, moderní a pěkný bazén, který dobře vypadá i dlouho vydrží. Jsme výrobci plastových bazénů a máme pro Vás bazény klasické hranaté, obdélníkové zaoblené, oválné nebo kulaté. Naše plastové bazény jsou vyrobeny nejmodernější technologií teplovzdušného svařování polypropylenových desek o tloušťce 5 a 6 mm z kvalitního, mrazuvzdorného a stálobarevného materiálu německé firmy Röchling výhradně určeného pro výrobu bazénů.
          </p>
        </div>
      </div>

      <!-- Druhá karta - obrázek vpravo, text vlevo -->
      <div class="bg-white rounded-lg p-8 flex flex-col lg:flex-row items-center lg:flex-row-reverse">
        <img src="assets/image/bazen-66.jpg" class="rounded-lg w-full lg:w-1/2 mb-6 lg:mb-0 lg:ml-6" alt="Bazénové sety">
        <div class="lg:w-1/2">
          <h3 class="text-xl md:text-2xl font-medium mb-4">Bazénové sety</h3>
          <p class="text-gray-700">
            <span class="text-sky-400 font-medium text-xl">P</span>odívejte se na naší nabídku bazénových setů, kde v základu je i filtrace a propojovací materiál do 5m od bazénu. Navíc k setu lze objednat další bazénové příslušenství.
          </p>
        </div>
      </div>

      <!-- Třetí karta - obrázek vlevo, text vpravo -->
      <div class="bg-white rounded-lg p-8 flex flex-col lg:flex-row items-center">
        <img src="assets/image/bazen-62.jpg" class="rounded-lg w-full lg:w-1/2 mb-6 lg:mb-0 lg:mr-6" alt="Technologické šachty">
        <div class="lg:w-1/2">
          <h3 class="text-xl md:text-2xl font-medium mb-4">Technologické šachty</h3>
          <p class="text-gray-700">
            <span class="text-sky-400 font-medium text-xl">K</span> bazénu můžeme dodat filtrační šachtu, která slouží k umístění filtrační jednotky, solonizační jednotky nebo protiproudu. Šachta je vyrobena z polypropylenu o síle 8 mm s žebrováním a plastovým víkem. Šachty jsou určeny do země, kdy je vyžadován betonový podklad s následným obetonováním celé šachty. Při obetonování je důležité vyztužit vnitřní prostor šachty tak aby nedošlo k deformaci stěn.
          </p>
        </div>
      </div>
    </div>
  </section>
<!-- Konec Naše produkty a služby -->


<!-- Ukázka naší práce -->
<section class="py-10">
  <h2 class="text-center text-2xl md:text-3xl font-bold mb-16">Ukázka naší práce</h2>
  <div class="relative max-w-6xl mx-auto px-4">
    <!-- Slider Container -->
    <div class="flex overflow-x-auto scroll-smooth scrollbar-hidden" id="slider">
      <img src="assets/image/bazen-100.jpeg" class="w-full sm:w-1/2 lg:w-1/3 sm:px-1 rounded-lg shadow-lg" alt="Bazén 100">
      <img src="assets/image/bazen-94.jpeg" class="w-full sm:w-1/2 lg:w-1/3 sm:px-1 rounded-lg shadow-lg" alt="Bazén 94">
      <img src="assets/image/bazen-71.jpg" class="w-full sm:w-1/2 lg:w-1/3 sm:px-1 rounded-lg shadow-lg" alt="Bazén 71">
      <img src="assets/image/bazen-94.jpeg" class="w-full sm:w-1/2 lg:w-1/3 sm:px-1 rounded-lg shadow-lg" alt="Bazén 94">
     </div>
      
      <!-- Navigation Buttons -->
      <button
      class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-100/50 text-black rounded-full p-2 z-10"
      id="prevBtn"
      >
      <i class="fas fa-chevron-left"></i>
    </button>
    
    <button
    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-100/50 text-black rounded-full p-2 z-10"
    id="nextBtn"
    >
    <i class="fas fa-chevron-right"></i>
  </button>
</div>
</section>
<!-- Konec Ukázka naší práce -->

<!-- Hodnocení našich zákazníků -->
  <section class="">
    <div class="py-10">
      <h2 class="text-center text-2xl md:text-3xl font-bold mb-16 px-4">Hodnocení našich zákazníků</h2>

      <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6 px-4">
        <!-- První karta -->
        <div class="bg-white p-6 rounded-lg shadow-custom">
          <h3 class="text-xl font-semibold mb-2">Bazénový set s R60 3m x 5,5m x 1,2m</h3>
          <p class="text-gray-500 font-medium mb-4">Josef, Hříměždice</p>
          <p class="text-gray-700">Bazén od Vás funguje na jedničku, jsem velice spokojen. Určitě Vaši firmu doporučuji.</p>
        </div>
        <!-- Druhá karta -->
        <div class="bg-white p-6 rounded-lg shadow-custom">
          <h3 class="text-xl font-semibold mb-2">Bazénový set s R60 3m x 4m x 1,2m</h3>
          <p class="text-gray-500 font-medium mb-4">Ignác, Slovenský Grob</p>
          <p class="text-gray-700">Mimoriadne spoľahlivá firma. Cena, dodanie aj komunikácia na vynikajúcej úrovni. Túto firmu a jej služby môžem len odporučiť. Realizácia bazéna v roku 2018</p>
        </div>
      </div>
    </div>
  </section>
<!-- Konec Hodnocení našich zákazníků -->

  <style>
    /* Skrytí scrollbarů pro slider */
    .scrollbar-hidden::-webkit-scrollbar {
      display: none;
    }
    .scrollbar-hidden {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>

<script>
  const slider = document.getElementById('slider');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  // Získání šířky jednoho obrázku
  function getSlideWidth() {
    return slider.querySelector('img').clientWidth;
  }

  // Funkce pro posouvání doprava
  nextBtn.addEventListener('click', () => {
    slider.scrollBy({
      left: getSlideWidth(),
      behavior: 'smooth',
    });
  });

  // Funkce pro posouvání doleva
  prevBtn.addEventListener('click', () => {
    slider.scrollBy({
      left: -getSlideWidth(),
      behavior: 'smooth',
    });
  });
  </script>

  <?php include "footer/footer.php"; ?>

  <script src="assets/scripts/script.js"></script>

</body>
</html>
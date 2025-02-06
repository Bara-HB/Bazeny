<!DOCTYPE html>
<html lang="cs">
<head>
  <?php include "header/header.php"; ?>
  <title>Jirout Bazény</title>
  <meta name="description" content="Jirout bazény - Firma zabývající se výrobou bazénů, produktů z plastů a prodejem bazénové příslušenství.">
  <meta name="keyword" content="Jirout bazény, bazény, výroba bazénů, výroba z plastů, bazénové příslušenství">
</head>
<body>
  
  <?php include "menu/menu.php"; ?>
  <?php include "hero/hero.php"; ?>

  <section class="max-w-6xl mx-auto px-4">

    <h2 class="text-center text-2xl md:text-3xl font-bold my-8">Bazénové zastřešení Casablanka</h2>

    <div class="">
      <div class="max-w-6xl mx-auto">
<!-- První karta -->
        <div class="bg-white rounded-lg shadow-custom p-6 my-8">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Carbon 6,35 m</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Carbon 6,35 m" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">320 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Oboustranné</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card1" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card1')"
            >
              Více...
            </button>
          </div>

<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card1" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Carbon</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">3</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">362</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">55</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">390</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">646</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">346 x 635</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Druhá karta -->
        <div class="bg-white rounded-lg shadow-custom p-6 my-8">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Antracit 6,35 m</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Antracit 6,35 m" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">320 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Oboustranné</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card2" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card2')"
            >
              Více...
            </button>
          </div>

<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card2" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Antracit</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">3</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">362</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">155</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">390</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">646</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">346 x 635</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Třetí karta -->
        <div class="bg-white rounded-lg shadow-custom p-6 my-4">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Carbon 6,35 m jednokolej P</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Carbon 6,35 m jednokolej P" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">3110 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Jednokolej P</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card3" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card3')"
            >
              Více...
            </button>
          </div>
        
<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card3" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Carbon</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">3</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">362</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">55</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">390</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">646</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">346 x 635</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Čtvrtá karta -->
<div class="bg-white rounded-lg shadow-custom p-6 my-4">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Carbon 6,35 m jednokolej L</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Carbon 6,35 m jednokolej L" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">310 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Jednokolej L</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card4" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card4')"
            >
              Více...
            </button>
          </div>
        
<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card4" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Carbon</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">3</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">362</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">55</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">390</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">646</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">346 x 635</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Pátá karta -->
        <div class="bg-white rounded-lg shadow-custom p-6 my-4">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Carbon 8,5 m</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Carbon 8,5 m" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">520 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Oboustranné</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card5" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card5')"
            >
              Více...
            </button>
          </div>
        
<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card5" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Carbon</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">4</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">458</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">70</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">50</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">860</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">442 x 850</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Šestá karta -->
<div class="bg-white rounded-lg shadow-custom p-6 my-4">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Antracit 8,5 m</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Antracit 8,5 m" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">520 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Oboustranné</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card6" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card6')"
            >
              Více...
            </button>
          </div>
        
<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card6" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Antracit</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">4</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">458</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">70</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">500</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">860</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">442 x 850</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Sedmá karta -->
<div class="bg-white rounded-lg shadow-custom p-6 my-4">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Carbon 8,5 m jednokolej P</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Carbon 8,5 m jednokolej P" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">500 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Jednokolej P</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card7" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card7')"
            >
              Více...
            </button>
          </div>
        
<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card7" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Carbon</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">4</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">458</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">70</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">500</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">860</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">442 x 850</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

<!-- Osmá karta -->
        <div class="bg-white rounded-lg shadow-custom p-6 my-4">
          <!-- Hlavní obsah karty -->
          <div class="grid md:grid-cols-2 gap-4"> 
            <div>
              <h3 class="text-base sm:text-lg font-semibold mb-4">Casablanka infinity Carbon 8,5 m jednokolej L</h3>
              <img 
                src="assets/image/bazenove-zastreseni-casablanka.png" 
                alt="Casablanka infinity Carbon 8,5 m jednokolej L" 
                class="w-full h-auto rounded-lg mb-4"
              >
            </div>

            <div>
              <table class="table-auto w-full mb-4 border-b text-sm sm:text-base">
                <thead>
                  <tr>
                    <th class="px-4 py-2 text-left font-medium">Parametr</th>
                    <th class="px-4 py-2 text-left font-medium">Hodnota</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Typ kolejnice</td>
                    <td class="px-4 py-2 border-b">AIR</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Prodloužení kolejí</td>
                    <td class="px-4 py-2 border-b">250 cm</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Váha produktu</td>
                    <td class="px-4 py-2 border-b">500 kg</td>
                  </tr>
                  <tr class="hover:bg-sky-200">
                    <td class="px-4 py-2 border-b">Varianta kolejí</td>
                    <td class="px-4 py-2 border-b">Jednokolej L</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- Odkaz pro rozbalení -->
          <div class="text-right">
            <button 
              id="toggleButton_card8" 
              class="text-black text-sm hover:font-semibold font-medium sm:text-base hover:underline focus:outline-none mt-4"
              onclick="toggleDetails('card8')"
            >
              Více...
            </button>
          </div>
        
<!-- Další parametry, skryté ve výchozím stavu -->
          <div id="additionalDetails_card8" class="hidden mt-6">
            <table class="table-auto w-full text-sm sm:text-base">
              <tbody>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Barva konstrukce</td>
                  <td class="px-4 py-2 border-b">Carbon</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Druh výplně</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Počet modulů</td>
                  <td class="px-4 py-2 border-b">4</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zvýšení spodní hrany čel [cm]</td>
                  <td class="px-4 py-2 border-b">9,5</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Zadní čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Napevno</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnitřní šířka zastřešení "A" [cm]</td>
                  <td class="px-4 py-2 border-b">458</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější výška zastřešení "V" [cm]</td>
                  <td class="px-4 py-2 border-b">70</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější šířka zastřešení "B" [cm]</td>
                  <td class="px-4 py-2 border-b">500</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Vnější délka zastřešení "E" [cm]</td>
                  <td class="px-4 py-2 border-b">860</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina předního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Krytina zadního čela</td>
                  <td class="px-4 py-2 border-b">Čírý polykarbonát 4 mm</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Maximální zastřešená plocha cm [ŠxD]</td>
                  <td class="px-4 py-2 border-b">442 x 850</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Přední čelo zastřešení</td>
                  <td class="px-4 py-2 border-b">Odnímatelné, bez dveří</td>
                </tr>
                <tr class="hover:bg-sky-200">
                  <td class="px-4 py-2 border-b">Boční vstup</td>
                  <td class="px-4 py-2 border-b">V největším modulu, 4 možnosti umístění</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        
        
      </div>
    </div>
  </section>
  
  <?php include "footer/footer.php"; ?>

  <script src="assets/scripts/script.js"></script>

  <script>
  function toggleDetails(cardId) {
    const additionalDetails = document.getElementById(`additionalDetails_${cardId}`);
    const button = document.getElementById(`toggleButton_${cardId}`);  // Získáme tlačítko
    const isHidden = additionalDetails.classList.contains('hidden');
  
    if (isHidden) {
      additionalDetails.classList.remove('hidden');
      button.textContent = 'Méně...';  // Změna textu na "Méně..."
    } else {
      additionalDetails.classList.add('hidden');
      button.textContent = 'Více...';  // Změna textu na "Více..."
    }
  }
</script>

</body>
</html>
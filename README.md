[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-c66648af7eb3fe8bc4f294546bfd86ef473780cde1dea487d3c4ff354943c9ae.svg)](https://classroom.github.com/online_ide?assignment_repo_id=7890324&assignment_repo_type=AssignmentRepo)
# Vlastní webová stránka

Vytvořte vlastní malý tématický web pomocí HTML a CSS. Toto zadání slouží jako závěrečná práce a finální rekapitulace probraného učiva webové větve předmětu ALGoritmizace.

Web může a musí být na libovolné přijatelné téma. Pokud Vás žádné téma nenapadá, použijte téma referátu na IKT. Text ani obrázky nemusí být nutně Vaše.

Pro pojmenování tříd je doporučená metodika [BEM](http://getbem.com/introduction/).

Editací tohoto souboru a náhradou ``[ ]`` za ``[x]`` můžete evidovat, které body zadání už máte splněné.

## Body zadání

### HTML, struktura souborů [ ]

* [X] HTML kód je validní bez chyb ve [validátoru](https://validator.w3.org/)
* [X] HTML značky dávají smysl, kód obsahuje ``<article>``, ``<section>``, ``<header>``, ``<nav>``. 
* [X] Navigace mezi stránkami je tvořená přes ``<nav><ul><li><a>`` a je funkční i po zkopírování na lokální disk
* [X] Soubory webu jsou členěny do složek (např. ``/styles``, ``/images``, ``/fonts``)
* [X] Soubory webu se nacházejí v GitHubovém repozitáři
* [X] V repozitáři se soubory ocitly pomocí commitů a pushů a těch je více než 3, rozprostřených do celé doby vypracovávání zadání
* [X] Web je dostupný přes Github Pages (do README.md přidejte odkaz) 
#### Odkaz: https://pslib-cz.github.io/2021-p1b-web-vlastni-web-Fuficek/
* [X] Celková načítaná velikost jednotlivých stránek nepřesahuje jednotky MiB ## index.html má stahovanou velikost 1.9 MB
#### ![image](https://user-images.githubusercontent.com/91286763/170575033-0327c3dd-c176-4cf5-be5b-ac38998d36b4.png)


### CSS, vzhled [ ]

* [X] Stránky používají několik souborů stylů, jeden z nich je [normalize](https://necolas.github.io/normalize.css/)
* [X] Ke stránkám jsou připojeny externí fonty (např. přes [Google Fonts](https://fonts.google.com/))
* [X] Stránka obsahuje horizontální nebo vertikální menu s odkazy na celou plochu nabídky
* [X] Vzhled stránek je zamýšlen na mobilní telefon pro rozměr od cca 360px do 960px. Content-wrapper má omezení na ``max-width: 960px; margin: 0 auto;``
* [X] Obrázky mají rozumnou velikost pro mobilní telefon
* [X] Velikosti písem jsou odvozeny od kořenového elementu 
* [X] Velikosti mezer kolem prvku jsou odvozeny od velikosti písma elementu 
* [X] Web používá omezenou paletu barev a mezer (lze zajistit přes [proměnné v CSS](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties))
* [X] Barevné schéma je vkusné a odpovídá tématu. Inspiraci můžete čerpat z [editoru palet](https://coolors.co/palettes/trending)
* [X] Šířka hlavního bloku stránky je omezená (tedy používá například ``width``, ``margin``, ``max-width``)
* [X] Web obsahuje obrázek v záhlaví zobrazovaný na celou velikost/výšku obrazovky ## použit parallax
````    
.main-header {
    background-image: url(img_bg.jpg);
    min-height: 100vh;
}
````
* [X] Styly definují vzhled prvků podle typografických zvyklosti (velikosti nadpisů, formát odstavců)
* [X] Odkazy (například menu) využívají efekt ``hover`` ## Ikonky v navbaru využívají efekt hover
* [X] Za nebo před odkazy v textu je přidána ikonka (např. šipka) (využití ``::before`` nebo ``::after``) ## ::before je použito v seznamu zdrojů, ::after je použito u parallaxu

### Vyzkoušejte nad rámec probrané látky [ ]

Po splnění předchozích bodů

* [X] Na webu je použitý jednoduchý efekt [paralaxního obrázku](https://www.w3schools.com/howto/howto_css_parallax.asp) ## Parallax jsem si udělal sám. Jelikož jsem ho používal už dříve tak jsem si ho zkopíroval z jednoho mého staršího projektu a upravil do této stránky
* [X] Pro layout stránky je použit [flex](https://css-tricks.com/snippets/css/a-guide-to-flexbox/) ## Snažil jsem se vyhnout position: absolute;, flex jsem použil kvůli jeho jednoduchosti přizpůsobení stránky na mobilní zařízení
* [ ] Jsou použity ikonky přes Font Awesome nebo [IcoMoon](https://icomoon.io/) ## Nenašel jsem pro to využití *(zatím)*
* [ ] vytvořte galerii obrázků tvořenou náhledy vedle sebe (``display: flex`` nebo ``inline-block``)
* [X] Použijte pozadí přes lineární nebo radiální gradient ## pozadí je animováno, linear gradient byl původní nápad (main.css řádek 37), ale nepřišlo mi to vkusné
* [X] + jakékoli další vylepšení, kterým chcete zanechat přetrvávající dojem 
#### Nějaké z vylepšení které se vyskytují na stránce
* scroll bar
* css animace pozadí a neon efekt blikání
* speciální text na kartě stránky vytvořen pomocí Unicode znaků
* šipky které ukazují že směr stránky je dolů a navádí ke scrollování, NEJSOU MOJE! -> https://codepen.io/raf187/pen/BvgGRQ  přišlo mi že se tam hodí, 


## Kde hledat řešení a inspiraci?

* [CSS Tricks Guides](https://css-tricks.com/guides/)
* [Metodika BEM](http://getbem.com/introduction/)

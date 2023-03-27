<?php
$product_list = render_products(10);
?>
<div class="text-emerald-900">
    <!-- navbar -->
    <?= do_shortcode("[views section=general name=navbarView]"); ?>
    <header class="py-10 lg:py-20 w-11/12 mx-auto">
        <!-- title -->
        <div class="flex flex-col sm:flex-row justify-center items-center pb-10 gap-10 lg:gap-20 ">
            <div class="max-w-2xl text-left">
                <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold md:font-bold text-emerald-600 mb-1 md:mb-5">
                    <span class="text-pink-600">Benvenuti nella</span> </br> <span class="highlight"> Merceria Creativa Tania, </span> </br>
                    <p class="text-lg md:text-xl lg:text-2xl xl:text-3xl">il tuo negozio online per il cucito creativo.</p>
                </h1>
                <a href="#" class="bg-emerald-600 inline-flex items-center justify-center rounded-lg py-3 px-6 text-center text-base font-medium text-white hover:bg-opacity-90">
                    <!-- <span class="mr-[10px]">
                        <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
                            <path d="M18.0738 0.849609H16.0676C15.8171 0.850867 15.5754 0.942155 15.3867 1.10681C15.1979 1.27146 15.0747 1.4985 15.0394 1.74648L14.4769 5.80898H13.3957V3.40273C13.3933 3.16503 13.2982 2.93766 13.1307 2.76899C12.9632 2.60031 12.7365 2.50367 12.4988 2.49961H10.0801C10.0533 2.27727 9.94785 2.07185 9.78277 1.92052C9.61769 1.7692 9.40389 1.68196 9.18007 1.67461H6.45194C6.3269 1.67779 6.20376 1.70595 6.08977 1.75745C5.97578 1.80895 5.87325 1.88274 5.78821 1.97447C5.70318 2.0662 5.63736 2.17402 5.59464 2.29158C5.55191 2.40914 5.53315 2.53406 5.53944 2.65898V3.32461H3.14882C2.91201 3.32126 2.68348 3.41171 2.51312 3.57622C2.34275 3.74073 2.24437 3.96595 2.23944 4.20273V5.81211C2.09795 5.81502 1.95882 5.84901 1.83192 5.91165C1.70501 5.97429 1.59343 6.06406 1.50507 6.17461C1.41421 6.29057 1.35071 6.42556 1.31933 6.5695C1.28794 6.71343 1.28948 6.8626 1.32382 7.00586C1.32248 7.02146 1.32248 7.03714 1.32382 7.05273L3.23632 12.9371C3.29128 13.1429 3.41335 13.3244 3.58318 13.4529C3.753 13.5814 3.96087 13.6495 4.17382 13.6465H13.3863C13.7359 13.6461 14.0736 13.5193 14.3372 13.2896C14.6008 13.0599 14.7725 12.7428 14.8207 12.3965L16.2488 2.09961H18.0707C18.2365 2.09961 18.3954 2.03376 18.5126 1.91655C18.6298 1.79934 18.6957 1.64037 18.6957 1.47461C18.6957 1.30885 18.6298 1.14988 18.5126 1.03267C18.3954 0.915457 18.2365 0.849609 18.0707 0.849609H18.0738ZM12.1363 5.79336H10.0926V3.74961H12.1457L12.1363 5.79336ZM6.78944 2.91523H8.84257V3.39961V5.79023H6.78944V2.91523ZM3.48944 4.56523H5.53944V5.79336H3.48944V4.56523ZM13.5832 12.2246C13.5771 12.2724 13.5537 12.3163 13.5174 12.3479C13.4811 12.3796 13.4345 12.3969 13.3863 12.3965H4.37382L2.65194 7.04961H14.3019L13.5832 12.2246Z"></path>
                            <path d="M5.31172 15.1133C4.9118 15.1102 4.51997 15.226 4.18594 15.4459C3.85191 15.6659 3.59073 15.9801 3.43553 16.3487C3.28034 16.7173 3.23813 17.1236 3.31425 17.5163C3.39037 17.9089 3.58139 18.2701 3.86309 18.5539C4.14478 18.8378 4.50445 19.0317 4.89647 19.1108C5.28849 19.19 5.6952 19.1509 6.06499 18.9986C6.43477 18.8463 6.75099 18.5876 6.97351 18.2553C7.19603 17.9229 7.31483 17.532 7.31485 17.1321C7.31608 16.868 7.26522 16.6062 7.16518 16.3617C7.06515 16.1172 6.91789 15.8949 6.73184 15.7074C6.5458 15.5199 6.3246 15.3709 6.08092 15.269C5.83725 15.167 5.57586 15.1142 5.31172 15.1133ZM5.31172 17.9008C5.15905 17.9039 5.00891 17.8615 4.88045 17.7789C4.75199 17.6964 4.65103 17.5774 4.59045 17.4373C4.52986 17.2971 4.51239 17.1421 4.54026 16.9919C4.56814 16.8418 4.64009 16.7034 4.74695 16.5943C4.85382 16.4852 4.99075 16.4104 5.14028 16.3795C5.28981 16.3485 5.44518 16.3628 5.58656 16.4205C5.72794 16.4782 5.84894 16.5767 5.93412 16.7034C6.0193 16.8302 6.06481 16.9794 6.06484 17.1321C6.06651 17.3338 5.9882 17.5279 5.84705 17.672C5.70589 17.8161 5.51341 17.8984 5.31172 17.9008Z"></path>
                            <path d="M12.9484 15.1133C12.5485 15.1102 12.1567 15.226 11.8227 15.4459C11.4886 15.6659 11.2274 15.9801 11.0723 16.3487C10.9171 16.7173 10.8748 17.1236 10.951 17.5163C11.0271 17.9089 11.2181 18.2701 11.4998 18.5539C11.7815 18.8378 12.1412 19.0317 12.5332 19.1108C12.9252 19.19 13.3319 19.1509 13.7017 18.9986C14.0715 18.8463 14.3877 18.5876 14.6102 18.2553C14.8327 17.9229 14.9516 17.532 14.9516 17.1321C14.9532 16.5989 14.7432 16.0868 14.3676 15.7083C13.9921 15.3298 13.4816 15.1158 12.9484 15.1133ZM12.9484 17.9008C12.7958 17.9039 12.6456 17.8615 12.5172 17.7789C12.3887 17.6964 12.2878 17.5774 12.2272 17.4373C12.1666 17.2971 12.1491 17.1421 12.177 16.9919C12.2049 16.8418 12.2768 16.7034 12.3837 16.5943C12.4905 16.4852 12.6275 16.4104 12.777 16.3795C12.9265 16.3485 13.0819 16.3628 13.2233 16.4205C13.3647 16.4782 13.4857 16.5767 13.5708 16.7034C13.656 16.8302 13.7015 16.9794 13.7016 17.1321C13.7032 17.3338 13.6249 17.5279 13.4838 17.672C13.3426 17.8161 13.1501 17.8984 12.9484 17.9008Z"></path>
                        </svg>
                    </span> -->
                    Scopri di più
                </a>
            </div>
            <!-- image -->
            <div class="max-w-xs lg:max-w-sm xl:max-w-md rounded-lg shadow-lg shadow-pink-600">
                <img src="<?= get_image_path("fotoHeader.jpeg"); ?>" alt="Header Image">
            </div>
        </div>
        <!-- brand -->
        <div class="flex justify-center items-center gap-10">
            <?php
            $logos = [
                "vlieseline.png", "adriafil.png", "iNastriDiMirta.png", "renkalik.webp"
            ];
            foreach ($logos as $logo) {
                $imagePath = get_image_path("logo/logo-$logo");
            ?>
                <div class='w-32 h-32 flex justify-center items-center'><img class='block' src="<?= $imagePath; ?>" alt='logo-<?= $logo; ?> '></div>
            <?php
            }
            ?>
        </div>
    </header>
    <main>
        <!-- welcome phrase -->
        <section class="section opacity-0 translate-y-52 duration-1000 py-5 flex flex-col items-center px-5 md:px-10 bg-pink-50">
            <div class="flex justify-center mx-auto py-5 w-11/12">
                <div class="flex flex-col md:grid md:grid-cols-3 max-w-5xl text-left">
                    <div class="col-span-1 p-2 lg:p-5">
                        <p class="text-xl md:text-2xl lg:text-3xl xl:text-4xl">Stai cercando <span class="text-pink-600 font-semibold">prodotti unici</span> per dare sfogo alla tua <span class="text-pink-600 font-semibold"> creatività</span>?</p>
                    </div>
                    <div class="col-span-2 p-2 lg:p-5">
                        <p class="lg:text-lg xl:text-xl mb-5">Sì, io, Merceria Creativa Tania, sono il luogo giusto per te. Offro una vasta scelta di tessuti di alta <span class="font-bold">qualità</span>, bottoni <span class="font-bold">esclusivi</span> e accessori per soddisfare il tuo <span class="font-bold">desiderio</span> di creare. Sono certa che troverai ciò che stai cercando per realizzare progetti <span class="font-bold">originali</span> e <span class="font-bold">straordinari</span>.</p>
                        <p class="text-xl xl:text-2xl text-pink-600 font-semibold">Vieni a scoprire il mio mondo della creatività!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- best-selling products -->
        <section class="section opacity-0 translate-y-52 duration-1000 py-5 flex flex-col items-center px-5 md:px-10">
            <div class="flex flex-col max-w-7xl mx-auto overflow-hidden w-11/12">
                <div class="flex flex-col">
                    <div class="flex flex-col items-start md:grid md:grid-cols-2 md:px-5 md:items-center text-left py-5">
                        <h2 class="text-2xl font-black text-emerald-600 md:text-3xl lg:text-4xl">Prodotti più venduti</h2>
                        <p class="text-xl text-pink-600 flex justify-end items-center gap-1">
                            Vedi tutti i prodotti
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </p>
                    </div>
                    <div class="carousel flex justify-start items-center gap-5 relative mx-auto"> <!-- overflow-x-auto -->
                        <?php
                        // ciclo foreach per stampare i prodotti
                        foreach ($product_list as $product) {
                            echo $this->SetGeneralsShortCodesParams(["section" => "general", "name" => "cardView", "params" => $product]);
                        } ?>
                    </div>
                    <div class="flex justify-end items-center gap-5 py-5">
                        <button type="button" id="prev" class="text-white bg-emerald-600 hover:text-white hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-emerald-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 rotate-180">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <button type="button" id="next" class="text-white bg-emerald-600 hover:text-white hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-emerald-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section opacity-0 translate-y-52 duration-1000 py-10 lg:py-20 flex flex-col items-center bg-pink-50">
            <!-- call to action -->
            <div class="flex flex-col items-center gap-5 w-11/12 mx-auto ">
                <div class="flex items-center text-left mb-5">
                    <div class="p-4 border-emerald-600 border-r-2">
                        <h3 class="lg:text-4xl md:text-3xl sm:text-2xl text-sm">Ecco perché scegliere <span class="font-black">noi</span></br> per i tuoi acquisti online:</h3>
                    </div>
                    <div class="p-4">
                        <h3 class="lg:text-4xl md:text-3xl sm:text-2xl text-sm  text-left items-center">spedizione rapida e <br> gratuita sopra i 79€</h3>
                    </div>
                </div>
                <div class="max-w-7xl flex text-left gap-5">
                    <?php
                    $data = [
                        [
                            "img_src" => "package.svg",
                            "h5" => "Spedizione gratuita",
                            "p" => "gratis sopra i 79€",
                        ],
                        [
                            "img_src" => "delivery.svg",
                            "h5" => "Consegna rapida",
                            "p" => "in 24/48 ore",
                        ],
                        [
                            "img_src" => "operator-support.svg",
                            "h5" => "Assistenza clienti",
                            "p" => "disponibile 24/7",
                        ],
                    ];
                    foreach ($data as $d) {
                        $image_path = get_image_path("svg/" . $d["img_src"]); ?>
                        <div class="flex items-center gap-1">
                            <img class="w-8 h-8 md:h-12 md:w-12 lg:h-20 lg:w-20" src="<?php echo $image_path; ?>" alt="">
                            <div>
                                <h5 class="text-xs sm:text-base md:text-lg lg:text-2xl xl:text-3xl font-semibold"><?php echo $d["h5"]; ?></h5>
                                <p class="text-[10px] md:text-md lg:text-xl"><?php echo $d["p"]; ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </section>
        <section class="section opacity-0 translate-y-52 duration-1000 py-10 lg:py-20 flex flex-col w-11/12 max-w-7xl mx-auto">
            <div class="md:px-5 py-5">
                <h2 class="font-black lg:text-4xl md:text-3xl md:text-left text-2xl text-center text-emerald-600">Categorie</h2>
            </div>
            <div class="md:px-5 flex flex-wrap md:justify-between justify-around gap-1">
                <?php
                $data = [
                    ["img_src" => "lana.jpeg", "h5" => "Lana"],
                    ["img_src" => "uncinetto.jpeg", "h5" => "Uncinetto"],
                    ["img_src" => "tessuti.jpeg", "h5" => "Tessuti"],
                    ["img_src" => "faiDaTeCreativo.jpeg", "h5" => "Fai da te creativo"]
                ];
                foreach ($data as $d) {
                    $image_path = get_image_path($d["img_src"]); ?>
                    <div class="relative rounded-xl">
                        <img class="2xl:h-80 2xl:w-72 w-screen h-24 sm:w-32 sm:h-52 md:w-40 lg:h-72 lg:w-52 object-cover rounded-xl  xl:h-80 xl:w-64" src="<?= $image_path ?>" alt="">
                        <div class="absolute inset-0 bg-black opacity-50 rounded-xl"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h5 class="text-white text-3xl sm:text-2xl md:text-3xl lg:text-4xl 2xl:text-5xl font-bold text-center z-10"><?= $d["h5"] ?></h5>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <!-- news letter -->
        <section class="section opacity-0 translate-y-52 duration-1000">
            <?= do_shortcode("[views section=general name=newsletterView]"); ?>
        </section>
        <section class="section opacity-0 translate-y-52 duration-1000">
            <?= do_shortcode("[views section=reviews name=reviewsViews]"); ?>
        </section>
        <!-- reviews -->
    </main>
</div>
<?= do_shortcode("[views section=footer name=footerView]"); ?>
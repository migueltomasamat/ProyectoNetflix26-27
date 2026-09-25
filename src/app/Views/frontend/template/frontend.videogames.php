<!-- Row 3: Videojuegos destacados de Netflix (Interactive Gaming Section) -->
<section
    class="flex flex-col gap-space-md group/row relative px-margin-mobile md:px-margin-tablet xl:px-margin bg-surface-container-lowest/80 py-space-xl rounded-xl mx-2 md:mx-6 shadow-2xl">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-space-xs text-tertiary">
                <span class="material-symbols-outlined text-[22px]">sports_esports</span>
                <span class="font-label-sm text-label-sm font-black uppercase tracking-wider">Juegos móviles y de consola</span>
            </div>
            <h2 class="font-headline-xl text-headline-xl text-on-surface font-extrabold flex items-center gap-2">
                Videojuegos destacados de Netflix
            </h2>
            <div class="flex flex-wrap items-center gap-space-md text-body-sm text-body-sm text-on-surface-variant mt-1">
                            <span class="flex items-center gap-1 text-secondary"><span
                                    class="material-symbols-outlined text-[16px]">check_circle</span> Incluido con tu suscripción</span>
                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">block</span> Sin anuncios ni micropagos</span>
                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">cloud_sync</span> Cloud Play / Descarga directa</span>
            </div>
        </div>
        <div class="flex items-center gap-2 self-end md:self-center">
            <button aria-label="Anterior juego"
                    class="w-9 h-9 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                    onclick="scrollRow('games-row', -1)">
                <span class="material-symbols-outlined text-[20px]">arrow_back</span>
            </button>
            <button aria-label="Siguiente juego"
                    class="w-9 h-9 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                    onclick="scrollRow('games-row', 1)">
                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
            </button>
        </div>
    </div>
    <!-- Gaming Grid Row with Custom Vertical Aspect Badges -->
    <div class="grid grid-flow-col auto-cols-[78%] sm:auto-cols-[44%] md:auto-cols-[30%] lg:auto-cols-[22%] xl:auto-cols-[18.5%] gap-gutter overflow-x-auto no-scrollbar scroll-smooth pt-2 pb-3"
         id="games-row">
        <!-- Game 1: Hades -->
        <div class="group relative flex flex-col bg-surface-container rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_12px_30px_rgba(229,9,20,0.25)] cursor-pointer">
            <div class="relative aspect-[3/4] w-full overflow-hidden bg-surface-container-high">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     data-alt="Action RPG video game artwork featuring a fiery Greek mythology hero holding an incandescent flaming blade standing amidst stylized dark underworld magma streams, demonic skulls, and ornate baroque blood-red pillars. Vibrant comic-book artstyle with high contrast."
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmDZR83eJbDj04y3vwA4Uht-YLRvwPeh0OuzsxBlguT2PrDIDGFudZ6Xig09oyE_q8xy1KXzPpwsIasweyk1HKmwwRWdtsWbAfD8cFetn6FKmcxL9g5gbozQ95r22sOFrJKfpwGjyJyH_8jdoNU2gbKaIwVQYcU_MJ_Sni-WcT1WcewwlU0_y_NPR5r4cNL7WQzkrfLmgJOnr-K5Wu1iCkA6d23P8pIl9UWn0oh1jSxLOClXlohSMG"/>
                <div class="absolute top-2 left-2 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-bold text-tertiary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[12px]">gamepad</span> Netflix Edition
                </div>
                <div class="absolute bottom-2 right-2 bg-primary-container text-white px-2 py-1 rounded text-badge-spec font-bold uppercase shadow-lg">
                    Jugar ahora
                </div>
            </div>
            <div class="p-space-sm flex flex-col gap-1">
                <h4 class="font-headline-md text-[16px] font-bold text-on-surface group-hover:text-tertiary transition-colors">
                    Hades: Nether Realm</h4>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Roguelike • Acción Hack &amp; Slash</span>
            </div>
        </div>
        <!-- Game 2: Oxenfree II -->
        <div class="group relative flex flex-col bg-surface-container rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_12px_30px_rgba(114,213,225,0.25)] cursor-pointer">
            <div class="relative aspect-[3/4] w-full overflow-hidden bg-surface-container-high">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     data-alt="Eerie supernatural narrative adventure video game artwork. A young woman standing on a foggy Pacific Northwest coastline holds an old transistor radio emitting mysterious glowing electromagnetic radio waves into a storm-darkened twilight sky. Neon teal and violet chromatic aberration."
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbuPnB4ZnfdR6OfXxc5acg6w5931ApoA5_O7ljUuFco0wFA3q5Amm7-rdYswJOEZ-bBRKcB6mRv_i5JonygjYlZeEZgZC0BCOA5pOr1UBLjscxnDl0dDokNY4DU28VE9D984wX-BULVprAiKYwFmWxBUhSkH_Az2jWrzykTSzTgpG2k-Psj4RenA9WWMy8mKuTeUByQPZjLnMT1yUNLxZn1oZEDztfwfOcC2tX-VkDHKt3QOKyLi1x"/>
                <div class="absolute top-2 left-2 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-bold text-tertiary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[12px]">gamepad</span> Exclusivo
                </div>
                <div class="absolute bottom-2 right-2 bg-white text-black px-2 py-1 rounded text-badge-spec font-bold uppercase shadow-lg">
                    Instalar
                </div>
            </div>
            <div class="p-space-sm flex flex-col gap-1">
                <h4 class="font-headline-md text-[16px] font-bold text-on-surface group-hover:text-tertiary transition-colors">
                    Oxenfree II: Lost Signals</h4>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Narrativo • Misterio Sci-Fi</span>
            </div>
        </div>
        <!-- Game 3: Dead Cells -->
        <div class="group relative flex flex-col bg-surface-container rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_12px_30px_rgba(85,224,116,0.25)] cursor-pointer">
            <div class="relative aspect-[3/4] w-full overflow-hidden bg-surface-container-high">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     data-alt="Pixel-art stylized dark fantasy video game poster. A headless rogue prisoner with a blazing purple flame head wielding twin daggers stands over the ruins of a sprawling medieval Gothic castle under a blood moon. Fast-paced roguevania mood."
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAQQbBY7UwYUDIfpJKaViSGBqqW2bQe44ULiHn3LbifOezZag2kGuRUA9-xxpMmpzQfkf8K2H49H5d60BOhyNviIbwTfaFpg4QXyVZ5JmJr4Oypvybb8mKCbjuwJESZt1y30YV7IRMLTfg5eeJGZWl_A2v8N4LwLVx21ambSzEV7u3Ujz5jtOfnf0Ehtm5tv6xIbD1FF9GsGt3buWvMbUnz9dJRkhaVBuYndOs8XAerr95j2R_rVOv"/>
                <div class="absolute top-2 left-2 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-bold text-tertiary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[12px]">gamepad</span> DLCs Incluidos
                </div>
                <div class="absolute bottom-2 right-2 bg-primary-container text-white px-2 py-1 rounded text-badge-spec font-bold uppercase shadow-lg">
                    Jugar ahora
                </div>
            </div>
            <div class="p-space-sm flex flex-col gap-1">
                <h4 class="font-headline-md text-[16px] font-bold text-on-surface group-hover:text-tertiary transition-colors">
                    Dead Cells: Immortality</h4>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Metroidvania • Combate 2D</span>
            </div>
        </div>
        <!-- Game 4: GTA San Andreas -->
        <div class="group relative flex flex-col bg-surface-container rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer">
            <div class="relative aspect-[3/4] w-full overflow-hidden bg-surface-container-high">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     data-alt="Classic west coast 90s city video game poster in vibrant vector illustration. Lowrider cars parked under palm trees with golden California sunset reflecting on polished chrome. Urban open world game aesthetic."
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw9tG83TMvcC9xOihygZZFVBOWiGFFg76E1GiY2DRNhz_fYQXvFkzpgkwAQFtSZ5FQJVAZYoBVzQHY0T6aYggopQFZVLOMdQHnmBXNEfoIdZq4WtAePRAPbHaWeGjHIei6jvmllkUtvOFLL_jY1Wsxr_dYRurdP77-b1NIgoSbMMm41FPhQ8U3o4OdMwyuonKaswT49YEgnIVIQ9e3lvTdnR7JerHGtl6p8_g8MzcKGUCOq6pHcObe"/>
                <div class="absolute top-2 left-2 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-bold text-tertiary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[12px]">gamepad</span> Definitive Edition
                </div>
                <div class="absolute bottom-2 right-2 bg-primary-container text-white px-2 py-1 rounded text-badge-spec font-bold uppercase shadow-lg">
                    Jugar ahora
                </div>
            </div>
            <div class="p-space-sm flex flex-col gap-1">
                <h4 class="font-headline-md text-[16px] font-bold text-on-surface group-hover:text-tertiary transition-colors">
                    GTA: San Andreas</h4>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Mundo Abierto • Clásico</span>
            </div>
        </div>
        <!-- Game 5: Stranger Things 1984 -->
        <div class="group relative flex flex-col bg-surface-container rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer">
            <div class="relative aspect-[3/4] w-full overflow-hidden bg-surface-container-high">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     data-alt="Retro 16-bit arcade video game illustration featuring four kids on bicycles looking toward a shadowy paranormal laboratory fence under red lightning storm clouds. Authentic 1980s retro synthwave gaming vibe."
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuA58DGruTieYXig0JFwU90Lb-qp3j62UQzuumToupUV2fcKf4L4I2euDLEyZkO2DUyLJ1kq03z8i0O_uOjT3IGBN12MZINXvHGhgrY18nYjq7htUABxEi3_N6Qf5XO45FU7gvm8WjPiOKdXEl2GhgO_frvfwz0dpUal0YUL4F-fmdThErZGcz__UPdK0129vVUx0Kcw8RSxZZcbdsnQ2zyvxTsyzLtILkgfQvWFtwed9ei6oztaN1xo"/>
                <div class="absolute top-2 left-2 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-bold text-tertiary flex items-center gap-1">
                    <span class="material-symbols-outlined text-[12px]">gamepad</span> Retro Arcade
                </div>
                <div class="absolute bottom-2 right-2 bg-white text-black px-2 py-1 rounded text-badge-spec font-bold uppercase shadow-lg">
                    Instalar
                </div>
            </div>
            <div class="p-space-sm flex flex-col gap-1">
                <h4 class="font-headline-md text-[16px] font-bold text-on-surface group-hover:text-tertiary transition-colors">
                    Stranger Things: 1984</h4>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Aventura • Puzzle &amp; Acción</span>
            </div>
        </div>
    </div>
</section>

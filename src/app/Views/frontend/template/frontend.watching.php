    <!-- Row 1: Continuar viendo para Carlos -->
    <section
        class="flex flex-col gap-space-sm group/row relative px-margin-mobile md:px-margin-tablet xl:px-margin">
        <div class="flex items-center justify-between">
            <div class="flex items-baseline gap-space-sm">
                <h2 class="font-headline-lg text-headline-lg text-on-surface hover:text-white transition-colors cursor-pointer flex items-center gap-1">
                    Continuar viendo para Carlos
                    <span class="material-symbols-outlined text-[18px] text-tertiary opacity-0 group-hover/row:opacity-100 transition-opacity">chevron_right</span>
                </h2>
            </div>
            <div class="flex items-center gap-1 opacity-0 group-hover/row:opacity-100 transition-opacity">
                <button aria-label="Anterior"
                        class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                        onclick="scrollRow('continue-row', -1)">
                    <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                </button>
                <button aria-label="Siguiente"
                        class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                        onclick="scrollRow('continue-row', 1)">
                    <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                </button>
            </div>
        </div>
        <!-- Carousel Cards Track -->
        <div class="grid grid-flow-col auto-cols-[82%] sm:auto-cols-[46%] md:auto-cols-[31%] lg:auto-cols-[23.5%] gap-gutter overflow-x-auto no-scrollbar scroll-smooth py-2"
             id="continue-row">
            <!-- Continue Card 1 -->
            <div class="flex flex-col bg-surface-container-low rounded-lg overflow-hidden group shadow-lg transition-transform duration-300 hover:scale-[1.03] hover:z-20">
                <div class="relative aspect-video w-full overflow-hidden bg-surface-container-lowest">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         data-alt="Moody dark thriller crime scene in an abandoned subway station with flickering halogen lights, deep shadows, and wet concrete reflections. Two detectives examine an illuminated bio-organic artifact on the tracks. Atmospheric mist, cool teal and warm amber cinematic highlights."
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOXbTi6D9jaKBvCIEWGlsRM88e8UjHlOSU6tkXXhMLndikZ17tO7VkxevxWHeYuRPNCTCQSIrWMtgIuYoc4TLUgZWpSP00ONLUnW07aMVtzGFQnTSEjvwxAIe7I5Lxc4JpnuX5xpYrVSR8K9fBeqyMOVOXRjnCQs8AbZvYa6cdVY6Cio3U57E1UPP36tvtXOgBd3aulEzSLvtNNI5Ezy-cdXFCBJnOI7hI8pswruniF_Qjk0tIgcIv"/>
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="w-12 h-12 rounded-full bg-white text-black flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]"
                                          style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        </button>
                    </div>
                    <!-- Progress Bar -->
                    <div class="absolute bottom-0 inset-x-0 h-1 bg-surface-variant">
                        <div class="h-full bg-primary-container" style="width: 72%;"></div>
                    </div>
                </div>
                <div class="p-space-sm flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="font-headline-md text-[15px] font-bold text-on-surface truncate">Stranger Mysteries</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">T2:E4</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">thumb_up</span></button>
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">info</span></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between font-body-sm text-body-sm text-on-surface-variant">
                        <span>Quedan 24 min</span>
                        <span class="font-badge-spec text-badge-spec px-1 bg-surface-container-high rounded text-on-surface">HD</span>
                    </div>
                </div>
            </div>
            <!-- Continue Card 2 -->
            <div class="flex flex-col bg-surface-container-low rounded-lg overflow-hidden group shadow-lg transition-transform duration-300 hover:scale-[1.03] hover:z-20">
                <div class="relative aspect-video w-full overflow-hidden bg-surface-container-lowest">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         data-alt="Deep space exploration vessel drifting beside a colossal golden gas giant with intricate crystalline planetary rings. Distant stars and a cold cosmic nebula illuminate the metallic hull of the spaceship. Cinematic sci-fi epic, realistic stellar lighting."
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnKiXI-kpPgO9X0UBza3eXUwKNApVOOnu_-VeSMbpEeVGHKaTR2Yc7Lr4H3MpmTEHI5JiVHyx3Zi0vpTgqW60xUyYa6uj9PrFhFYfJ7qEP6vVHFLH_BkoGSd9Jrp47Hw4D8Iko_MeHolq92Kbj0eTKHBFIPmBohN4DNzIEj9icNnMKliIERFL79ix6Mo-h4frUNF4SEOpr_VrOk7tGY-dVmWfQ7ZLfjNJPc0mQrbWQCyHsLD0YKY6M"/>
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="w-12 h-12 rounded-full bg-white text-black flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]"
                                          style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        </button>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 h-1 bg-surface-variant">
                        <div class="h-full bg-primary-container" style="width: 40%;"></div>
                    </div>
                </div>
                <div class="p-space-sm flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="font-headline-md text-[15px] font-bold text-on-surface truncate">The Last Horizon</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">T1:E8</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">thumb_up</span></button>
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">info</span></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between font-body-sm text-body-sm text-on-surface-variant">
                        <span>Quedan 38 min</span>
                        <span class="font-badge-spec text-badge-spec px-1 bg-surface-container-high rounded text-on-surface">4K UHD</span>
                    </div>
                </div>
            </div>
            <!-- Continue Card 3 -->
            <div class="flex flex-col bg-surface-container-low rounded-lg overflow-hidden group shadow-lg transition-transform duration-300 hover:scale-[1.03] hover:z-20">
                <div class="relative aspect-video w-full overflow-hidden bg-surface-container-lowest">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         data-alt="Intense high-tech tactical cockpit with a pilot wearing neural interfaces surrounded by floating semi-transparent blue holographic tactical telemetry and data streams. Dark cockpit interior with ambient cockpit warning lights."
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKzoU2flEyKIGmJ1Y0jyjhbITwOo_vnJxtCraymA0GaDtvWixIgw3JWkeNE4fBIFkIj-rxXD8RafNWHQGn2p72CF_UBQ1F2Eef2vcec1wI-8RvlKX-U95yFpqig7e3W2XrMmdtFoDIMw0tuRgp5cHdoKl512BZksIplLOmUM7ybYSiASVbPBPxu0yQLxOK2ziMmq04bA_AKt_N32Ue9Qr9ZBa-U2CveU6GBs7fIHDRv9rnMfTEJ1Bp"/>
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="w-12 h-12 rounded-full bg-white text-black flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]"
                                          style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        </button>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 h-1 bg-surface-variant">
                        <div class="h-full bg-primary-container" style="width: 85%;"></div>
                    </div>
                </div>
                <div class="p-space-sm flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="font-headline-md text-[15px] font-bold text-on-surface truncate">Cyberpunk Protocol</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">T3:E2</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">thumb_up</span></button>
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">info</span></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between font-body-sm text-body-sm text-on-surface-variant">
                        <span>Quedan 11 min</span>
                        <span class="font-badge-spec text-badge-spec px-1 bg-surface-container-high rounded text-on-surface">HDR</span>
                    </div>
                </div>
            </div>
            <!-- Continue Card 4 -->
            <div class="flex flex-col bg-surface-container-low rounded-lg overflow-hidden group shadow-lg transition-transform duration-300 hover:scale-[1.03] hover:z-20">
                <div class="relative aspect-video w-full overflow-hidden bg-surface-container-lowest">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                         data-alt="Victorian London cobblestone alleyway enveloped in dense swirling fog under a moonlit sky. A lone silhouetted investigator with trench coat and fedora holds a glowing lantern examining mysterious glowing symbols etched on a stone wall."
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoaNK35bXaca1NnrNXcCd_PAAqqNcScjCrqAgQP01MrhNwYRzfGaHbotGvZMnRgUjX23WsYDWXCGnlLnQ92D7zWL6o95VIo3uGd7eCiDOV1baE6Ef1e3fK156-u_lzTpGCEEGSaok44BjOWblvW5PFmuWO13c9s7Y9fjrqk-AsqeY8Cwe7ZaYiieRtouTCRlgAVXktI6wQv950yfTnbIoEB4gOorbvxVpCR-Yfc0CpIqz-YmNduTPv"/>
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="w-12 h-12 rounded-full bg-white text-black flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]"
                                          style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        </button>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 h-1 bg-surface-variant">
                        <div class="h-full bg-primary-container" style="width: 25%;"></div>
                    </div>
                </div>
                <div class="p-space-sm flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="font-headline-md text-[15px] font-bold text-on-surface truncate">Shadow of Mayfair</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Película</span>
                        </div>
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">thumb_up</span></button>
                            <button class="p-1 hover:text-on-surface rounded-full transition-colors"><span
                                    class="material-symbols-outlined text-[18px]">info</span></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between font-body-sm text-body-sm text-on-surface-variant">
                        <span>Quedan 1h 12m</span>
                        <span class="font-badge-spec text-badge-spec px-1 bg-surface-container-high rounded text-on-surface">Dolby Vision</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
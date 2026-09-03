<div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-slate-950 via-[#061227] to-slate-950 border border-cyan-500/30 p-4 sm:p-6 shadow-[0_0_35px_rgba(0,217,255,0.12)]">
    <!-- Grid Overlay Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#00d9ff08_1px,transparent_1px),linear-gradient(to_bottom,#00d9ff08_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none"></div>

    <!-- Glowing Corner Accents -->
    <div class="absolute top-0 left-0 w-6 h-6 sm:w-8 sm:h-8 border-t-2 border-l-2 border-cyan-400"></div>
    <div class="absolute top-0 right-0 w-6 h-6 sm:w-8 sm:h-8 border-t-2 border-r-2 border-cyan-400"></div>
    <div class="absolute bottom-0 left-0 w-6 h-6 sm:w-8 sm:h-8 border-b-2 border-l-2 border-cyan-400"></div>
    <div class="absolute bottom-0 right-0 w-6 h-6 sm:w-8 sm:h-8 border-b-2 border-r-2 border-cyan-400"></div>

    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-4 sm:gap-6">
        <div class="space-y-2.5 sm:space-y-3 max-w-2xl text-left w-full">
            <div class="inline-flex items-center space-x-2 px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-400/30 text-cyan-300 text-[10px] sm:text-xs font-mono">
                <i class="fa-solid fa-shield-halved text-cyan-400"></i>
                <span class="font-semibold uppercase tracking-widest">DRDO & Indian Coast Guard Command Briefing</span>
            </div>
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-extrabold font-display text-white tracking-wide leading-tight">
                AI MARITIME INTELLIGENCE PLATFORM
            </h2>
            <p class="text-xs sm:text-sm text-slate-300 font-sans leading-relaxed">
                Real-time ocean oil spill monitoring using Synthetic Aperture Radar (SAR) imagery (Sentinel-1B & INSAT-3DS) combined with AIS ship movement correlation for offender identification and legal evidence generation.
            </p>
            
            <div class="flex flex-wrap items-center gap-2.5 sm:gap-3 pt-2">
                <button onclick="triggerLiveScan()" class="flex-1 sm:flex-none px-4 py-2.5 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-slate-950 font-mono font-bold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(0,217,255,0.4)] flex items-center justify-center space-x-2">
                    <i class="fa-solid fa-play"></i>
                    <span>START MONITORING</span>
                </button>
                <button onclick="openReportModal()" class="flex-1 sm:flex-none px-4 py-2.5 rounded-lg bg-slate-900/90 border border-cyan-400/40 text-cyan-300 hover:bg-cyan-500/10 hover:border-cyan-400 transition-all font-mono font-semibold text-xs tracking-wider uppercase flex items-center justify-center space-x-2">
                    <i class="fa-solid fa-microchip"></i>
                    <span>ANALYZE INCIDENT</span>
                </button>
            </div>
        </div>

        <!-- Right Radar Graphic Widget -->
        <div class="relative w-32 h-32 sm:w-40 sm:h-40 shrink-0 flex items-center justify-center mt-2 lg:mt-0">
            <div class="absolute inset-0 rounded-full border border-cyan-500/30 animate-pulse"></div>
            <div class="absolute inset-2 sm:inset-3 rounded-full border border-cyan-400/20"></div>
            <div class="absolute inset-5 sm:inset-6 rounded-full border border-slate-700"></div>

            <div class="absolute w-28 h-28 sm:w-36 sm:h-36 rounded-full overflow-hidden">
                <div class="w-full h-full animate-radar-sweep bg-[conic-gradient(from_0deg,transparent_0_300deg,rgba(0,217,255,0.5)_360deg)] rounded-full"></div>
            </div>

            <div class="relative z-20 w-2.5 h-2.5 sm:w-3 sm:h-3 bg-cyan-400 rounded-full shadow-[0_0_12px_#00D9FF]"></div>
            <div class="absolute -top-1 font-mono text-[8px] sm:text-[9px] text-cyan-400 tracking-tighter">RADAR 360°</div>
        </div>
    </div>
</div>

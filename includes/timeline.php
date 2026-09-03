<div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-6 gap-2">
        <div>
            <span class="px-2 py-0.5 rounded bg-purple-500/20 text-purple-300 text-[9px] sm:text-[10px] font-mono font-bold border border-purple-500/40">SPILL INCIDENT #2026-089</span>
            <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                <i class="fa-solid fa-timeline text-purple-400"></i>
                AUTOMATED CHAIN OF CUSTODY & EVIDENCE TIMELINE
            </h3>
        </div>
        <span class="text-[10px] sm:text-xs font-mono text-emerald-400 bg-emerald-500/10 px-2 sm:px-2.5 py-1 rounded-full border border-emerald-500/30">
            <i class="fa-solid fa-lock"></i> BLOCKCHAIN LOGGED
        </span>
    </div>

    <!-- Timeline Nodes -->
    <div class="relative flex flex-col md:flex-row items-start justify-between gap-5 md:gap-2">
        <!-- Connecting Line -->
        <div class="hidden md:block absolute top-6 left-8 right-8 h-1 bg-slate-800 z-0">
            <div class="h-full bg-gradient-to-r from-cyan-500 via-purple-500 to-rose-500 w-[85%]"></div>
        </div>

        <!-- Node 1 -->
        <div class="relative z-10 flex-1 flex flex-row md:flex-col items-center md:text-center space-x-3 md:space-x-0 group w-full md:w-auto">
            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-900 border-2 border-cyan-400 shadow-[0_0_15px_#00D9FF] flex items-center justify-center text-cyan-300 text-sm sm:text-base shrink-0 mb-0 md:mb-3">
                <i class="fa-solid fa-satellite"></i>
            </div>
            <div class="text-left md:text-center">
                <span class="text-[10px] font-mono text-cyan-400 font-bold block">02:15:00 UTC</span>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white mt-0.5">Satellite Pass</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-0.5">Sentinel-1B SAR overpass Sector 4</p>
                <span class="inline-block mt-1 text-[9px] font-mono px-1.5 py-0.5 rounded bg-slate-900 border border-slate-700 text-slate-300">RAW SAR C-Band</span>
            </div>
        </div>

        <!-- Node 2 -->
        <div class="relative z-10 flex-1 flex flex-row md:flex-col items-center md:text-center space-x-3 md:space-x-0 group w-full md:w-auto">
            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-900 border-2 border-purple-400 shadow-[0_0_15px_#a855f7] flex items-center justify-center text-purple-300 text-sm sm:text-base shrink-0 mb-0 md:mb-3">
                <i class="fa-solid fa-brain"></i>
            </div>
            <div class="text-left md:text-center">
                <span class="text-[10px] font-mono text-purple-400 font-bold block">02:17:30 UTC</span>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white mt-0.5">AI Segmentation</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-0.5">UNet flags 18.4 km² slick (98.4%)</p>
                <span class="inline-block mt-1 text-[9px] font-mono px-1.5 py-0.5 rounded bg-purple-500/10 border border-purple-500/30 text-purple-300">SPILL-2026-089</span>
            </div>
        </div>

        <!-- Node 3 -->
        <div class="relative z-10 flex-1 flex flex-row md:flex-col items-center md:text-center space-x-3 md:space-x-0 group w-full md:w-auto">
            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-900 border-2 border-amber-400 shadow-[0_0_15px_#FFC857] flex items-center justify-center text-amber-300 text-sm sm:text-base shrink-0 mb-0 md:mb-3">
                <i class="fa-solid fa-ship"></i>
            </div>
            <div class="text-left md:text-center">
                <span class="text-[10px] font-mono text-amber-400 font-bold block">02:18:10 UTC</span>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white mt-0.5">AIS Correlation</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-0.5">MV Ocean Patriot speed drop matched</p>
                <span class="inline-block mt-1 text-[9px] font-mono px-1.5 py-0.5 rounded bg-amber-500/10 border border-amber-500/30 text-amber-300">IMO 9482103 (95%)</span>
            </div>
        </div>

        <!-- Node 4 -->
        <div class="relative z-10 flex-1 flex flex-row md:flex-col items-center md:text-center space-x-3 md:space-x-0 group w-full md:w-auto">
            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-900 border-2 border-sky-400 shadow-[0_0_15px_#38bdf8] flex items-center justify-center text-sky-300 text-sm sm:text-base shrink-0 mb-0 md:mb-3">
                <i class="fa-solid fa-wind"></i>
            </div>
            <div class="text-left md:text-center">
                <span class="text-[10px] font-mono text-sky-400 font-bold block">02:19:00 UTC</span>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white mt-0.5">Drift Forecast</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-0.5">Backward drift trajectory verified</p>
                <span class="inline-block mt-1 text-[9px] font-mono px-1.5 py-0.5 rounded bg-sky-500/10 border border-sky-500/30 text-sky-300">220° SW Vector</span>
            </div>
        </div>

        <!-- Node 5 -->
        <div class="relative z-10 flex-1 flex flex-row md:flex-col items-center md:text-center space-x-3 md:space-x-0 group w-full md:w-auto">
            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-slate-900 border-2 border-rose-500 shadow-[0_0_20px_#FF4D4D] flex items-center justify-center text-rose-400 text-sm sm:text-base shrink-0 mb-0 md:mb-3 animate-pulse">
                <i class="fa-solid fa-shield"></i>
            </div>
            <div class="text-left md:text-center">
                <span class="text-[10px] font-mono text-rose-400 font-bold block">02:20:15 UTC</span>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white mt-0.5">Coast Guard Dispatch</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-0.5">Packet sent to INS Sarathi patrol</p>
                <span class="inline-block mt-1 text-[9px] font-mono px-1.5 py-0.5 rounded bg-rose-500/20 border border-rose-500/40 text-rose-300 font-bold">DISPATCHED</span>
            </div>
        </div>
    </div>
</div>

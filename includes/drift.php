<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6">
    <!-- Left 2 Cols: Hydrodynamic Drift Prediction Model -->
    <div class="lg:col-span-2 rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)] flex flex-col justify-between">
        <div>
            <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
                <div>
                    <span class="px-2 py-0.5 rounded bg-sky-500/20 text-sky-300 text-[9px] sm:text-[10px] font-mono font-bold border border-sky-500/40">DRIFT MODEL PROJECTION</span>
                    <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                        <i class="fa-solid fa-wind text-sky-400"></i>
                        HYDRODYNAMIC DRIFT & SPREAD FORECAST
                    </h3>
                </div>
                <div class="flex items-center space-x-1.5 font-mono text-[10px] sm:text-xs">
                    <button onclick="setDriftHorizon(6)" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-sky-500/20 text-sky-300 border border-sky-500/40 font-bold hover:bg-sky-500/30 transition-all">6 HOURS</button>
                    <button onclick="setDriftHorizon(12)" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-slate-800 text-slate-300 border border-slate-700 hover:text-white transition-all">12 HOURS</button>
                    <button onclick="setDriftHorizon(24)" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-slate-800 text-slate-300 border border-slate-700 hover:text-white transition-all">24 HOURS</button>
                </div>
            </div>

            <!-- SVG Vector Dispersion Map Graphic -->
            <div class="relative w-full h-[220px] sm:h-[280px] rounded-xl bg-[#030914] border border-slate-800 overflow-hidden p-2 sm:p-4 mb-4">
                <svg class="w-full h-full" viewBox="0 0 700 240" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <linearGradient id="drift-grad-24" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="rgba(255, 77, 77, 0.8)" />
                            <stop offset="50%" stop-color="rgba(255, 200, 87, 0.4)" />
                            <stop offset="100%" stop-color="rgba(0, 217, 255, 0.1)" />
                        </linearGradient>
                    </defs>

                    <!-- Vector Grid Lines -->
                    <g stroke="rgba(0, 217, 255, 0.06)" stroke-width="1">
                        <line x1="0" y1="60" x2="700" y2="60" />
                        <line x1="0" y1="120" x2="700" y2="120" />
                        <line x1="0" y1="180" x2="700" y2="180" />
                        <line x1="140" y1="0" x2="140" y2="240" />
                        <line x1="280" y1="0" x2="280" y2="240" />
                        <line x1="420" y1="0" x2="420" y2="240" />
                        <line x1="560" y1="0" x2="560" y2="240" />
                    </g>

                    <circle cx="150" cy="80" r="10" fill="#FF4D4D" stroke="#ffffff" stroke-width="2" class="animate-ping" />
                    <circle cx="150" cy="80" r="8" fill="#FF4D4D" />
                    <text x="170" y="85" fill="#FF4D4D" font-family="monospace" font-size="12" font-weight="bold">SPILL ORIGIN</text>

                    <ellipse cx="230" cy="110" rx="60" ry="35" fill="rgba(255, 77, 77, 0.3)" stroke="#FF4D4D" stroke-width="2" stroke-dasharray="4,4" />
                    <ellipse cx="340" cy="145" rx="100" ry="55" fill="rgba(255, 200, 87, 0.25)" stroke="#FFC857" stroke-width="2" stroke-dasharray="4,4" />
                    <ellipse cx="480" cy="180" rx="150" ry="80" fill="url(#drift-grad-24)" stroke="#00D9FF" stroke-width="2" stroke-dasharray="2,2" />
                    <text x="440" y="185" fill="#00D9FF" font-family="monospace" font-size="11" font-weight="bold">+24h Coastal Threat</text>

                    <path d="M 150,80 Q 300,130 540,195" fill="none" stroke="#00E6A8" stroke-width="3" stroke-dasharray="6,6" />
                    <polygon points="545,197 530,190 535,202" fill="#00E6A8" />
                </svg>

                <div class="absolute top-2 right-2 sm:top-3 sm:right-3 p-1.5 sm:p-2 rounded-lg bg-slate-950/90 border border-slate-800 text-[9px] sm:text-[11px] font-mono space-y-0.5">
                    <p class="text-cyan-400 font-bold"><i class="fa-solid fa-wind text-sky-400"></i> WIND: 14 kts @ 220° SW</p>
                    <p class="text-teal-400 font-bold"><i class="fa-solid fa-water text-teal-400"></i> CURRENT: 2.4 kts SW</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 font-mono text-xs">
            <div class="p-2.5 rounded-lg bg-slate-900/80 border border-rose-500/30">
                <span class="text-slate-400 text-[9px] sm:text-[10px] block">COASTAL IMPACT ETA</span>
                <span class="text-rose-400 font-bold text-xs sm:text-sm">18h 40m (Goa Coast)</span>
            </div>
            <div class="p-2.5 rounded-lg bg-slate-900/80 border border-amber-500/30">
                <span class="text-slate-400 text-[9px] sm:text-[10px] block">CORAL REEF THREAT</span>
                <span class="text-amber-400 font-bold text-xs sm:text-sm">HIGH (Marine Bio Zone)</span>
            </div>
            <div class="p-2.5 rounded-lg bg-slate-900/80 border border-emerald-500/30">
                <span class="text-slate-400 text-[9px] sm:text-[10px] block">PREDICTED AREA</span>
                <span class="text-emerald-400 font-bold text-xs sm:text-sm">48.2 km² (+24 hrs)</span>
            </div>
        </div>
    </div>

    <!-- Right Col: Risk Zone Heatmap Summary -->
    <div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)] flex flex-col justify-between">
        <div>
            <div class="border-b border-slate-800 pb-3 mb-4">
                <span class="px-2 py-0.5 rounded bg-rose-500/20 text-rose-300 text-[9px] sm:text-[10px] font-mono font-bold border border-rose-500/40">MARITIME HAZARD INDEX</span>
                <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                    <i class="fa-solid fa-fire-flame-curved text-rose-400"></i>
                    OCEAN RISK HEATMAP ZONES
                </h3>
            </div>

            <div class="space-y-4 font-mono text-xs">
                <!-- Zone 1 -->
                <div class="space-y-1">
                    <div class="flex items-center justify-between text-[11px] sm:text-xs">
                        <span class="text-rose-400 font-bold flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-500 shadow-[0_0_8px_#FF4D4D]"></span>
                            Arabian Sea Lane #4
                        </span>
                        <span class="text-rose-400 font-bold">HIGH (94%)</span>
                    </div>
                    <div class="w-full bg-slate-900 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-rose-600 to-rose-400 h-full w-[94%]"></div>
                    </div>
                </div>

                <!-- Zone 2 -->
                <div class="space-y-1">
                    <div class="flex items-center justify-between text-[11px] sm:text-xs">
                        <span class="text-amber-400 font-bold flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                            Malacca Approach
                        </span>
                        <span class="text-amber-400 font-bold">MEDIUM (72%)</span>
                    </div>
                    <div class="w-full bg-slate-900 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-amber-600 to-amber-400 h-full w-[72%]"></div>
                    </div>
                </div>

                <!-- Zone 3 -->
                <div class="space-y-1">
                    <div class="flex items-center justify-between text-[11px] sm:text-xs">
                        <span class="text-teal-400 font-bold flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-teal-400"></span>
                            Lakshadweep Bio Zone
                        </span>
                        <span class="text-teal-400 font-bold">LOW (18%)</span>
                    </div>
                    <div class="w-full bg-slate-900 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-teal-600 to-teal-400 h-full w-[18%]"></div>
                    </div>
                </div>
            </div>
        </div>

        <button onclick="downloadHeatmapReport()" class="w-full mt-4 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-cyan-300 border border-cyan-500/30 font-mono font-bold text-xs transition-all flex items-center justify-center space-x-2">
            <i class="fa-solid fa-download"></i>
            <span>EXPORT HEATMAP GIS DATA</span>
        </button>
    </div>
</div>

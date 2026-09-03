<div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
        <div>
            <div class="flex items-center space-x-2">
                <span class="px-2 py-0.5 rounded bg-rose-500/20 text-rose-300 text-[9px] sm:text-[10px] font-mono font-bold border border-rose-500/40">SPILL-2026-089-AS MATCH</span>
                <span class="text-[10px] sm:text-xs font-mono text-slate-400">UNet Trajectory Engine</span>
            </div>
            <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                <i class="fa-solid fa-ship text-amber-400"></i>
                AI SUSPECT VESSEL CORRELATION MATRIX
            </h3>
        </div>
        <button onclick="triggerReCorrelation()" class="px-3 py-1.5 rounded-lg bg-cyan-500/10 border border-cyan-400/40 text-cyan-300 hover:bg-cyan-500/20 transition-all font-mono text-xs font-semibold flex items-center space-x-2">
            <i class="fa-solid fa-arrows-rotate animate-spin-slow"></i>
            <span>RE-RUN MATCH</span>
        </button>
    </div>

    <!-- Suspect Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <!-- Suspect 1 -->
        <div class="rounded-xl bg-slate-900/90 border-2 border-rose-500/80 p-3.5 sm:p-4 relative shadow-[0_0_25px_rgba(255,77,77,0.2)] hover:border-rose-400 transition-all">
            <div class="absolute -top-3 right-3 px-2 py-0.5 rounded-full bg-rose-600 text-white font-mono text-[9px] sm:text-[10px] font-bold uppercase tracking-wider shadow-lg flex items-center space-x-1">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <span>OFFENDER (95%)</span>
            </div>

            <div class="flex items-start justify-between mt-1 mb-3">
                <div>
                    <h4 class="text-sm sm:text-base font-bold font-mono text-white flex items-center gap-2">
                        MV OCEAN PATRIOT
                    </h4>
                    <p class="text-xs font-mono text-slate-400">IMO: 9482103 | Flag: Panama</p>
                    <p class="text-xs font-mono text-cyan-400">VLCC Oil Tanker (320,000 DWT)</p>
                </div>

                <div class="relative w-12 h-12 sm:w-14 sm:h-14 shrink-0 flex items-center justify-center">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                        <path class="text-slate-800" stroke-width="3.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path class="text-rose-500" stroke-dasharray="95, 100" stroke-width="3.5" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                    </svg>
                    <span class="absolute font-mono font-bold text-xs text-rose-400">95%</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 p-2.5 rounded-lg bg-slate-950/80 border border-slate-800 font-mono text-xs mb-3">
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">SPEED:</span>
                    <span class="text-rose-400 font-bold text-xs">3.1 kts</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">DISTANCE:</span>
                    <span class="text-white font-bold text-xs">3.2 nm</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">HEADING:</span>
                    <span class="text-slate-200 text-xs">240° WSW</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">DESTINATION:</span>
                    <span class="text-slate-200 text-xs truncate block">Singapore</span>
                </div>
            </div>

            <div class="p-2 rounded bg-rose-500/10 border border-rose-500/30 text-[10px] sm:text-[11px] font-mono text-rose-300 mb-3">
                <i class="fa-solid fa-circle-exclamation text-rose-400"></i>
                <span class="font-bold">AIS Anomaly:</span> Speed drop from 16.4 to 3.1 knots with 45° loop at 02:14 UTC.
            </div>

            <div class="flex items-center space-x-2">
                <button onclick="dispatchCoastGuard('MV OCEAN PATRIOT')" class="flex-1 py-2 rounded-lg bg-rose-600 hover:bg-rose-500 text-white font-mono font-bold text-xs transition-all shadow-[0_0_15px_rgba(255,77,77,0.4)] flex items-center justify-center space-x-1.5">
                    <i class="fa-solid fa-shield"></i>
                    <span>INTERCEPT</span>
                </button>
                <button onclick="viewVesselTrajectory('9482103')" class="px-3 py-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white font-mono text-xs border border-slate-700">
                    <i class="fa-solid fa-route"></i>
                </button>
            </div>
        </div>

        <!-- Suspect 2 -->
        <div class="rounded-xl bg-slate-900/90 border border-amber-500/50 p-3.5 sm:p-4 relative hover:border-amber-400 transition-all">
            <div class="absolute -top-3 right-3 px-2 py-0.5 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/40 font-mono text-[9px] sm:text-[10px] font-bold uppercase tracking-wider flex items-center space-x-1">
                <span>HIGH SUSPECT (82%)</span>
            </div>

            <div class="flex items-start justify-between mt-1 mb-3">
                <div>
                    <h4 class="text-sm sm:text-base font-bold font-mono text-white flex items-center gap-2">
                        MT MALABAR STAR
                    </h4>
                    <p class="text-xs font-mono text-slate-400">IMO: 9320194 | Flag: Liberia</p>
                    <p class="text-xs font-mono text-cyan-400">Chemical Tanker (45,000 DWT)</p>
                </div>

                <div class="relative w-12 h-12 sm:w-14 sm:h-14 shrink-0 flex items-center justify-center">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                        <path class="text-slate-800" stroke-width="3.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path class="text-amber-400" stroke-dasharray="82, 100" stroke-width="3.5" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                    </svg>
                    <span class="absolute font-mono font-bold text-xs text-amber-400">82%</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 p-2.5 rounded-lg bg-slate-950/80 border border-slate-800 font-mono text-xs mb-3">
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">SPEED:</span>
                    <span class="text-white font-bold text-xs">11.2 kts</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">DISTANCE:</span>
                    <span class="text-white font-bold text-xs">8.7 nm</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">HEADING:</span>
                    <span class="text-slate-200 text-xs">185° S</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">DESTINATION:</span>
                    <span class="text-slate-200 text-xs truncate block">Colombo</span>
                </div>
            </div>

            <div class="p-2 rounded bg-amber-500/10 border border-amber-500/30 text-[10px] sm:text-[11px] font-mono text-amber-300 mb-3">
                <i class="fa-solid fa-triangle-exclamation text-amber-400"></i>
                <span class="font-bold">Pattern:</span> Unscheduled tank washing pattern 45 minutes prior.
            </div>

            <div class="flex items-center space-x-2">
                <button onclick="dispatchCoastGuard('MT MALABAR STAR')" class="flex-1 py-2 rounded-lg bg-amber-500/20 hover:bg-amber-500/30 text-amber-300 font-mono font-bold text-xs border border-amber-500/40 transition-all flex items-center justify-center space-x-1.5">
                    <i class="fa-solid fa-eye"></i>
                    <span>MONITOR</span>
                </button>
                <button onclick="viewVesselTrajectory('9320194')" class="px-3 py-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white font-mono text-xs border border-slate-700">
                    <i class="fa-solid fa-route"></i>
                </button>
            </div>
        </div>

        <!-- Suspect 3 -->
        <div class="rounded-xl bg-slate-900/90 border border-slate-800 p-3.5 sm:p-4 relative hover:border-slate-700 transition-all md:col-span-2 xl:col-span-1">
            <div class="absolute -top-3 right-3 px-2 py-0.5 rounded-full bg-slate-800 text-slate-400 border border-slate-700 font-mono text-[9px] sm:text-[10px] font-bold uppercase tracking-wider">
                <span>MEDIUM (41%)</span>
            </div>

            <div class="flex items-start justify-between mt-1 mb-3">
                <div>
                    <h4 class="text-sm sm:text-base font-bold font-mono text-white flex items-center gap-2">
                        SS ARABIAN GULF
                    </h4>
                    <p class="text-xs font-mono text-slate-400">IMO: 9193882 | Flag: Marshall Isl.</p>
                    <p class="text-xs font-mono text-cyan-400">Crude Carrier (280,000 DWT)</p>
                </div>

                <div class="relative w-12 h-12 sm:w-14 sm:h-14 shrink-0 flex items-center justify-center">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                        <path class="text-slate-800" stroke-width="3.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path class="text-cyan-400" stroke-dasharray="41, 100" stroke-width="3.5" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                    </svg>
                    <span class="absolute font-mono font-bold text-xs text-cyan-400">41%</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 p-2.5 rounded-lg bg-slate-950/80 border border-slate-800 font-mono text-xs mb-3">
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">SPEED:</span>
                    <span class="text-white font-bold text-xs">14.8 kts</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">DISTANCE:</span>
                    <span class="text-white font-bold text-xs">19.4 nm</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">HEADING:</span>
                    <span class="text-slate-200 text-xs">080° E</span>
                </div>
                <div>
                    <span class="text-slate-500 block text-[9px] sm:text-[10px]">DESTINATION:</span>
                    <span class="text-slate-200 text-xs truncate block">Visakhapatnam</span>
                </div>
            </div>

            <div class="p-2 rounded bg-slate-800/80 border border-slate-700 text-[10px] sm:text-[11px] font-mono text-slate-300 mb-3">
                <i class="fa-solid fa-info-circle text-cyan-400"></i>
                <span class="font-bold">Status:</span> Constant transit speed maintained; lower probability.
            </div>

            <div class="flex items-center space-x-2">
                <button onclick="dispatchCoastGuard('SS ARABIAN GULF')" class="flex-1 py-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 font-mono text-xs border border-slate-700 transition-all flex items-center justify-center space-x-1.5">
                    <i class="fa-solid fa-list-check"></i>
                    <span>LOG AIS</span>
                </button>
                <button onclick="viewVesselTrajectory('9193882')" class="px-3 py-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white font-mono text-xs border border-slate-700">
                    <i class="fa-solid fa-route"></i>
                </button>
            </div>
        </div>
    </div>
</div>

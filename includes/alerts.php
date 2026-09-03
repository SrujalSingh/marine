<div id="alerts-section" class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
        <div>
            <span class="px-2 py-0.5 rounded bg-rose-500/20 text-rose-300 text-[9px] sm:text-[10px] font-mono font-bold border border-rose-500/40">MILITARY THREAT FEED</span>
            <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation text-rose-400"></i>
                TACTICAL ALERT CENTER & TRIAGE
            </h3>
        </div>
        <div class="flex items-center space-x-1.5 font-mono text-[10px] sm:text-xs">
            <button onclick="filterAlerts('all')" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 font-bold">ALL (3)</button>
            <button onclick="filterAlerts('critical')" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-slate-900 text-rose-400 border border-slate-800 hover:border-rose-500/40">CRITICAL (1)</button>
        </div>
    </div>

    <!-- Alert List Items -->
    <div class="space-y-3 font-mono text-xs">
        <!-- Alert 1 -->
        <div class="p-3.5 sm:p-4 rounded-xl bg-slate-900/90 border-l-4 border-l-rose-500 border-t border-r border-b border-slate-800 flex flex-col md:flex-row items-start md:items-center justify-between gap-3 shadow-lg hover:border-rose-500/40 transition-all">
            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-rose-500/10 border border-rose-500/30 flex items-center justify-center text-rose-400 shrink-0 text-sm sm:text-base">
                    <i class="fa-solid fa-radiation animate-spin-slow"></i>
                </div>
                <div>
                    <div class="flex flex-wrap items-center gap-1.5">
                        <span class="px-1.5 py-0.5 rounded bg-rose-600 text-white font-bold text-[9px] sm:text-[10px]">CRITICAL</span>
                        <span class="text-slate-400 text-[10px] sm:text-[11px]">02:15:00 UTC</span>
                        <span class="text-cyan-400 text-[10px] sm:text-[11px]">Arabian Sea</span>
                    </div>
                    <h4 class="text-xs sm:text-sm font-bold text-white mt-1">Possible Illegal Discharge / Tank Wash Anomaly</h4>
                    <p class="text-slate-300 font-sans text-xs mt-0.5">
                        Sentinel-1B SAR imagery detected 18.4 km² slick. MV Ocean Patriot (IMO 9482103) identified with 95% AI confidence.
                    </p>
                </div>
            </div>
            <div class="flex items-center space-x-2 shrink-0 w-full md:w-auto pt-2 md:pt-0 border-t md:border-t-0 border-slate-800">
                <button onclick="dispatchCoastGuard('MV OCEAN PATRIOT')" class="flex-1 md:flex-none px-3.5 py-2 rounded-lg bg-rose-600 hover:bg-rose-500 text-white font-bold text-xs transition-all shadow-[0_0_12px_rgba(255,77,77,0.4)]">
                    DISPATCH INTERCEPT
                </button>
                <button onclick="acknowledgeAlert(1)" class="px-3 py-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white border border-slate-700 text-xs">
                    ACK
                </button>
            </div>
        </div>

        <!-- Alert 2 -->
        <div class="p-3.5 sm:p-4 rounded-xl bg-slate-900/90 border-l-4 border-l-amber-400 border-t border-r border-b border-slate-800 flex flex-col md:flex-row items-start md:items-center justify-between gap-3 shadow-lg hover:border-amber-500/40 transition-all">
            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 shrink-0 text-sm sm:text-base">
                    <i class="fa-solid fa-gauge-high"></i>
                </div>
                <div>
                    <div class="flex flex-wrap items-center gap-1.5">
                        <span class="px-1.5 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/40 font-bold text-[9px] sm:text-[10px]">WARNING</span>
                        <span class="text-slate-400 text-[10px] sm:text-[11px]">02:08:45 UTC</span>
                        <span class="text-cyan-400 text-[10px] sm:text-[11px]">MT Malabar Star</span>
                    </div>
                    <h4 class="text-xs sm:text-sm font-bold text-white mt-1">Vessel Speed Anomaly & Course Deviation</h4>
                    <p class="text-slate-300 font-sans text-xs mt-0.5">
                        AIS tracking recorded decelerating loop near spill tail. Flagged for secondary SAR review.
                    </p>
                </div>
            </div>
            <div class="flex items-center space-x-2 shrink-0 w-full md:w-auto pt-2 md:pt-0 border-t md:border-t-0 border-slate-800">
                <button onclick="acknowledgeAlert(2)" class="w-full md:w-auto px-3.5 py-2 rounded-lg bg-slate-800 text-slate-200 hover:text-white border border-slate-700 text-xs">
                    ACKNOWLEDGE
                </button>
            </div>
        </div>
    </div>
</div>

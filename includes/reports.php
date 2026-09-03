<div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
        <div>
            <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 text-[9px] sm:text-[10px] font-mono font-bold border border-amber-500/40">LEGAL & EVIDENCE CHAIN</span>
            <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                <i class="fa-solid fa-file-shield text-amber-400"></i>
                DEFENSE REPORT & IMO PROSECUTION GENERATOR
            </h3>
        </div>
        <span class="text-xs font-mono text-cyan-400 hidden sm:inline">SIH26143 ENGINE</span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
        <!-- Report 1 -->
        <div class="p-3.5 sm:p-4 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 transition-all flex flex-col justify-between group">
            <div>
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 text-base sm:text-lg mb-2.5 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white">PDF Defense Briefing</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-1">Executive summary for DRDO, ISRO, and Coast Guard HQ commanders.</p>
            </div>
            <button onclick="generateReportDoc('PDF Defense Briefing')" class="mt-3 w-full py-2 rounded-lg bg-cyan-500/10 hover:bg-cyan-500/20 text-cyan-300 border border-cyan-400/40 font-mono font-bold text-xs transition-all flex items-center justify-center space-x-1.5">
                <i class="fa-solid fa-download"></i>
                <span>EXPORT BRIEF</span>
            </button>
        </div>

        <!-- Report 2 -->
        <div class="p-3.5 sm:p-4 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-rose-500/40 transition-all flex flex-col justify-between group">
            <div>
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-rose-500/10 border border-rose-500/30 flex items-center justify-center text-rose-400 text-base sm:text-lg mb-2.5 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white">IMO Prosecution Docket</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-1">Legal AIS trajectory proof & SAR slick evidence for IMO prosecution.</p>
            </div>
            <button onclick="generateReportDoc('IMO Prosecution Docket')" class="mt-3 w-full py-2 rounded-lg bg-rose-500/10 hover:bg-rose-500/20 text-rose-300 border border-rose-500/40 font-mono font-bold text-xs transition-all flex items-center justify-center space-x-1.5">
                <i class="fa-solid fa-gavel"></i>
                <span>EXPORT DOCKET</span>
            </button>
        </div>

        <!-- Report 3 -->
        <div class="p-3.5 sm:p-4 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/40 transition-all flex flex-col justify-between group">
            <div>
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 text-base sm:text-lg mb-2.5 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white">Vessel Intercept Brief</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-1">Tactical boarding brief for Coast Guard patrol commanders.</p>
            </div>
            <button onclick="generateReportDoc('Vessel Intercept Brief')" class="mt-3 w-full py-2 rounded-lg bg-amber-500/10 hover:bg-amber-500/20 text-amber-300 border border-amber-500/40 font-mono font-bold text-xs transition-all flex items-center justify-center space-x-1.5">
                <i class="fa-solid fa-ship"></i>
                <span>EXPORT BRIEF</span>
            </button>
        </div>

        <!-- Report 4 -->
        <div class="p-3.5 sm:p-4 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-emerald-500/40 transition-all flex flex-col justify-between group">
            <div>
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 text-base sm:text-lg mb-2.5 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h4 class="text-xs sm:text-sm font-bold font-mono text-white">Environmental Report</h4>
                <p class="text-[11px] sm:text-xs font-sans text-slate-400 mt-1">Ecological damage assessment, shoreline threat, & marine bio impact.</p>
            </div>
            <button onclick="generateReportDoc('Environmental Impact Report')" class="mt-3 w-full py-2 rounded-lg bg-emerald-500/10 hover:bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 font-mono font-bold text-xs transition-all flex items-center justify-center space-x-1.5">
                <i class="fa-solid fa-file-invoice"></i>
                <span>EXPORT ASSESSMENT</span>
            </button>
        </div>
    </div>
</div>

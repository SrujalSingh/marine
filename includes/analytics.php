<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
    <!-- Chart 1: Oil Spill Volume Trends -->
    <div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
        <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
            <div>
                <span class="px-2 py-0.5 rounded bg-cyan-500/20 text-cyan-300 text-[9px] sm:text-[10px] font-mono font-bold border border-cyan-500/40">MONTHLY ANALYSIS</span>
                <h3 class="text-sm sm:text-base font-bold font-display text-white mt-1 flex items-center gap-2">
                    <i class="fa-solid fa-chart-line text-cyan-400"></i>
                    OIL SPILL INCIDENTS & VOLUME TRENDS (2026)
                </h3>
            </div>
            <span class="text-xs font-mono text-emerald-400 font-bold">-34% Incident Rate</span>
        </div>

        <div class="relative w-full h-[220px] sm:h-[260px] lg:h-[280px]">
            <canvas id="spillTrendChart"></canvas>
        </div>
    </div>

    <!-- Chart 2: Vessel Risk & Category Distribution -->
    <div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
        <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
            <div>
                <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 text-[9px] sm:text-[10px] font-mono font-bold border border-amber-500/40">AIS THREAT MATRIX</span>
                <h3 class="text-sm sm:text-base font-bold font-display text-white mt-1 flex items-center gap-2">
                    <i class="fa-solid fa-chart-pie text-amber-400"></i>
                    FLAGGED VESSEL RISK DISTRIBUTION
                </h3>
            </div>
            <span class="text-xs font-mono text-cyan-400 font-bold">142 Tankers Screened</span>
        </div>

        <div class="relative w-full h-[220px] sm:h-[260px] lg:h-[280px] flex items-center justify-center">
            <canvas id="vesselRiskChart"></canvas>
        </div>
    </div>
</div>

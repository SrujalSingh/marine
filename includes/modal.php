<!-- Live Scan Radar Simulation Modal -->
<div id="scan-modal" class="fixed inset-0 bg-slate-950/85 backdrop-blur-md z-[100] hidden flex items-center justify-center p-3 sm:p-4">
    <div class="bg-[#050B16] border-2 border-cyan-400 rounded-2xl max-w-lg w-[94vw] sm:w-full p-4 sm:p-6 relative shadow-[0_0_50px_rgba(0,217,255,0.4)] font-mono max-h-[90vh] overflow-y-auto">
        <button onclick="closeScanModal()" class="absolute top-3 right-3 sm:top-4 sm:right-4 text-slate-400 hover:text-white text-base sm:text-lg">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="flex items-center space-x-3 text-cyan-400 mb-3 sm:mb-4">
            <i class="fa-solid fa-satellite-dish text-xl sm:text-2xl animate-spin-slow"></i>
            <div>
                <h3 class="text-sm sm:text-base font-bold text-white tracking-wider">LIVE TACTICAL RADAR SCAN</h3>
                <p class="text-[10px] sm:text-xs text-slate-400">INSAT-3DS & Sentinel-1B SAR Pipeline</p>
            </div>
        </div>

        <div class="space-y-3 sm:space-y-4 my-4 sm:my-6">
            <div class="space-y-1">
                <div class="flex justify-between text-xs">
                    <span class="text-slate-300 text-[11px] sm:text-xs truncate max-w-[220px]" id="scan-step-label">Acquiring SAR Tiles...</span>
                    <span class="text-cyan-400 font-bold" id="scan-percent">0%</span>
                </div>
                <div class="w-full bg-slate-900 rounded-full h-2.5 sm:h-3 overflow-hidden border border-slate-800">
                    <div id="scan-progress-bar" class="bg-gradient-to-r from-cyan-500 to-teal-400 h-full w-[0%] transition-all duration-300"></div>
                </div>
            </div>

            <div id="scan-terminal" class="h-28 sm:h-32 rounded-lg bg-slate-950 border border-slate-800 p-2.5 sm:p-3 overflow-y-auto text-[10px] sm:text-[11px] text-slate-300 space-y-1 font-mono">
                <p class="text-cyan-400">[02:22:01 UTC] Connecting to ISRO Ground Station...</p>
            </div>
        </div>

        <div class="flex justify-end">
            <button onclick="closeScanModal()" class="w-full sm:w-auto px-4 py-2 rounded-lg bg-cyan-500/20 text-cyan-300 border border-cyan-400/40 text-xs font-bold hover:bg-cyan-500/30 transition-all">
                CLOSE RADAR FEED
            </button>
        </div>
    </div>
</div>

<!-- Intelligence Report Preview Modal -->
<div id="report-modal" class="fixed inset-0 bg-slate-950/85 backdrop-blur-md z-[100] hidden flex items-center justify-center p-3 sm:p-4">
    <div class="bg-[#050B16] border-2 border-cyan-400 rounded-2xl max-w-2xl w-[94vw] sm:w-full p-4 sm:p-6 relative shadow-[0_0_50px_rgba(0,217,255,0.4)] font-mono max-h-[90vh] overflow-y-auto">
        <button onclick="closeReportModal()" class="absolute top-3 right-3 sm:top-4 sm:right-4 text-slate-400 hover:text-white text-base sm:text-lg">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="flex items-center space-x-3 text-cyan-400 mb-3 sm:mb-4 border-b border-slate-800 pb-3">
            <i class="fa-solid fa-file-shield text-xl sm:text-2xl"></i>
            <div>
                <h3 class="text-sm sm:text-base font-bold text-white tracking-wider" id="report-modal-title">DEFENSE BRIEFING GENERATED</h3>
                <p class="text-[10px] sm:text-xs text-slate-400">SIH26143 / Indian Coast Guard Docket</p>
            </div>
        </div>

        <div class="space-y-3 my-3 sm:my-4 text-xs text-slate-300 leading-relaxed font-sans bg-slate-950/80 p-3 sm:p-4 rounded-xl border border-slate-800">
            <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-2 font-mono text-[10px] sm:text-[11px] gap-1">
                <span class="text-cyan-400 font-bold">CASE: SIH26143-SPILL-089</span>
                <span class="text-slate-400">CONFIDENTIAL / DEFENSE</span>
            </div>
            <p><strong class="text-white font-mono">Target Vessel:</strong> MV OCEAN PATRIOT (IMO: 9482103)</p>
            <p><strong class="text-white font-mono">Offense Coordinates:</strong> 15.421° N, 71.892° E (Arabian Sea)</p>
            <p><strong class="text-white font-mono">Evidence Chain:</strong> Sentinel-1B SAR slick match (18.4 km²), speed drop from 16.4 kts to 3.1 kts at 02:14 UTC, UNet back-trace 95% confidence.</p>
            <p class="text-emerald-400 font-mono"><i class="fa-solid fa-circle-check"></i> Digital Hash Signed & Transmitted to INS Sarathi Patrol Intercept Commander.</p>
        </div>

        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-3 pt-2">
            <button onclick="window.print()" class="w-full sm:w-auto px-4 py-2 rounded-lg bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-xs transition-all flex items-center justify-center space-x-1.5 shadow-[0_0_15px_#00D9FF]">
                <i class="fa-solid fa-print"></i>
                <span>PRINT BRIEFING</span>
            </button>
            <button onclick="closeReportModal()" class="w-full sm:w-auto px-4 py-2 rounded-lg bg-slate-800 text-slate-300 hover:text-white border border-slate-700 text-xs font-bold">
                DONE
            </button>
        </div>
    </div>
</div>

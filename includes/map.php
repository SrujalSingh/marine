<div class="relative rounded-2xl bg-slate-950/90 border border-cyan-500/30 overflow-hidden shadow-[0_0_30px_rgba(0,217,255,0.15)] flex flex-col h-[400px] sm:h-[500px] lg:h-[650px]">
    <!-- Tactical Map Header -->
    <div class="bg-[#050B16]/95 border-b border-cyan-500/20 px-3 sm:px-4 py-2.5 sm:py-3 flex flex-wrap items-center justify-between gap-2.5 z-20">
        <div class="flex items-center space-x-2 sm:space-x-3">
            <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-cyan-400 animate-ping"></span>
            <h3 class="text-xs sm:text-sm font-bold font-mono text-white tracking-wider flex items-center gap-1.5 sm:gap-2">
                <i class="fa-solid fa-map-location-dot text-cyan-400"></i>
                MAIN COMMAND SURVEILLANCE MAP
                <span class="text-[10px] font-mono text-slate-400 font-normal hidden md:inline">(ARABIAN SEA / BAY OF BENGAL)</span>
            </h3>
        </div>

        <!-- Map Layer Toggles -->
        <div class="flex flex-wrap items-center gap-1.5 sm:gap-2 font-mono text-[10px] sm:text-xs">
            <button onclick="toggleMapLayer('spills')" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-rose-500/20 text-rose-300 border border-rose-500/40 hover:bg-rose-500/30 transition-all flex items-center space-x-1">
                <i class="fa-solid fa-droplet text-rose-400"></i>
                <span>Spills (4)</span>
            </button>
            <button onclick="toggleMapLayer('vessels')" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-blue-500/20 text-blue-300 border border-blue-500/40 hover:bg-blue-500/30 transition-all flex items-center space-x-1">
                <i class="fa-solid fa-ship text-blue-400"></i>
                <span>Vessels</span>
            </button>
            <button onclick="centerMapOnGoa()" class="px-2 py-1 sm:px-2.5 sm:py-1 rounded bg-slate-800 text-slate-300 border border-slate-700 hover:text-white transition-all flex items-center space-x-1">
                <i class="fa-solid fa-crosshairs text-cyan-400"></i>
                <span>Reset View</span>
            </button>
        </div>
    </div>

    <!-- Leaflet Map Canvas Container -->
    <div id="command-map" class="w-full h-full relative z-10 bg-[#050B16]">
        <div id="map-loader" class="absolute inset-0 flex items-center justify-center bg-[#050B16] z-50 pointer-events-none transition-opacity duration-500">
            <div class="flex flex-col items-center space-y-2 sm:space-y-3 font-mono text-cyan-400 text-xs">
                <i class="fa-solid fa-circle-notch fa-spin text-2xl sm:text-3xl"></i>
                <span class="tracking-widest animate-pulse text-[10px] sm:text-xs">INITIALIZING MARITIME GIS MATRIX...</span>
            </div>
        </div>
    </div>

    <!-- Map HUD Bottom Bar -->
    <div class="absolute bottom-2 sm:bottom-3 left-2 sm:left-3 right-2 sm:right-3 z-20 flex flex-wrap items-center justify-between gap-2 p-2 sm:p-3 rounded-xl bg-slate-950/90 backdrop-blur-md border border-slate-800 text-[10px] sm:text-xs font-mono text-slate-300 pointer-events-auto">
        <div class="flex flex-wrap items-center gap-2 sm:gap-4">
            <div class="flex items-center space-x-1.5">
                <span class="w-2 h-2 sm:w-2.5 sm:h-2.5 rounded-full bg-rose-500 shadow-[0_0_8px_#FF4D4D]"></span>
                <span class="text-slate-300">Critical Spill</span>
            </div>
            <div class="flex items-center space-x-1.5">
                <span class="w-2 h-2 sm:w-2.5 sm:h-2.5 rounded-full bg-amber-400 shadow-[0_0_8px_#FFC857]"></span>
                <span class="text-slate-300">Suspect Vessel</span>
            </div>
            <div class="flex items-center space-x-1.5 hidden xs:flex">
                <span class="w-2 h-2 sm:w-2.5 sm:h-2.5 rounded-full bg-cyan-400"></span>
                <span class="text-slate-300">Coast Guard</span>
            </div>
        </div>

        <div class="flex items-center space-x-2 text-[9px] sm:text-[11px] text-slate-400">
            <span class="hidden sm:inline">GRID: 15.421°N, 71.892°E</span>
            <span class="text-emerald-400 font-semibold"><i class="fa-solid fa-wifi"></i> AIS LIVE</span>
        </div>
    </div>
</div>

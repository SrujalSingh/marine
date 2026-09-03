<header class="bg-[#050B16]/95 backdrop-blur-xl border-b border-cyan-500/20 px-3 sm:px-4 py-2.5 sm:py-3 sticky top-0 z-50 flex items-center justify-between shadow-[0_4px_25px_rgba(0,217,255,0.08)]">
    <!-- Left: Logo & Agency Info -->
    <div class="flex items-center space-x-2.5 sm:space-x-4">
        <!-- Mobile Menu Hamburger Button -->
        <button onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-lg bg-slate-900 border border-slate-800 text-cyan-400 hover:bg-slate-800 focus:outline-none">
            <i class="fa-solid fa-bars text-base"></i>
        </button>

        <div class="relative flex items-center justify-center w-9 h-9 sm:w-11 sm:h-11 rounded-lg bg-slate-900 border border-cyan-400/40 shadow-[0_0_15px_rgba(0,217,255,0.3)] shrink-0">
            <i class="fa-solid fa-radar text-cyan-400 text-base sm:text-xl animate-spin-slow"></i>
            <div class="absolute -top-1 -right-1 w-2.5 h-2.5 sm:w-3 sm:h-3 bg-teal-400 rounded-full animate-ping"></div>
            <div class="absolute -top-1 -right-1 w-2.5 h-2.5 sm:w-3 sm:h-3 bg-teal-400 rounded-full"></div>
        </div>
        <div>
            <div class="flex items-center space-x-1.5 sm:space-x-2">
                <span class="text-[10px] sm:text-xs font-mono font-bold tracking-widest px-1 sm:px-1.5 py-0.5 rounded bg-cyan-500/10 border border-cyan-500/30 text-cyan-400">SIH26143</span>
                <span class="text-[9px] sm:text-xs font-mono text-slate-400 uppercase tracking-wider hidden xs:inline">DRDO / ISRO / ICG</span>
            </div>
            <h1 class="text-xs sm:text-base lg:text-lg font-bold font-display tracking-wide text-white flex items-center gap-1.5 sm:gap-2">
                MARITIME OIL SPILL MATRIX
                <span class="inline-flex items-center gap-1 text-[9px] sm:text-[11px] px-1.5 sm:px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 font-mono">
                    <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-emerald-400 animate-pulse"></span> DEFCON 3
                </span>
            </h1>
        </div>
    </div>

    <!-- Center: Live Telemetry Ticker (Visible on desktop & large tablets) -->
    <div class="hidden xl:flex items-center space-x-6 px-4 py-1.5 rounded-xl bg-slate-950/80 border border-slate-800 text-xs font-mono text-slate-300">
        <div class="flex items-center space-x-2">
            <span class="text-slate-500">UTC CLOCK:</span>
            <span id="utc-clock" class="text-cyan-300 font-bold tracking-wider">00:00:00 UTC</span>
        </div>
        <div class="h-4 w-px bg-slate-800"></div>
        <div class="flex items-center space-x-2">
            <i class="fa-satellite text-teal-400 animate-pulse"></i>
            <span class="text-slate-400">INSAT-3DS / SENTINEL-1B:</span>
            <span class="text-emerald-400 font-semibold">LINK OPTIMAL (99.8%)</span>
        </div>
        <div class="h-4 w-px bg-slate-800"></div>
        <div class="flex items-center space-x-2">
            <i class="fa-solid fa-water text-cyan-400"></i>
            <span class="text-slate-400">ZONE:</span>
            <span class="text-cyan-300 font-medium">ARABIAN SEA SECTOR 4</span>
        </div>
    </div>

    <!-- Right: Quick Actions & Profile -->
    <div class="flex items-center space-x-2 sm:space-x-3">
        <!-- Live Alert Trigger -->
        <button onclick="toggleAlertModal()" class="relative p-2 sm:p-2.5 rounded-lg bg-slate-900 border border-slate-800 text-slate-300 hover:text-cyan-400 hover:border-cyan-500/40 transition-all">
            <i class="fa-regular fa-bell text-sm sm:text-lg"></i>
            <span class="absolute -top-1 -right-1 flex h-4 w-4 sm:h-5 sm:w-5 items-center justify-center rounded-full bg-rose-500 text-[9px] sm:text-[10px] font-bold text-white shadow-lg animate-bounce">3</span>
        </button>

        <!-- Live Scan Simulation Button -->
        <button onclick="triggerLiveScan()" class="hidden sm:flex items-center space-x-2 px-3 py-1.5 sm:px-3.5 sm:py-2 rounded-lg bg-cyan-500/10 border border-cyan-400/40 text-cyan-300 hover:bg-cyan-500/20 hover:border-cyan-400 transition-all text-xs font-mono font-semibold shadow-[0_0_15px_rgba(0,217,255,0.15)]">
            <i class="fa-solid fa-satellite-dish text-cyan-400 animate-spin-slow"></i>
            <span class="hidden md:inline">START LIVE SCAN</span>
        </button>

        <!-- Operator Profile -->
        <div class="flex items-center space-x-2 sm:space-x-3 pl-2 sm:pl-3 border-l border-slate-800">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-slate-800 border border-cyan-500/30 flex items-center justify-center text-cyan-300 font-mono font-bold text-xs sm:text-sm shadow-[0_0_10px_rgba(0,217,255,0.2)] shrink-0">
                ICG
            </div>
            <div class="hidden md:block text-left">
                <p class="text-xs font-bold text-slate-200">Cmdr. R. Sharma</p>
                <p class="text-[10px] font-mono text-cyan-400">Indian Coast Guard Intelligence</p>
            </div>
        </div>
    </div>
</header>

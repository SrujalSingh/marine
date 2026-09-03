<!-- Desktop Sticky Sidebar (Visible on lg screens 1024px+) -->
<aside class="hidden lg:flex w-64 bg-[#050B16]/95 backdrop-blur-md border-r border-slate-800/80 flex-col justify-between py-4 shrink-0 select-none sticky top-[65px] h-[calc(100vh-65px)]">
    <div class="space-y-6">
        <div class="px-4">
            <p class="text-[10px] font-mono text-slate-500 uppercase tracking-widest font-semibold">COMMAND MODULES</p>
        </div>

        <nav class="space-y-1 px-2">
            <button onclick="switchTab('matrix')" id="nav-matrix" class="nav-item active w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium transition-all group">
                <i class="fa-solid fa-chart-line text-base text-cyan-400 group-hover:scale-110 transition-transform"></i>
                <span class="text-slate-200">Intelligence Matrix</span>
                <span class="ml-auto w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-[0_0_8px_#00D9FF]"></span>
            </button>

            <button onclick="switchTab('monitoring')" id="nav-monitoring" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-globe text-base text-teal-400 group-hover:scale-110 transition-transform"></i>
                <span>Live Ocean Monitoring</span>
            </button>

            <button onclick="switchTab('sar')" id="nav-sar" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-satellite text-base text-cyan-400 group-hover:scale-110 transition-transform"></i>
                <span>SAR Oil Detection</span>
                <span class="ml-auto px-1.5 py-0.5 rounded bg-rose-500/20 text-rose-400 text-[9px] font-bold">4 NEW</span>
            </button>

            <button onclick="switchTab('correlation')" id="nav-correlation" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-ship text-base text-amber-400 group-hover:scale-110 transition-transform"></i>
                <span>Vessel AIS Correlation</span>
            </button>

            <button onclick="switchTab('feeds')" id="nav-feeds" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-tower-observation text-base text-cyan-400 group-hover:scale-110 transition-transform"></i>
                <span>Satellite Feeds</span>
            </button>

            <button onclick="switchTab('timeline')" id="nav-timeline" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-timeline text-base text-purple-400 group-hover:scale-110 transition-transform"></i>
                <span>Incident Chain</span>
            </button>

            <button onclick="switchTab('drift')" id="nav-drift" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-wind text-base text-sky-400 group-hover:scale-110 transition-transform"></i>
                <span>AI Drift Prediction</span>
            </button>

            <button onclick="switchTab('heatmaps')" id="nav-heatmaps" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-fire-flame-curved text-base text-rose-400 group-hover:scale-110 transition-transform"></i>
                <span>Ocean Risk Heatmaps</span>
            </button>

            <button onclick="switchTab('analytics')" id="nav-analytics" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-chart-pie text-base text-emerald-400 group-hover:scale-110 transition-transform"></i>
                <span>Defense Analytics</span>
            </button>

            <button onclick="switchTab('reports')" id="nav-reports" class="nav-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs font-mono font-medium text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group">
                <i class="fa-solid fa-file-shield text-base text-amber-300 group-hover:scale-110 transition-transform"></i>
                <span>Evidence Exporter</span>
            </button>
        </nav>
    </div>

    <!-- System Status Bottom Card -->
    <div class="px-3">
        <div class="p-3 rounded-xl bg-slate-950/80 border border-slate-800 text-xs space-y-2">
            <div class="flex items-center justify-between font-mono">
                <span class="text-slate-400">UNet Engine</span>
                <span class="text-emerald-400 font-bold">v4.2-PROD</span>
            </div>
            <div class="w-full bg-slate-900 rounded-full h-1.5 overflow-hidden">
                <div class="bg-gradient-to-r from-cyan-500 to-teal-400 h-full w-[94%]"></div>
            </div>
            <p class="text-[10px] text-slate-500 font-mono">GPU Accel: ACTIVE (RTX A6000)</p>
        </div>
    </div>
</aside>

<!-- Mobile Horizontal Touch Scroll Menu (Visible on screens < 1024px) -->
<div class="lg:hidden w-full bg-[#050B16]/95 border-b border-slate-800 px-2 py-2 overflow-x-auto whitespace-nowrap scrollbar-none flex items-center space-x-2 shrink-0 z-40 sticky top-[57px]">
    <button onclick="switchTab('matrix')" class="px-3 py-1.5 rounded-lg bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 text-xs font-mono font-bold flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-chart-line"></i> <span>Matrix</span>
    </button>
    <button onclick="switchTab('monitoring')" class="px-3 py-1.5 rounded-lg bg-slate-900 text-slate-300 border border-slate-800 text-xs font-mono flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-globe text-teal-400"></i> <span>Monitoring</span>
    </button>
    <button onclick="switchTab('sar')" class="px-3 py-1.5 rounded-lg bg-slate-900 text-slate-300 border border-slate-800 text-xs font-mono flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-satellite text-cyan-400"></i> <span>SAR Detection</span>
    </button>
    <button onclick="switchTab('correlation')" class="px-3 py-1.5 rounded-lg bg-slate-900 text-slate-300 border border-slate-800 text-xs font-mono flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-ship text-amber-400"></i> <span>Vessel Correlation</span>
    </button>
    <button onclick="switchTab('drift')" class="px-3 py-1.5 rounded-lg bg-slate-900 text-slate-300 border border-slate-800 text-xs font-mono flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-wind text-sky-400"></i> <span>Drift Model</span>
    </button>
    <button onclick="switchTab('analytics')" class="px-3 py-1.5 rounded-lg bg-slate-900 text-slate-300 border border-slate-800 text-xs font-mono flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-chart-pie text-emerald-400"></i> <span>Analytics</span>
    </button>
    <button onclick="switchTab('reports')" class="px-3 py-1.5 rounded-lg bg-slate-900 text-slate-300 border border-slate-800 text-xs font-mono flex items-center space-x-1.5 shrink-0">
        <i class="fa-solid fa-file-shield text-amber-300"></i> <span>Reports</span>
    </button>
</div>

<!-- Mobile Navigation Drawer Overlay -->
<div id="mobile-nav-drawer" class="fixed inset-0 bg-slate-950/90 backdrop-blur-lg z-[90] hidden lg:hidden flex flex-col p-5 font-mono">
    <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-4">
        <span class="text-sm font-bold text-white tracking-widest flex items-center gap-2">
            <i class="fa-solid fa-shield-halved text-cyan-400"></i> MARITIME COMMAND MENU
        </span>
        <button onclick="toggleMobileMenu()" class="p-2 rounded-lg bg-slate-900 text-slate-400 hover:text-white">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>
    </div>

    <nav class="space-y-2 overflow-y-auto flex-1">
        <button onclick="switchTab('matrix')" class="w-full text-left px-4 py-3 rounded-xl bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 text-xs font-bold flex items-center space-x-3">
            <i class="fa-solid fa-chart-line text-cyan-400"></i> <span>Intelligence Matrix</span>
        </button>
        <button onclick="switchTab('monitoring')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-globe text-teal-400"></i> <span>Live Ocean Monitoring</span>
        </button>
        <button onclick="switchTab('sar')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-satellite text-cyan-400"></i> <span>SAR Oil Spill Detection</span>
        </button>
        <button onclick="switchTab('correlation')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-ship text-amber-400"></i> <span>AI Vessel AIS Correlation</span>
        </button>
        <button onclick="switchTab('feeds')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-tower-observation text-cyan-400"></i> <span>Satellite Telemetry Feeds</span>
        </button>
        <button onclick="switchTab('timeline')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-timeline text-purple-400"></i> <span>Incident Chain of Custody</span>
        </button>
        <button onclick="switchTab('drift')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-wind text-sky-400"></i> <span>AI Drift Prediction</span>
        </button>
        <button onclick="switchTab('heatmaps')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-fire-flame-curved text-rose-400"></i> <span>Ocean Risk Heatmaps</span>
        </button>
        <button onclick="switchTab('analytics')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-chart-pie text-emerald-400"></i> <span>Defense Analytics</span>
        </button>
        <button onclick="switchTab('reports')" class="w-full text-left px-4 py-3 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs flex items-center space-x-3">
            <i class="fa-solid fa-file-shield text-amber-300"></i> <span>Evidence Brief Generator</span>
        </button>
    </nav>
</div>

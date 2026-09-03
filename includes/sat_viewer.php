<div class="rounded-2xl bg-slate-950/90 border border-cyan-500/30 p-4 sm:p-5 shadow-[0_0_30px_rgba(0,217,255,0.1)]">
    <div class="flex flex-wrap items-center justify-between border-b border-slate-800 pb-3 mb-4 gap-2">
        <div>
            <div class="flex items-center space-x-2">
                <span class="px-2 py-0.5 rounded bg-cyan-500/20 text-cyan-300 text-[9px] sm:text-[10px] font-mono font-bold border border-cyan-500/40">SENTINEL-1B SAR C-BAND</span>
                <span class="text-[10px] sm:text-xs font-mono text-slate-400">Pass: 02:15:00 UTC</span>
            </div>
            <h3 class="text-base sm:text-lg font-bold font-display text-white mt-1 flex items-center gap-2">
                <i class="fa-solid fa-layer-group text-cyan-400"></i>
                AI SATELLITE IMAGE COMPARISON & SEGMENTATION VIEWER
            </h3>
        </div>

        <div class="flex items-center space-x-2 font-mono text-xs">
            <div class="flex items-center space-x-1.5 bg-slate-900 px-2.5 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-slate-800 text-[10px] sm:text-xs">
                <span class="text-slate-400">Band:</span>
                <select class="bg-transparent text-cyan-300 font-bold focus:outline-none cursor-pointer">
                    <option class="bg-slate-950 text-white">C-Band SAR (VV)</option>
                    <option class="bg-slate-950 text-white">C-Band SAR (VH)</option>
                    <option class="bg-slate-950 text-white">INSAT Optical RGB</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Interactive Touch & Mouse Split-Screen Image Slider Box -->
    <div class="relative w-full h-[300px] sm:h-[400px] lg:h-[480px] rounded-xl overflow-hidden border border-slate-800 select-none group touch-pan-y" id="sat-slider-container">
        <!-- Background Right Image: AI UNet Segmented Slick -->
        <div class="absolute inset-0 w-full h-full bg-[#030914]">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid slice">
                <rect width="1000" height="500" fill="#051426" />
                <path d="M 0,0 L 1000,0 L 1000,500 L 0,500 Z" fill="url(#ocean-grad)" />
                <defs>
                    <linearGradient id="ocean-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#05182e" />
                        <stop offset="100%" stop-color="#020a14" />
                    </linearGradient>
                    <filter id="glow-slick" x="-20%" y="-20%" width="140%" height="140%">
                        <feGaussianBlur stdDeviation="8" result="blur" />
                        <feComposite in="SourceGraphic" in2="blur" operator="over" />
                    </filter>
                </defs>

                <!-- Grid Lines -->
                <g stroke="rgba(0, 217, 255, 0.08)" stroke-width="1">
                    <line x1="100" y1="0" x2="100" y2="500" />
                    <line x1="300" y1="0" x2="300" y2="500" />
                    <line x1="500" y1="0" x2="500" y2="500" />
                    <line x1="700" y1="0" x2="700" y2="500" />
                    <line x1="900" y1="0" x2="900" y2="500" />
                    <line x1="0" y1="100" x2="1000" y2="100" />
                    <line x1="0" y1="250" x2="1000" y2="250" />
                    <line x1="0" y1="400" x2="1000" y2="400" />
                </g>

                <!-- Coastline -->
                <path d="M 850,0 Q 820,150 880,300 T 840,500 L 1000,500 L 1000,0 Z" fill="#062e24" stroke="#00E6A8" stroke-width="2" />
                <text x="880" y="240" fill="#00E6A8" font-size="12" font-family="monospace" font-weight="bold">COASTLINE (GOA)</text>

                <!-- AI Segmented Oil Slick Polygons -->
                <g filter="url(#glow-slick)">
                    <path d="M 320,180 C 380,140 480,190 540,240 C 600,290 520,360 420,340 C 340,320 280,240 320,180 Z" fill="rgba(255, 77, 77, 0.65)" stroke="#FF4D4D" stroke-width="3" />
                    <path d="M 450,230 C 510,210 610,240 680,290 C 720,320 660,360 580,330 Z" fill="rgba(255, 200, 87, 0.45)" stroke="#FFC857" stroke-width="2" stroke-dasharray="4,4" />
                </g>

                <!-- AI Annotation Labels -->
                <g font-family="monospace" font-size="11">
                    <rect x="360" y="220" width="160" height="42" rx="4" fill="rgba(5, 11, 22, 0.9)" stroke="#FF4D4D" stroke-width="1.5" />
                    <text x="370" y="238" fill="#FF4D4D" font-weight="bold">OIL SLICK (18.4 km²)</text>
                    <text x="370" y="254" fill="#00D9FF">UNet Conf: 98.4%</text>

                    <circle cx="310" cy="170" r="8" fill="#FFC857" stroke="#ffffff" stroke-width="2" />
                    <line x1="310" y1="170" x2="250" y2="120" stroke="#FFC857" stroke-width="1.5" stroke-dasharray="3,3" />
                    <rect x="150" y="95" width="160" height="36" rx="4" fill="rgba(5, 11, 22, 0.9)" stroke="#FFC857" stroke-width="1" />
                    <text x="160" y="112" fill="#FFC857" font-weight="bold">MV OCEAN PATRIOT</text>
                    <text x="160" y="125" fill="#ffffff">Pos: 3.2nm Upstream</text>
                </g>
            </svg>

            <div class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-rose-950/80 border border-rose-500/50 font-mono text-[10px] sm:text-xs text-rose-300 font-bold">
                AI UNet OVERLAY
            </div>
        </div>

        <!-- Foreground Left Image: Raw SAR Radar Imagery -->
        <div class="absolute inset-0 w-full h-full overflow-hidden" id="sat-slider-clip" style="width: 50%;">
            <div class="w-full h-full bg-[#12161f] relative">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid slice">
                    <rect width="1000" height="500" fill="#181e29" />
                    <filter id="sar-noise">
                        <feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="3" result="noise" />
                        <feColorMatrix type="matrix" values="0.3 0 0 0 0  0.3 0 0 0 0  0.3 0 0 0 0  0 0 0 1 0" />
                    </filter>
                    <rect width="1000" height="500" filter="url(#sar-noise)" opacity="0.4" />

                    <path d="M 320,180 C 380,140 480,190 540,240 C 600,290 520,360 420,340 C 340,320 280,240 320,180 Z" fill="#080b12" opacity="0.85" />
                    <path d="M 450,230 C 510,210 610,240 680,290 C 720,320 660,360 580,330 Z" fill="#0c101a" opacity="0.75" />

                    <circle cx="310" cy="170" r="5" fill="#ffffff" filter="drop-shadow(0 0 6px #ffffff)" />
                    <circle cx="710" cy="120" r="4" fill="#ffffff" />
                    <circle cx="210" cy="380" r="4" fill="#ffffff" />
                </svg>

                <div class="absolute bottom-3 left-3 px-2.5 py-1 rounded-lg bg-slate-950/90 border border-slate-700 font-mono text-[10px] sm:text-xs text-slate-300 font-bold">
                    RAW SENTINEL-1B SAR
                </div>
            </div>
        </div>

        <!-- Draggable Handle Divider -->
        <div class="absolute top-0 bottom-0 w-1 bg-cyan-400 shadow-[0_0_12px_#00D9FF] cursor-ew-resize z-30 flex items-center justify-center" id="sat-slider-handle" style="left: 50%;">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-slate-900 border-2 border-cyan-400 shadow-[0_0_15px_#00D9FF] flex items-center justify-center text-cyan-300 text-xs">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>
        </div>
    </div>

    <!-- AI Classification Legend -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3 mt-3.5 font-mono text-xs">
        <div class="flex items-center space-x-2 p-2 sm:p-2.5 rounded-lg bg-slate-900/80 border border-rose-500/30">
            <span class="w-3 h-3 rounded bg-rose-500 shadow-[0_0_8px_#FF4D4D] shrink-0"></span>
            <div>
                <p class="text-white font-bold text-[11px] sm:text-xs">Heavy Oil Slick</p>
                <p class="text-[9px] sm:text-[10px] text-slate-400">98.4% UNet Match</p>
            </div>
        </div>
        <div class="flex items-center space-x-2 p-2 sm:p-2.5 rounded-lg bg-slate-900/80 border border-amber-500/30">
            <span class="w-3 h-3 rounded bg-amber-400 shadow-[0_0_8px_#FFC857] shrink-0"></span>
            <div>
                <p class="text-white font-bold text-[11px] sm:text-xs">Dispersed Sheen</p>
                <p class="text-[9px] sm:text-[10px] text-slate-400">Sheen Dispersion</p>
            </div>
        </div>
        <div class="flex items-center space-x-2 p-2 sm:p-2.5 rounded-lg bg-slate-900/80 border border-teal-500/30">
            <span class="w-3 h-3 rounded bg-teal-400 shadow-[0_0_8px_#00E6A8] shrink-0"></span>
            <div>
                <p class="text-white font-bold text-[11px] sm:text-xs">Coastline (Goa)</p>
                <p class="text-[9px] sm:text-[10px] text-slate-400">85 nm Distance</p>
            </div>
        </div>
        <div class="flex items-center space-x-2 p-2 sm:p-2.5 rounded-lg bg-slate-900/80 border border-cyan-500/30">
            <span class="w-3 h-3 rounded bg-cyan-400 shadow-[0_0_8px_#00D9FF] shrink-0"></span>
            <div>
                <p class="text-white font-bold text-[11px] sm:text-xs">Clean Ocean</p>
                <p class="text-[9px] sm:text-[10px] text-slate-400">Radar Backscatter</p>
            </div>
        </div>
    </div>
</div>

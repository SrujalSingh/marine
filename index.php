<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SIH26143 – DRDO Maritime Oil Spill Intelligence System</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                screens: {
                    'xs': '375px',
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                    '3xl': '1920px',
                },
                extend: {
                    colors: {
                        navy: {
                            950: '#050B16',
                            900: '#0A1224',
                            850: '#0E1A34',
                            800: '#142346',
                        },
                        cyan: {
                            400: '#00D9FF',
                            500: '#00B8D9',
                        },
                        electric: '#1E90FF',
                        teal: { glow: '#00E6A8' },
                        amber: { alert: '#FFC857' },
                        red: { alert: '#FF4D4D' },
                    },
                    fontFamily: {
                        mono: ['Space Mono', 'Consolas', 'monospace'],
                        display: ['Space Grotesk', 'sans-serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'radar-sweep': 'radarSweep 4s linear infinite',
                        'spin-slow': 'spin 12s linear infinite',
                        'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                    },
                    keyframes: {
                        radarSweep: {
                            '0%': { transform: 'rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { opacity: '0.5' },
                            '50%': { opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS Styles -->
    <style>
        html, body {
            background-color: #050B16;
            color: #e2e8f0;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            width: 100%;
        }

        /* Custom Touch Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }
        ::-webkit-scrollbar-track {
            background: #050B16;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00D9FF;
        }

        /* Leaflet Dark Custom Canvas Styling */
        .leaflet-container {
            background: #050B16 !important;
            font-family: 'Space Mono', monospace !important;
            border-radius: 0.75rem;
            z-index: 10;
        }
        .leaflet-tile {
            filter: brightness(0.6) invert(1) contrast(3) hue-rotate(200deg) saturate(0.3) !important;
        }
        .leaflet-popup-content-wrapper, .leaflet-popup-tip {
            background: #050B16 !important;
            border: 1px solid #00D9FF !important;
            color: #ffffff !important;
            box-shadow: 0 0 20px rgba(0, 217, 255, 0.3) !important;
            max-width: 280px !important;
        }

        .nav-item.active {
            background: rgba(0, 217, 255, 0.15);
            border-left: 3px solid #00D9FF;
            color: #ffffff;
        }

        /* Prevent text zoom issues on mobile */
        @media screen and (max-width: 768px) {
            .nav-item.active {
                border-left: none;
                border-bottom: 2px solid #00D9FF;
            }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-[#050B16] text-slate-100 antialiased selection:bg-cyan-500/30 selection:text-cyan-300">

    <!-- Top Navigation Bar -->
    <?php include 'includes/header.php'; ?>

    <!-- Main Command Layout -->
    <div class="flex-1 flex flex-col lg:flex-row overflow-x-hidden min-h-0">
        <!-- Left Sidebar Navigation (Horizontal scroll on mobile, vertical sticky on desktop) -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-3 sm:p-4 lg:p-6 overflow-y-auto overflow-x-hidden w-full max-w-full space-y-4 sm:space-y-6">
            <!-- Hero Command Center Banner -->
            <?php include 'includes/hero.php'; ?>

            <!-- Animated Defense KPI Metric Cards -->
            <?php include 'includes/kpis.php'; ?>

            <!-- Main Center Interactive Ocean Map -->
            <?php include 'includes/map.php'; ?>

            <!-- AI Suspect Vessel Correlation Matrix -->
            <?php include 'includes/correlation.php'; ?>

            <!-- Split-Screen Satellite Detection Viewer -->
            <?php include 'includes/sat_viewer.php'; ?>

            <!-- Incident Chain of Custody Timeline -->
            <?php include 'includes/timeline.php'; ?>

            <!-- Ocean Hydrodynamic Drift & Heatmaps -->
            <?php include 'includes/drift.php'; ?>

            <!-- Military Alert Center -->
            <?php include 'includes/alerts.php'; ?>

            <!-- Defense Analytics & Chart Visualizations -->
            <?php include 'includes/analytics.php'; ?>

            <!-- Intelligence Evidence Exporter & Reports -->
            <?php include 'includes/reports.php'; ?>
        </main>
    </div>

    <!-- Modals (Live Scan & Briefing Exporter) -->
    <?php include 'includes/modal.php'; ?>

    <!-- Leaflet JS & Chart.js Libraries -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Dashboard Core Interactivity Scripts -->
    <script>
        // Live UTC Clock Ticker
        function updateClock() {
            const now = new Date();
            const utcString = now.toUTCString().split(' ')[4] + ' UTC';
            const clockEl = document.getElementById('utc-clock');
            if (clockEl) clockEl.innerText = utcString;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // Mobile Menu Drawer Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-nav-drawer');
            if (menu) menu.classList.toggle('hidden');
        }

        // Navigation Tab Switching
        function switchTab(tabId) {
            document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
            const activeBtn = document.getElementById('nav-' + tabId);
            if (activeBtn) activeBtn.classList.add('active');
            
            // Close mobile menu drawer if open
            const menu = document.getElementById('mobile-nav-drawer');
            if (menu) menu.classList.add('hidden');
        }

        // Leaflet Map Initialization
        let map, spillPolygon;
        function initMap() {
            const loader = document.getElementById('map-loader');
            const mapContainer = document.getElementById('command-map');
            if (!mapContainer) return;

            // Center on Arabian Sea shipping lane off Goa (15.421°N, 71.892°E)
            map = L.map('command-map', {
                center: [15.421, 71.892],
                zoom: window.innerWidth < 768 ? 6 : 7,
                zoomControl: false,
                attributionControl: false
            });

            // Dark Tactical CartoDB Tiles
            L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                maxZoom: 18,
                subdomains: 'abcd'
            }).addTo(map);

            L.control.zoom({ position: 'topright' }).addTo(map);

            // Hide loader smoothly
            if (loader) {
                setTimeout(() => {
                    loader.style.opacity = '0';
                    setTimeout(() => loader.style.display = 'none', 500);
                }, 500);
            }

            // Primary Glowing Oil Spill Polygon
            const spillCoords = [
                [15.45, 71.85],
                [15.48, 71.92],
                [15.42, 71.98],
                [15.38, 71.94],
                [15.39, 71.86]
            ];
            spillPolygon = L.polygon(spillCoords, {
                color: '#FF4D4D',
                fillColor: '#FF4D4D',
                fillOpacity: 0.55,
                weight: 3,
                dashArray: '6, 6'
            }).addTo(map);

            spillPolygon.bindPopup(`
                <div class="font-mono text-xs p-1 space-y-2">
                    <div class="flex items-center justify-between border-b border-rose-500/40 pb-1">
                        <span class="font-bold text-rose-400">SPILL-2026-089-AS</span>
                        <span class="text-[10px] bg-rose-600 text-white px-1.5 py-0.5 rounded font-bold">CRITICAL</span>
                    </div>
                    <p><strong class="text-slate-300">Area:</strong> 18.4 km² (~4,200 Barrels)</p>
                    <p><strong class="text-slate-300">Detected:</strong> 02:15:00 UTC (Sentinel-1B)</p>
                    <p><strong class="text-slate-300">Top Suspect:</strong> <span class="text-amber-400 font-bold">MV OCEAN PATRIOT (95%)</span></p>
                    <button onclick="dispatchCoastGuard('MV OCEAN PATRIOT')" class="w-full mt-2 py-1.5 rounded bg-rose-600 hover:bg-rose-500 text-white font-bold text-[11px] transition-all">
                        DISPATCH INTERCEPT
                    </button>
                </div>
            `);

            // Suspect Vessel Marker
            const suspectIcon = L.divIcon({
                className: 'custom-vessel-icon',
                html: `<div class="relative w-8 h-8 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full bg-rose-500/30 animate-ping"></div>
                        <i class="fa-solid fa-ship text-rose-400 text-base sm:text-lg shadow-lg"></i>
                       </div>`,
                iconSize: [32, 32]
            });
            L.marker([15.440, 71.870], { icon: suspectIcon }).addTo(map).bindPopup(`
                <div class="font-mono text-xs p-1">
                    <strong class="text-rose-400 text-sm">MV OCEAN PATRIOT</strong><br>
                    IMO: 9482103 | Panama VLCC<br>
                    <span class="text-rose-400 font-bold">AI Match: 95% Confidence</span>
                </div>
            `);

            // Coast Guard Patrol Boat Marker
            const icgIcon = L.divIcon({
                className: 'custom-icg-icon',
                html: `<div class="w-8 h-8 rounded-full bg-cyan-500/20 border-2 border-cyan-400 flex items-center justify-center shadow-[0_0_15px_#00D9FF]">
                        <i class="fa-solid fa-shield text-cyan-300 text-xs"></i>
                       </div>`,
                iconSize: [32, 32]
            });
            L.marker([15.220, 72.100], { icon: icgIcon }).addTo(map).bindPopup(`
                <div class="font-mono text-xs p-1">
                    <strong class="text-cyan-400">INS SARATHI (ICG-204)</strong><br>
                    Patrol Vessel | 24 kts
                </div>
            `);

            // Invalidate map size on window resize
            window.addEventListener('resize', () => {
                if (map) map.invalidateSize();
            });
        }

        function centerMapOnGoa() {
            if (map) map.setView([15.421, 71.892], window.innerWidth < 768 ? 7 : 9);
        }

        function toggleMapLayer(layer) {
            alert('Toggled Map View Layer: ' + layer.toUpperCase());
        }

        // Split-Screen Interactive Touch & Mouse Slider
        function initSatSlider() {
            const container = document.getElementById('sat-slider-container');
            const clip = document.getElementById('sat-slider-clip');
            const handle = document.getElementById('sat-slider-handle');

            if (!container || !clip || !handle) return;

            let isDragging = false;

            function updateSliderPos(x) {
                const rect = container.getBoundingClientRect();
                let offsetX = x - rect.left;
                if (offsetX < 0) offsetX = 0;
                if (offsetX > rect.width) offsetX = rect.width;

                const percent = (offsetX / rect.width) * 100;
                clip.style.width = percent + '%';
                handle.style.left = percent + '%';
            }

            container.addEventListener('mousedown', (e) => {
                isDragging = true;
                updateSliderPos(e.clientX);
            });

            window.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                updateSliderPos(e.clientX);
            });

            window.addEventListener('mouseup', () => {
                isDragging = false;
            });

            // Touch events for tablets & smartphones
            container.addEventListener('touchstart', (e) => {
                isDragging = true;
                if (e.touches && e.touches[0]) updateSliderPos(e.touches[0].clientX);
            }, { passive: true });

            window.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                if (e.touches && e.touches[0]) updateSliderPos(e.touches[0].clientX);
            }, { passive: true });

            window.addEventListener('touchend', () => isDragging = false);
        }

        // Initialize Chart.js Responsive Defense Analytics
        function initCharts() {
            // Chart 1: Spill Trends
            const ctx1 = document.getElementById('spillTrendChart');
            if (ctx1) {
                new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                        datasets: [
                            {
                                label: 'Spill Volume (Barrels)',
                                data: [12000, 9500, 14000, 8200, 6100, 9800, 5400, 7200, 4200],
                                borderColor: '#00D9FF',
                                backgroundColor: 'rgba(0, 217, 255, 0.15)',
                                fill: true,
                                tension: 0.4,
                                pointBackgroundColor: '#00D9FF',
                                pointRadius: window.innerWidth < 640 ? 2 : 4
                            },
                            {
                                label: 'AI Detection Rate (%)',
                                data: [88, 91, 93, 94, 96, 97, 97.8, 98.1, 98.4],
                                borderColor: '#00E6A8',
                                borderDash: [4, 4],
                                fill: false,
                                tension: 0.3,
                                pointBackgroundColor: '#00E6A8',
                                pointRadius: window.innerWidth < 640 ? 2 : 3
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { labels: { color: '#94a3b8', font: { family: 'Space Mono', size: window.innerWidth < 640 ? 9 : 11 } } }
                        },
                        scales: {
                            x: { grid: { color: 'rgba(255, 255, 255, 0.05)' }, ticks: { color: '#94a3b8', font: { size: 10 } } },
                            y: { grid: { color: 'rgba(255, 255, 255, 0.05)' }, ticks: { color: '#94a3b8', font: { size: 10 } } }
                        }
                    }
                });
            }

            // Chart 2: Vessel Risk Category Distribution
            const ctx2 = document.getElementById('vesselRiskChart');
            if (ctx2) {
                new Chart(ctx2, {
                    type: 'doughnut',
                    data: {
                        labels: ['Critical Offender', 'High Risk', 'Medium Risk', 'Safe Transit'],
                        datasets: [{
                            data: [3, 9, 24, 106],
                            backgroundColor: ['#FF4D4D', '#FFC857', '#00D9FF', '#1e293b'],
                            borderColor: '#050B16',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { 
                                position: window.innerWidth < 640 ? 'bottom' : 'right', 
                                labels: { color: '#94a3b8', font: { family: 'Space Mono', size: window.innerWidth < 640 ? 9 : 11 } } 
                            }
                        }
                    }
                });
            }
        }

        // Live Radar Scan Modal Action
        function triggerLiveScan() {
            const modal = document.getElementById('scan-modal');
            const progressBar = document.getElementById('scan-progress-bar');
            const percentText = document.getElementById('scan-percent');
            const stepLabel = document.getElementById('scan-step-label');
            const terminal = document.getElementById('scan-terminal');

            if (!modal) return;
            modal.classList.remove('hidden');

            progressBar.style.width = '0%';
            percentText.innerText = '0%';
            terminal.innerHTML = '<p class="text-cyan-400">[02:22:01 UTC] Connecting to ISRO Ground Station...</p>';

            let progress = 0;
            const steps = [
                'Acquiring Sentinel-1B SAR Radar Pass...',
                'Filtering Ocean Wave Noise...',
                'Running UNet Segmentation Inference...',
                'Correlate AIS Trajectory Log Database...',
                'MATCH CONFIRMED: MV OCEAN PATRIOT (95%)'
            ];

            const interval = setInterval(() => {
                progress += 20;
                progressBar.style.width = progress + '%';
                percentText.innerText = progress + '%';
                
                const stepIdx = Math.min(Math.floor(progress / 25), steps.length - 1);
                stepLabel.innerText = steps[stepIdx];
                
                const p = document.createElement('p');
                p.className = 'text-slate-300';
                p.innerText = `[${new Date().toISOString().split('T')[1].slice(0,8)} UTC] ${steps[stepIdx]}`;
                terminal.appendChild(p);
                terminal.scrollTop = terminal.scrollHeight;

                if (progress >= 100) {
                    clearInterval(interval);
                }
            }, 500);
        }

        function closeScanModal() {
            document.getElementById('scan-modal')?.classList.add('hidden');
        }

        function generateReportDoc(title) {
            const modal = document.getElementById('report-modal');
            const titleEl = document.getElementById('report-modal-title');
            if (modal) {
                if (titleEl) titleEl.innerText = title.toUpperCase() + ' READY';
                modal.classList.remove('hidden');
            }
        }

        function openReportModal() {
            generateReportDoc('PDF Defense Briefing');
        }

        function closeReportModal() {
            document.getElementById('report-modal')?.classList.add('hidden');
        }

        function dispatchCoastGuard(vesselName) {
            alert('🚨 COAST GUARD INTERCEPT NOTICE ISSUED!\n\nTarget Vessel: ' + vesselName + '\nPatrol Vessel INS Sarathi dispatched to Sector 4.');
        }

        function viewVesselTrajectory(imo) {
            alert('Loading AIS Trajectory History for IMO: ' + imo);
        }

        function toggleAlertModal() {
            const alertSec = document.getElementById('alerts-section');
            if (alertSec) alertSec.scrollIntoView({ behavior: 'smooth' });
        }

        function acknowledgeAlert(id) {
            alert('Alert #' + id + ' acknowledged and logged to audit trail.');
        }

        function triggerReCorrelation() {
            alert('Re-running UNet Back-Trace Model on latest AIS coordinates...');
        }

        function downloadHeatmapReport() {
            alert('Exporting Ocean Risk Heatmap GIS Data (GeoJSON)...');
        }

        function setDriftHorizon(hours) {
            alert('Drift Horizon updated to +' + hours + ' Hours Forecast Model.');
        }

        // Run On Page Load
        window.addEventListener('DOMContentLoaded', () => {
            initMap();
            initSatSlider();
            initCharts();
        });
    </script>
</body>
</html>

# SIH26143 – DRDO-Level AI Maritime Intelligence Dashboard

**Project Title**: Leveraging Satellite Imagery to Detect Oil Spills and Correlate Ship Movement Data to Identify the Responsible Vessel
**Target Agencies**: DRDO, ISRO, Indian Coast Guard, NTRO, National Maritime Intelligence Command

---

## Key Features

1. **Top Navigation & Live Telemetry**:
   - Live UTC & IST military clock ticker.
   - Real-time Satellite link status (`INSAT-3DS / Sentinel-1B: ONLINE 99.8%`).
   - DEFCON 3 threat level indicator & Indian Coast Guard Sector 4 active badge.

2. **Main Ocean Command Map (Leaflet.js)**:
   - Centered on Arabian Sea / Bay of Bengal shipping lanes (Goa / Chennai / Malacca).
   - Glowing neon red oil spill vectors ($18.4\ \text{km}^2$).
   - Live AIS vessel markers with trajectory vectors and speed anomaly warnings.
   - Interactive popups with spill details and Coast Guard Intercept triggers.

3. **AI Suspect Vessel Correlation Matrix**:
   - Automated UNet trajectory back-trace ranking offenders by probability.
   - **MV OCEAN PATRIOT** (IMO 9482103) - **95% Confidence** (Critical Red) with circular progress indicators, speed drop logs, and distance to spill.
   - **MT MALABAR STAR** (IMO 9320194) - **82% Confidence** (High Amber).
   - **SS ARABIAN GULF** (IMO 9193882) - **41% Confidence** (Medium Blue).

4. **Split-Screen SAR Satellite Imagery Viewer**:
   - Interactive before/after drag slider comparing Raw Synthetic Aperture Radar (SAR) C-Band image against AI UNet Neural Network Segmentation overlay (Oil Slick, Sheen Tail, Coastline, Clean Water).

5. **Automated Incident Chain of Custody Timeline**:
   - Step-by-step military incident timeline from satellite overpass to Coast Guard dispatch.

6. **Ocean Hydrodynamic Drift & Heatmap Predictor**:
   - 6h, 12h, and 24h spill migration forecasting based on wind vectors (14 kts @ 220° SW) and surface ocean currents (2.4 kts SW).

7. **Military Alert Center & Defense Analytics**:
   - Real-time alert log with triage severity pills.
   - Chart.js visualizations for spill volume trends and vessel risk distribution.

8. **Defense Briefing & Evidence Exporter**:
   - Printable PDF Defense Briefing, IMO Prosecution Docket, and Environmental Impact Assessment generator.

---

## How to Run

1. Open a terminal in `e:\dashboard`.
2. Run:
   ```bash
   php -S localhost:8000
   ```
   Or double-click `serve.bat`.
3. Open `http://localhost:8000` in your web browser.

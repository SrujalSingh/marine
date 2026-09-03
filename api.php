<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$action = $_GET['action'] ?? 'all';

$data = [
    'system' => [
        'name' => 'SIH26143 Maritime Oil Spill Intelligence Matrix',
        'agency' => 'DRDO / ISRO / Indian Coast Guard Maritime Center',
        'status' => 'ONLINE',
        'satellites' => [
            ['id' => 'SENTINEL-1B', 'type' => 'SAR C-Band', 'status' => 'ACTIVE', 'pass_utc' => '02:15:00 UTC', 'quality' => '99.8%'],
            ['id' => 'INSAT-3DS', 'type' => 'Geostationary Optical', 'status' => 'ACTIVE', 'pass_utc' => 'CONTINUOUS', 'quality' => '98.5%'],
            ['id' => 'RISAT-1A', 'type' => 'C-Band High Res', 'status' => 'STANDBY', 'pass_utc' => '04:30:00 UTC', 'quality' => '97.2%'],
        ],
        'monitoring_zone' => 'Indian Ocean / Arabian Sea / Bay of Bengal Sector 4',
        'defcon' => 3
    ],
    'kpis' => [
        ['label' => 'Active Oil Spills', 'val' => 4, 'unit' => 'Verified Incidents', 'change' => '+1 today', 'status' => 'critical'],
        ['label' => 'Ocean Area Monitored', 'val' => '1,420,800', 'unit' => 'km²', 'change' => '100% Coverage', 'status' => 'nominal'],
        ['label' => 'Ships Tracked Today', 'val' => '3,842', 'unit' => 'AIS Targets', 'change' => '+142 in Sector 4', 'status' => 'nominal'],
        ['label' => 'High-Risk Vessels', 'val' => 12, 'unit' => 'Flagged Tankers', 'change' => '3 Near Spills', 'status' => 'warning'],
        ['label' => 'AI Detection Accuracy', 'val' => '98.4%', 'unit' => 'UNet SAR Model', 'change' => '+1.2% Precision', 'status' => 'success'],
        ['label' => 'Response Time Saved', 'val' => '-78%', 'unit' => 'Automated Correlation', 'change' => 'Avg 12m to ID', 'status' => 'success'],
    ],
    'spills' => [
        [
            'id' => 'SPILL-2026-089-AS',
            'lat' => 15.421,
            'lng' => 71.892,
            'location' => 'Arabian Sea (85 nm West of Goa)',
            'area_sqkm' => 18.4,
            'est_barrels' => 4200,
            'severity' => 'CRITICAL',
            'detected_utc' => '2026-09-03 02:15:00 UTC',
            'sat_source' => 'Sentinel-1B SAR C-Band',
            'nearby_vessels' => 14,
            'top_suspect' => 'MV OCEAN PATRIOT',
            'confidence' => 95,
            'drift_direction' => '220° SW at 2.4 knots',
        ],
        [
            'id' => 'SPILL-2026-090-BB',
            'lat' => 12.854,
            'lng' => 82.110,
            'location' => 'Bay of Bengal (60 nm East of Chennai)',
            'area_sqkm' => 6.2,
            'est_barrels' => 1100,
            'severity' => 'MEDIUM',
            'detected_utc' => '2026-09-03 01:40:00 UTC',
            'sat_source' => 'INSAT-3DS Multispectral',
            'nearby_vessels' => 8,
            'top_suspect' => 'MT MALABAR STAR',
            'confidence' => 82,
            'drift_direction' => '190° S at 1.8 knots',
        ],
        [
            'id' => 'SPILL-2026-091-MS',
            'lat' => 5.892,
            'lng' => 95.412,
            'location' => 'Malacca Strait Entrance',
            'area_sqkm' => 24.1,
            'est_barrels' => 6800,
            'severity' => 'CRITICAL',
            'detected_utc' => '2026-09-02 22:10:00 UTC',
            'sat_source' => 'Sentinel-1B SAR C-Band',
            'nearby_vessels' => 31,
            'top_suspect' => 'SS ARABIAN GULF',
            'confidence' => 89,
            'drift_direction' => '135° SE at 3.1 knots',
        ]
    ],
    'suspect_vessels' => [
        [
            'name' => 'MV OCEAN PATRIOT',
            'imo' => '9482103',
            'flag' => 'Panama (Panama City)',
            'type' => 'VLCC Oil Tanker',
            'confidence' => 95,
            'risk_level' => 'CRITICAL',
            'distance_nm' => 3.2,
            'speed_kts' => 3.1,
            'prev_speed_kts' => 16.4,
            'heading' => '240° WSW',
            'anomaly' => 'Sudden speed drop & course loop detected near spill origin at 02:14 UTC',
            'destination' => 'Fujairah -> Singapore',
            'lat' => 15.440,
            'lng' => 71.870,
        ],
        [
            'name' => 'MT MALABAR STAR',
            'imo' => '9320194',
            'flag' => 'Liberia (Monrovia)',
            'type' => 'Chemical Tanker',
            'confidence' => 82,
            'risk_level' => 'HIGH',
            'distance_nm' => 8.7,
            'speed_kts' => 11.2,
            'prev_speed_kts' => 12.0,
            'heading' => '185° S',
            'anomaly' => 'Unscheduled tank washing pattern identified via AIS back-trace',
            'destination' => 'Mumbai -> Colombo',
            'lat' => 15.380,
            'lng' => 71.950,
        ],
        [
            'name' => 'SS ARABIAN GULF',
            'imo' => '9193882',
            'flag' => 'Marshall Islands',
            'type' => 'Crude Oil Carrier',
            'confidence' => 41,
            'risk_level' => 'MEDIUM',
            'distance_nm' => 19.4,
            'speed_kts' => 14.8,
            'prev_speed_kts' => 15.0,
            'heading' => '080° E',
            'anomaly' => 'In vicinity during satellite overpass; consistent speed',
            'destination' => 'Ras Tanura -> Visakhapatnam',
            'lat' => 15.520,
            'lng' => 71.720,
        ]
    ]
];

if ($action === 'spills') {
    echo json_encode($data['spills']);
} elseif ($action === 'vessels') {
    echo json_encode($data['suspect_vessels']);
} else {
    echo json_encode($data);
}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <div id="container"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/networkgraph.js"></script>

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'networkgraph',
            },
            plotOptions: {
                networkgraph: {
                    keys: ['from', 'to', 'color'],
                    layoutAlgorithm: {
                        enableSimulation: true,
                        friction: -0.9
                    }
                }
            },
            series: [{
                dataLabels: {
                    enabled: true,
                    linkFormat: ''
                },

                data: [
                    // ['Slavic', 'East Slavic', 'red'],
                    // ['Slavic', 'West Slavic', 'red'],
                    // ['Slavic', 'South Slavic', 'red'],
                    // // Leaves:
                    // ['West Slavic', 'Polish'],
                    // ['West Slavic', 'Slovak'],
                    // ['West Slavic', 'Czech'],
                    // ['West Slavic', 'Wendish'],
                    // ['East Slavic', 'Bulgarian'],
                    // ['East Slavic', 'Old Church Slavonic'],
                    // ['East Slavic', 'Macedonian'],
                    // ['East Slavic', 'Serbo-Croatian'],
                    // ['East Slavic', 'Slovene'],
                    // ['South Slavic', 'Russian'],
                    // ['South Slavic', 'Ukrainian'],
                    // ['South Slavic', 'Belarusian'],
                    // ['South Slavic', 'Rusyn']
                    ['MKS-TPYO-EN1-Z20HS', 'MKS-KRSA-EN1-Z20HS'],
                    ['MKS-KRSA-EN1-Z20HS', 'MKS-SPSR-EN1-Z20HS'],
                    ['MKS-SPSR-EN1-Z20HS', 'PAL-BBLK-EN1-Z20HS'],
                    ['PAL-BBLK-EN1-Z20HS', 'PAL-PSKY-EN1-Z20HS'],
                    ['PAL-PSKY-EN1-Z20HS', 'MKS-BLBD-EN1-Z20HS'],
                    ['MKS-BLBD-EN1-Z20HS', 'PAL-DGLA-EN1-Z20HS'],
                    ['PAL-DGLA-EN1-Z20HS', 'PAL-CN1-X8'],
                    ['PAL-CN1-X8', 'PAL-CN2-X8'],
                    ['PAL-CN2-X8', 'MKS-SID-CN1-X8A'],
                    ['MKS-SID-CN1-X8A', 'MKS-SID-CN1-ZM8SP'],
                    ['MKS-SID-CN1-ZM8SP', 'MKS-KIM-CN1-ZM8SP'],
                    ['MKS-KIM-CN1-ZM8SP', 'MKS-KIM-P-NCS5K'],
                    // ['MKS-KIM-P-NCS5K', 'SBY-KYN-P2-NCS5K'],
                    // ['SBY-KYN-P2-NCS5K', 'JKT-ANC-P-NCS5K'],
                    // ['JKT-ANC-P-NCS5K', 'JKT-CYB-CN1-H8X08'],
                    // ['JKT-CYB-CN1-H8X08', 'JKT-CYB-CN1-SR12'],

                    ['BJM-SRO-EN1-Z20HS', 'BJM-BTL-AN1-ZM8S'],
                    ['BJM-BTL-AN1-ZM8S', 'BJM-KTH-CN1-ZM8SP'],
                    ['BJM-KTH-CN1-ZM8SP', 'BJM-KTH-P-NCS5K'],
                    ['BJM-KTH-P-NCS5K', 'SBY-KYN-P2-NCS5K'],
                    ['SBY-KYN-P2-NCS5K', 'JKT-ANC-P-NCS5K'],
                    ['JKT-ANC-P-NCS5K', 'JKT-CYB-CN1-H8X08'],
                    ['BJM-SRO-EN1-Z20HS', 'BJM-BTL-AN1-ZM8S'],
                    ['BJM-BTL-AN1-ZM8S', 'BJM-KTH-CN1-ZM8SP'],
                    ['BJM-KTH-CN1-ZM8SP', 'BJM-KTH-CN2-ZM8SP'],
                    ['BJM-KTH-CN2-ZM8SP', 'SBY-KYN-P1-NCS5K'],
                    ['SBY-KYN-P1-NCS5K', 'JKT-KPI-P-NCS5K'],
                    ['JKT-KPI-P-NCS5K', 'JKT-KPI-CN1-H9K20'],
                    ['JKT-KPI-CN1-H9K20', 'JKT-CYB-CN1-H8X08'],



                    // ['Proto Indo-European', 'Balto-Slavic'],
                    // ['Proto Indo-European', 'Germanic'],
                    // ['Proto Indo-European', 'Celtic'],
                    // ['Proto Indo-European', 'Italic'],
                    // ['Proto Indo-European', 'Hellenic'],
                    // ['Proto Indo-European', 'Anatolian'],
                    // ['Proto Indo-European', 'Indo-Iranian'],
                    // ['Proto Indo-European', 'Tocharian'],
                    // ['Indo-Iranian', 'Dardic'],
                    // ['Indo-Iranian', 'Indic'],
                    // ['Indo-Iranian', 'Iranian'],
                    // ['Iranian', 'Old Persian'],
                    // ['Old Persian', 'Middle Persian'],
                    // ['Indic', 'Sanskrit'],
                    // ['Italic', 'Osco-Umbrian'],
                    // ['Italic', 'Latino-Faliscan'],
                    // ['Latino-Faliscan', 'Latin'],
                    // ['Celtic', 'Brythonic'],
                    // ['Celtic', 'Goidelic'],
                    // ['Germanic', 'North Germanic'],
                    // ['Germanic', 'West Germanic'],
                    // ['Germanic', 'East Germanic'],
                    // ['North Germanic', 'Old Norse'],
                    // ['North Germanic', 'Old Swedish'],
                    // ['North Germanic', 'Old Danish'],
                    // ['West Germanic', 'Old English'],
                    // ['West Germanic', 'Old Frisian'],
                    // ['West Germanic', 'Old Dutch'],
                    // ['West Germanic', 'Old Low German'],
                    // ['West Germanic', 'Old High German'],
                    // ['Old Norse', 'Old Icelandic'],
                    // ['Old Norse', 'Old Norwegian'],
                    // ['Old Norwegian', 'Middle Norwegian'],
                    // ['Old Swedish', 'Middle Swedish'],
                    // ['Old Danish', 'Middle Danish'],
                    // ['Old English', 'Middle English'],
                    // ['Old Dutch', 'Middle Dutch'],
                    // ['Old Low German', 'Middle Low German'],
                    // ['Old High German', 'Middle High German'],
                    // ['Balto-Slavic', 'Baltic'],
                    // ['Balto-Slavic', 'Slavic'],
                    // ['Slavic', 'East Slavic'],
                    // ['Slavic', 'West Slavic'],
                    // ['Slavic', 'South Slavic'],
                    // // Leaves:
                    // ['Proto Indo-European', 'Phrygian'],
                    // ['Proto Indo-European', 'Armenian'],
                    // ['Proto Indo-European', 'Albanian'],
                    // ['Proto Indo-European', 'Thracian'],
                    // ['Tocharian', 'Tocharian A'],
                    // ['Tocharian', 'Tocharian B'],
                    // ['Anatolian', 'Hittite'],
                    // ['Anatolian', 'Palaic'],
                    // ['Anatolian', 'Luwic'],
                    // ['Anatolian', 'Lydian'],
                    // ['Iranian', 'Balochi'],
                    // ['Iranian', 'Kurdish'],
                    // ['Iranian', 'Pashto'],
                    // ['Iranian', 'Sogdian'],
                    // ['Old Persian', 'Pahlavi'],
                    // ['Middle Persian', 'Persian'],
                    // ['Hellenic', 'Greek'],
                    // ['Dardic', 'Dard'],
                    // ['Sanskrit', 'Sindhi'],
                    // ['Sanskrit', 'Romani'],
                    // ['Sanskrit', 'Urdu'],
                    // ['Sanskrit', 'Hindi'],
                    // ['Sanskrit', 'Bihari'],
                    // ['Sanskrit', 'Assamese'],
                    // ['Sanskrit', 'Bengali'],
                    // ['Sanskrit', 'Marathi'],
                    // ['Sanskrit', 'Gujarati'],
                    // ['Sanskrit', 'Punjabi'],
                    // ['Sanskrit', 'Sinhalese'],
                    // ['Osco-Umbrian', 'Umbrian'],
                    // ['Osco-Umbrian', 'Oscan'],
                    // ['Latino-Faliscan', 'Faliscan'],
                    // ['Latin', 'Portugese'],
                    // ['Latin', 'Spanish'],
                    // ['Latin', 'French'],
                    // ['Latin', 'Romanian'],
                    // ['Latin', 'Italian'],
                    // ['Latin', 'Catalan'],
                    // ['Latin', 'Franco-Provençal'],
                    // ['Latin', 'Rhaeto-Romance'],
                    // ['Brythonic', 'Welsh'],
                    // ['Brythonic', 'Breton'],
                    // ['Brythonic', 'Cornish'],
                    // ['Brythonic', 'Cuymbric'],
                    // ['Goidelic', 'Modern Irish'],
                    // ['Goidelic', 'Scottish Gaelic'],
                    // ['Goidelic', 'Manx'],
                    // ['East Germanic', 'Gothic'],
                    // ['Middle Low German', 'Low German'],
                    // ['Middle High German', '(High) German'],
                    // ['Middle High German', 'Yiddish'],
                    // ['Middle English', 'English'],
                    // ['Middle Dutch', 'Hollandic'],
                    // ['Middle Dutch', 'Flemish'],
                    // ['Middle Dutch', 'Dutch'],
                    // ['Middle Dutch', 'Limburgish'],
                    // ['Middle Dutch', 'Brabantian'],
                    // ['Middle Dutch', 'Rhinelandic'],
                    // ['Old Frisian', 'Frisian'],
                    // ['Middle Danish', 'Danish'],
                    // ['Middle Swedish', 'Swedish'],
                    // ['Middle Norwegian', 'Norwegian'],
                    // ['Old Norse', 'Faroese'],
                    // ['Old Icelandic', 'Icelandic'],
                    // ['Baltic', 'Old Prussian'],
                    // ['Baltic', 'Lithuanian'],
                    // ['Baltic', 'Latvian'],
                    // ['West Slavic', 'Polish'],
                    // ['West Slavic', 'Slovak'],
                    // ['West Slavic', 'Czech'],
                    // ['West Slavic', 'Wendish'],
                    // ['East Slavic', 'Bulgarian'],
                    // ['East Slavic', 'Old Church Slavonic'],
                    // ['East Slavic', 'Macedonian'],
                    // ['East Slavic', 'Serbo-Croatian'],
                    // ['East Slavic', 'Slovene'],
                    // ['South Slavic', 'Russian'],
                    // ['South Slavic', 'Ukrainian'],
                    // ['South Slavic', 'Belarusian'],
                    // ['South Slavic', 'Rusyn']
                ]
            }]
        });
    </script>
</body>

</html>

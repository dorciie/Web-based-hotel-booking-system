<?php

/**
 * File Name        : cases_malaysia.php
 * Project Name     : Covid-19 Malaysia's Cases JSON
 * Author           : amlxv
 * Github Profile   : https://github.com/amlxv
 * Project Link     : https://github.com/amlxv
 * 
 */

/**
 * Configure the MoH-Malaysia/covid19-public's GitHub csv url.
 * @var string $url
 * 
 */
// $url = "https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/cases_malaysia.csv";
$url = "https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/clusters.csv";

/**
 * Get the csv content & explode by line.
 * @param $url
 * 
 */
$response = file_get_contents($url);

/**
 * Explode the content by line.
 * @param $response
 * 
 */
$rows = explode("\n", $response);

$data = [];

/**
 * Save result into variable (per line).
 * @var array $data
 * 
 */
foreach ($rows as $row) {
    $data[] = str_getcsv($row);
}

/**
 * Remove first & last line.
 * @param string $data
 * 
 */
array_shift($data);
array_pop($data);

// $active_cluster =[];
$main = [];
$district_cases_active  = [];
// $c= [];

/**
 * Collect all dates available in cases_malaysia.csv
 * 
 */
for ($i = 0; $i < count($data); $i++) {

    /** 1. filter row to get active cluster based on "active" status (column 6)*/
    if ($data[$i][6] == "active") {
        
        $temp = [];

        /** 2. get only column district (column 2) */
        // $temp["district"] = $data[$i][2];

        /** 3. get column cases active (column 9) */
        $temp["cases_active"] = $data[$i][9];

        /** 4. replace all delimiter, 'DAN', 'AND' in columnn district to standard comma */
        $pattern1 = "/ & /i";
        $pattern2 = "/ dan /i";
        $pattern3 = "/, /i";
        $pattern4 = "/, dan /i";
        $pattern5 = "/, and /i";
        $pattern6 = "/ and /i";
        $replace = preg_replace(array($pattern1, $pattern2, $pattern3, $pattern4, $pattern5, $pattern6), ",", $data[$i][2]);

        /** 5. split disctrict by delimiter */
        $rows = explode(",", $replace);
        $split = [];
        foreach ($rows as $row) {
            array_push($split, $row);
        }
        $temp["district"] = $split;

        /** 6. count number of disctrict */
        $temp["district_count"] = count($split);

        /** 7. average active cases per cluster _cases_per_district */
        $temp["average"] = $data[$i][9] / count($split);

        array_push($district_cases_active, $temp);
    }
}


/** 8. total active cases group by district */
$district_FINAL = [];

for ($i = 0; $i < count($district_cases_active); $i++) {

    $district = $district_cases_active[$i]["district"];

    $district_count = $district_cases_active[$i]["district_count"];

    $average = $district_cases_active[$i]["average"];

    for ($j = 0; $j < $district_count; $j++) {

        if (!array_key_exists($district[$j], $district_FINAL)) {
            $district_FINAL[$district[$j]] =  $average;
        } else {
            $district_FINAL[$district[$j]] +=  $average;
        }
    }
}



// $cases_malaysia = [];

// $details = [
//     'cases_new',
//     'cluster_import',
//     'cluster_religious',
//     'cluster_community',
//     'cluster_highRisk',
//     'cluster_education',
//     'cluster_detentionCentre',
//     'cluster_workplace',
// ];

/**
 * :: Rearrange.
 * 
 */
// foreach ($dates as $date) {
//     for ($i = 0; $i < count($data); $i++) {
//         if ($data[$i][0] == $date) {
//             $j = 1;
//             foreach ($details as $detail) {
//                 $cases_malaysia[$date][$detail] = (!empty($data[$i][$j]) ? $data[$i][$j] : '0');
//                 $j++;
//             }
//         }
//     }
// }

/**
 * Encode the cases_malaysia as a JSON.
 * 
 */
$cases_by_district = json_encode($district_FINAL, JSON_PRETTY_PRINT);

//echo $cases_by_district;

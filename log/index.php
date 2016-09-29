<?php
/**
 * Created by Sudipta Deb
 * Date: 12/1/16
 * Time: 7:21 AM
 */
namespace debmego;
require_once '../classes/AutoLoader.php';
\debmego\AutoLoader::loadAllClasses();

$allowed_devices = [
    '9VR5l8LN0tEf5QT3Fa9Xh74nkpM345t8' => '19G_01', '0930K390bVIl09RPHIDcZG2dt8zu2O2k' => '19G_02', 'O01flXSxY60vwW6kaUl25maP1x51d4F8' => '19G_03'
];

if (isset($_GET['longitude']) && isset($_GET['latitude'])) {


    if (!array_key_exists($_GET['serial'], $allowed_devices)) {
        return;
    }

    $dbc = Details::getDBC();
    $latitude = floatval($_GET['latitude']);
    $longitude = floatval($_GET['longitude']);
    $aid = mysqli_real_escape_string($dbc, $_GET['aid']);
    $serial = mysqli_real_escape_string($dbc, $_GET['serial']);


    /**
     *Example URL http://wrubus.in/log?latitute=23.34&longitude=45.67&aid=<ANDROID_ID>&serial=<UNIQUE_DEVICE_SERIAL_NO>
     */

    $query = "INSERT INTO `gps_log` VALUES (NULL,'$latitude','$longitude','$aid','$serial',NOW())";
    if ($dbc->query($query)) {
        $msg['status'] = "success";
    } else {
        $msg['status'] = "failure";
    }
    $dbc->close();
    header('Content-Type: application/json');
    echo json_encode($msg);
}

if (isset($_GET['method']) && $_GET['method'] == 'getAllLocations') {
    $query = "SELECT * FROM `gps_log` WHERE `id` IN (SELECT MAX(`id`) FROM `gps_log` GROUP BY `serial`)";
    $dbc = Details::getDBC();
    $locations = array();
    if (($result = $dbc->query($query)) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $actualSerial = $row['serial'];
            if (array_key_exists($actualSerial, $allowed_devices)) {
                $row['serial'] = $allowed_devices[$actualSerial];
                array_push($locations, $row);
            }
        }
    }
    $msg['status'] = (count($locations) > 0) ? 'success' : 'failure';
    $msg['data'] = $locations;
    $dbc->close();
    header('Content-Type: application/json');
    echo json_encode($msg);
}
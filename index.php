<?php
/**
 * Created Sudipta Deb
 * Date: 23/9/15
 * Time: 9:22 AM
 */
namespace debmego;
require_once 'classes/AutoLoader.php';
AutoLoader::loadAllClasses();
include_once 'header.php';
?>

<div class="body-wrap container-fluid" style="background: #F3F3F3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 center-block" style="float: none;margin: 30px auto">
                <div class="form-group ">
                    <div class="input-group">
                        <input class="form-control" name="search" id="search" placeholder="Enter Bus No">
                        <span class="input-group-btn">
                            <button id="search-btn" class="btn btn-warning" onclick="window.location='map.php'">
                                <i class="fa fa-map-marker"></i>
                                Search
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel text-warning">
                <div class="panel-heading text-center " style="font-weight: bolder">
                    Famous Routes
                </div>
                <div class="panel-body">
                    <ul class="famous-routes text-center">
                        <li>55A</li>
                        <li>9</li>
                        <li>55C</li>
                        <li>4C</li>
                        <li>90A</li>
                        <li>20A</li>
                        <li onclick="window.location='map.php'" class="running">19G</li>
                        <li>101</li>
                        <li>8A</li>
                        <li>55A</li>
                        <li>9</li>
                        <li>55A</li>
                    </ul>
                </div>
            </div>
            <div class="panel text-center text-warning">
                <div class="panel-heading" style="font-weight: bold">
                    Search by Route
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="-1">Source</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="-1">Destination</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning form-control">
                            <i class="fa fa-map-marker"></i>
                            Find Buses
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="about-us" class="row">
            <div class="panel">
                <div class="panel-heading text-warning text-center" style="font-weight: bolder">
                    About Us
                </div>
                <div class="panel-body text-justify">
                    <p class="para">
                        <strong>Travelling by bus</strong> - An experience where your perception of your surroundings
                        change completely.
                        When the glamour of flying and the evergreen concept of the train symbolising life’s journey
                        begin to fade in the eyes of the urban traveller, the bus has been quite the preferred mode of
                        transportation. But like several others, ditching the good ol’ bus with the cliché
                        <strong>“Tired of waiting for the bus”</strong> owing to its lack of prepaid facilities, thereby
                        making it a second alternative?
                    </p>
                    <p class="para">
                        <strong>Wrubus.in</strong> comes to the rescue!
                    </p>
                    <p class="para">
                        Providing the ultimate solution for these problems faced by commuters of public transport,
                        <em>Wrubus.in</em> address those problems by a simple website which does neither requires any
                        app installations nor occupy any space in your mobile phones. It assists you in knowing the
                        <strong>estimated time of arrival</strong> of the buses along with the exact bus route to your
                        respective destination .
                    </p>
                    <p class="para">
                        Simply log on to <strong>www.wrubus.in</strong> and enter your city followed by the <em>“bus
                            route number”</em>
                        or “your destination place” and presto! You get the complete details of your bus’s current
                        location, route coverage, and estimated time of arrival. With this information you can take
                        <strong>relaxed strides well-timed decisions</strong> for waiting for a particular bus instead
                        taking a cut bus to your destination. Wrubus.in can also be used for booking and it’s a one
                        stop-shop to buy your seasonal passes and keep your travel well-organized.
                    </p>
                    <p class="para">
                        This will <strong>change the face of the public transport</strong> usage system by the people
                        and it will
                        encourage more commuters thus reducing the carbon emissions to a great level
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="how-it-works" class="col-sm-12 panel text-center">
                <div class="panel-heading" style="font-weight: bold">
                    How it Works?
                </div>
                <div class="panel-body">
                    <span class="icons">
                        <i class="fa fa-5x fa-search text-warning"></i>
                        <br>
                        Search Bus
                    </span>
                    <span class="icons">
                        <i class="fa fa-5x fa-map-marker text-warning"></i>
                        <br>
                        Locate it
                    </span>
                    <span class="icons">
                        <i class="fa fa-5x fa-clock-o text-warning"></i>
                        <br>
                        Take Decision
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>

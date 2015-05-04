<?php

error_reporting(-1);
ini_set('display_errors', 'On');

// ALL THE SERVERS
$servers = array (
	array (
		"name" => "QuadFile",
		"type" => "Virtual Machine (RamNode)",
		"usage" => "Main web server (Not actually QuadFile anymore)",
		"cpu" => "2 vCores",
		"ram" => "256 MB",
		"storage" => "120 GB",
        "os" => "Ubuntu 14.04",
		"bandwidth" => "Pay-as-you-go"
		),
	array (
		"name" => "lolicon",
		"type" => "Virtual Machine (RamNode)",
		"usage" => "Development environment",
		"cpu" => "1 vCore",
		"ram" => "128MB",
		"storage" => "80 GB",
        "os" => "Ubuntu 14.04",
		"bandwidth" => "1 TB"
		),
	array (
		"name" => "install",
		"type" => "Virtual Machine (Vultr)",
		"usage" => "Seedbox / Bittorrent Sync",
		"cpu" => "1 vCore",
		"ram" => "1 GB",
		"storage" => "320 GB",
        "os" => "Ubuntu 12.04 LTS",
		"bandwidth" => "2 TB"
		),
	array (
		"name" => "LB-us1",
		"type" => "Virtual Machine (DigitalOcean)",
		"usage" => "Load balancer for openings.moe",
		"cpu" => "1 vCore",
		"ram" => "512 MB",
		"storage" => "20 GB SSD",
        "os" => "Ubuntu 14.04 LTS",
		"bandwidth" => "1 TB"
		),
	array (
		"name" => "LB-eu1",
		"type" => "Virtual Machine (DigitalOcean)",
		"usage" => "Load balancer for openings.moe",
		"cpu" => "1 vCore",
		"ram" => "512 MB",
		"storage" => "20 GB SSD",
        "os" => "Ubuntu 14.04 LTS",
		"bandwidth" => "1 TB"
		),
	array (
		"name" => "AO-main",
		"type" => "Virtual Machine (DigitalOcean)",
		"usage" => "openings.moe",
		"cpu" => "1 vCore",
		"ram" => "1 GB",
		"storage" => "30 GB SSD",
        "os" => "Ubuntu 14.04 LTS",
		"bandwidth" => "2 TB"
		),
	array (
		"name" => "spice",
		"type" => "Physical machine",
		"usage" => "Unused, former test server",
		"cpu" => "1 Core (Hyperthreaded)",
		"ram" => "2 GB",
		"storage" => "16 GB SSD + 80 GB HDD",
        "os" => "Arch Linux",
		"bandwidth" => "No cap"
		),
	array (
		"name" => "win2k",
		"type" => "Physical machine",
		"usage" => "Unused, former storage server",
		"cpu" => "1 Core",
		"ram" => "128 MB",
		"storage" => "80 GB HDD",
        "os" => "None",
		"bandwidth" => "No cap"
		),
	);

// ALL THE MOBILE DEVICES
$mobiledevices = array (
	array (
		"name" => "holo",
		"type" => "Laptop",
		"usage" => "Development",
		"ram" => "4 GB",
        "os" => "Ubuntu 14.04",
		"storage" => "500 GB HDD"
		),
	array (
		"name" => "wise-wolf",
		"type" => "Laptop",
		"usage" => "Backup laptop",
		"ram" => "4 GB",
        "os" => "Manjaro",
		"storage" => "720 GB HDD"
		),
	array (
		"name" => "(nameless)",
		"type" => "Laptop",
		"usage" => "School",
		"ram" => "4 GB",
        "os" => "Windows 8",
		"storage" => "1 TB HDD"
		),
	array (
		"name" => "Xperia Z2",
		"type" => "Smartphone",
		"usage" => "Main phone",
		"ram" => "3 GB",
        "os" => "Android 5.0.2",
		"storage" => "8 GB + 32 GB Micro SD"
		),
	array (
		"name" => "Lumia 520",
		"type" => "Smartphone",
		"usage" => "Backup phone",
		"ram" => "512 MB",
        "os" => "Windows Phone 8.1",
		"storage" => "8 GB"
		),
	array (
		"name" => "(nameless)",
		"type" => "Tablet",
		"usage" => "Unused",
		"ram" => "1 GB",
        "os" => "Windows 8.1",
		"storage" => "16 GB flash"
		),
	array (
		"name" => "(nameless)",
		"type" => "Laptop",
		"usage" => "Unused, former MC server",
		"ram" => "2 GB",
        "os" => "None",
		"storage" => "180 GB HDD"
		)
	);

//ALL THE CONSOLES
$consoles = array (
	array (
		"name" => "PSP",
		"type" => "1000 Original",
		"storage" => "32 GB"
		),
	array (
		"name" => "PSP",
		"type" => "3000 Limited edition red",
		"storage" => "8 GB"
		),
	array (
		"name" => "PS3",
		"type" => "Slim",
		"storage" => "160 GB"
		),
	array (
		"name" => "PS Vita",
		"type" => "1000 (Fat)",
		"storage" => "64 GB"
		),
	array (
		"name" => "DSi",
		"type" => "XL",
		"storage" => "No SD card"
		),
	array (
		"name" => "3DS",
		"type" => "Original",
		"storage" => "No SD card"
		),
	array (
		"name" => "PS2",
		"type" => "Slim",
		"storage" => "N/A"
		),
	array (
		"name" => "Wii",
		"type" => "Normal",
		"storage" => "No SD card"
		)
	);

// Muh comps <3
$computers = array (
	array (
		"name" => "H3RO",
		"type" => "Desktop",
		"usage" => "Gaming / Heavy video editing",
		"cpu" => "i5 3570 @ 3.2 GHz",
		"ram" => "8 GB",
		"gpu" => "Radeon R9 270X",
        "os" => "Windows 8.1",
		"storage" => "60 GB SSD + 2 TB HDD"
		),
	array (
		"name" => "QU4D",
		"type" => "Prebuilt Desktop",
		"usage" => "Web browsing / Video editing",
		"cpu" => "i5 3550p @ 3.1 GHz",
		"ram" => "8 GB",
		"gpu" => "Radeon HD 8570",
        "os" => "Windows 8",
		"storage" => "1 TB HDD"
		)
	);

// i was bored okay
$others = array (
	array (
		"name" => "Huion 580",
		"comment" => "Tablet used for osu! gaming and sometimes signing documents."
		),
	array (
		"name" => "Dolce Gusto coffee machine",
		"comment" => "because fuck sleep right in the caffeine"
		),
	array (
		"name" => "Razer BlackWidow Ultimate",
		"comment" => "Keyboard for QU4D. Cherry MX Blue."
		),
	array (
		"name" => "Razer BlackWidow Expert",
		"comment" => "Unused, backup. Cherry MX Blue"
		),
	array (
		"name" => "Corsair K65",
		"comment" => "Keyboard for H3RO. Cherry MX Red"
		),
	array (
		"name" => "Logitech Performance MX",
		"comment" => "Decent mouse, for QU4D. Wireless"
		),
	array (
		"name" => "Razer Naga 2014",
		"comment" => "Mouse for H3RO. Pretty nice sensor for osu!"
		),
	array (
		"name" => "Steelseries H5v2",
		"comment" => "Headset for QU4D. High comfort."
		),
	array (
		"name" => "Razer Kraken",
		"comment" => "Headset for H3RO. Deep bass, can easily be balanced with an EQ"
		),
	array (
		"name" => "Sades SA-903",
		"comment" => "Headset for surround video editing. Just in case."
		),
	array (
		"name" => "Sennheiser HD429",
		"comment" => "Reference headset for video editing."
		)
	);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shitty device documentation</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>

				<!-- Animation style to avoid bugs due to loading the stylesheet -->
				<style>
				.unit {
				  animation: slide ease-out 1s;
					-webkit-animation: slide ease-out 1s;
					transition: transform 0.15s;
				}

				.unit:hover {
    			transform: scale(1.082, 1.082);
  			}

				@keyframes slide {
				  from {margin-top: 35px; opacity: 0;}
				  to {margin-top: 0px; opacity: 1;}
				}
				@-webkit-keyframes slide {
				  from {margin-top: 35px; opacity: 0;}
 					to {margin-top: 0px; opacity: 1;}
				}
				</style>

    </head>

    <body>

    	<div class="column">

        	<div class="legend">
                <div class="unit">
                    <p>Legend</p>
                </div>
                <div class="unit server">
                    <p>Server</p>
                </div>
                <div class="unit mobile">
                    <p>Mobile device</p>
                </div>
                <div class="unit computer">
                    <p>Desktop</p>
                </div>
                <div class="unit console">
                    <p>Console</p>
                </div>
                <div class="unit other">
                    <p>Other</p>
                </div>
            </div>

        	<?php

		 // Echo HTML for every device with their respective data

        	foreach ($servers as $unit) {
        		echo '<div class="unit server"><div class="title">
                    <p class="inline">
                    	' . $unit["name"] . '
                    </p>
                </div>
                <div class="details">
                	<div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit["type"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Usage:
                        </p>
                        <p class="inline">
                        	' . $unit["usage"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	CPU:
                        </p>
                        <p class="inline">
                        	' . $unit["cpu"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	RAM:
                        </p>
                        <p class="inline">
                        	' . $unit["ram"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit["storage"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                            OS:
                        </p>
                        <p class="inline">
                            ' . $unit["os"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Bandwidth (Monthly):
                        </p>
                        <p class="inline">
                        	' . $unit["bandwidth"] . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($mobiledevices as $unit) {
        		echo '<div class="unit mobile"><div class="title">
                    <p class="inline">
                    	' . $unit["name"] . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit["type"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Usage:
                        </p>
                        <p class="inline">
                        	' . $unit["usage"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	RAM:
                        </p>
                        <p class="inline">
                        	' . $unit["ram"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit["storage"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                            OS:
                        </p>
                        <p class="inline">
                            ' . $unit["os"] . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($consoles as $unit) {
        		echo '<div class="unit console"><div class="title">
                    <p class="inline">
                    	' . $unit["name"] . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit["type"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit["storage"] . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($computers as $unit) {
        		echo '<div class="unit computer"><div class="title">
                    <p class="inline">
                    	' . $unit["name"] . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit["type"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Usage:
                        </p>
                        <p class="inline">
                        	' . $unit["usage"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	CPU:
                        </p>
                        <p class="inline">
                        	' . $unit["cpu"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	RAM:
                        </p>
                        <p class="inline">
                        	' . $unit["ram"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	GPU:
                        </p>
                        <p class="inline">
                        	' . $unit["gpu"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                            OS:
                        </p>
                        <p class="inline">
                            ' . $unit["os"] . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit["storage"] . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($others as $unit) {
        		echo '<div class="unit other"><div class="title">
                    <p class="inline">
                    	' . $unit["name"] . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Comment:
                        </p>
                        <p class="inline">
                        	' . $unit["comment"] . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

    </body>
</html>

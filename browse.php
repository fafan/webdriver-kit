<?php
require_once __DIR__ . '/vendor/autoload.php';
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\Remote\DriverCommand;

$browser_type = 'phantomjs';
$host = 'http://localhost:4444/wd/hub';
$capabilities = array(WebDriverCapabilityType::BROWSER_NAME => $browser_type);
$driver = RemoteWebDriver::create($host, $capabilities);
$driver->get('http://www.google.com/');
$driver->execute(DriverCommand::MAXIMIZE_WINDOW, [':windowHandle' => 'current']);
$driver->takeScreenshot('google.png');

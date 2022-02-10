<?php



// Init & error reporting
error_reporting(E_ALL);
ini_set('display_errors', true);



// Get parameters
$dataType    = $_GET['type'];
$dataSubtype = $_GET['subtype'];
$dataEnv     = $_GET['env'];



// Verify the parameters
switch ($dataType) {
    case 'apache':
        switch ($dataSubtype) {
            case 'info':
            case 'status':
                break;

            default:
                throw new Exception("Unsupported subtype: $dataSubtype (type: $dataType)");
                break;
        }
        break;

    case 'php':
        switch ($dataSubtype) {
            case 'info':
            case 'opcache':
                break;

            default:
                throw new Exception("Unsupported subtype: $dataSubtype (type: $dataType)");
                break;
        }
        break;

    default:
        throw new Exception("Unsupported type: $dataType");
        break;
}

switch ($dataEnv) {
    case 'devstg':
    case 'prod':
        break;

    default:
        throw new Exception("Unsupported env: $dataEnv");
        break;
}



// Get the information
$dataUri = "http://app-runtime-httpd-php-$dataEnv-svc/sys/$dataType/$dataSubtype";
$dataContent = file_get_contents($dataUri);



// Send it to the client
echo $dataContent;

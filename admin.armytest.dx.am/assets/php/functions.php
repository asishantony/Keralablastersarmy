


$servername = "pdb25.awardspace.net";
$username = "2684748_armydata";
$password = "1479Keralablasters#";
$dbname = "2684748_armydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} 
$conn->set_charset("utf8");

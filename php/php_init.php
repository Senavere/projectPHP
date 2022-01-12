<?php
// Aktivera debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Anslut till databas
$servername = "localhost";
$db_username = "Anita";
$db_password = "root";
$db_name = "projectphp";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
    //echo "success";
} catch (PDOException $e) {
    echo "connection failed" . $e->getMessage();
}

// Starta session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (is_user_logged_in()) {
    // Definiera variabler
    $username = $_SESSION['username'];
    $userid = $_SESSION['user_id'];
    $profileId = $_GET['id']  ?? '';
}

// Användbara funktioner
/* Kalla på denna funktion efter att SUBMIT med Method POST blivit klickad på */
function is_post_request()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return true;
    } else {
        return false;
    }
}

function is_user_logged_in()
{
    if (empty($_SESSION)) {
        return false;
    } else {
        return true;
    }
}

/* returns true if user is not logged in. */
function handle_user_not_logged_in()
{
    if (!is_user_logged_in()) {
        echo "You must be logged in to view this page.";
?>
        <a href="login.php">Go to login page</a>
<?php
        return true;
    } else {
        return false;
    }
}
?>
 <?php
    use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

    require_once('vendor/autoload.php');

    header('Content-Type: application/json');

    http_response_code(Status::HTTP_OK);

    session_start();

    if (isset($_SESSION['count'])) {
        $_SESSION['count']++;
    } else {
        $_SESSION['count'] = 1;
    }

    $result = [
        'session_id' => session_id(),
        'count'      => $_SESSION['count'],
        'status'     => Status::HTTP_OK
    ];

    print json_encode($result);

    unset($result);

    exit();
?>
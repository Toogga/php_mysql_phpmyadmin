<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $aujourdHui = getdate();?>

    <h2>En ce <?php echo $aujourdHui["mday"] . " " . $aujourdHui["month"] . " " . $aujourdHui["year"]; ?>, sur le serveur <?php echo $_SERVER["SERVER_NAME"]; ?>, il est <?php echo $aujourdHui["hours"] . "h " . $aujourdHui["minutes"] . "mn" ;?><br></h2>
    
    <h3>Variable HTTP serveur (getenv())</h3>
    
    <table>
        <tr>
            <th>Variable</th>
            <th>Valeur</th>
        </tr>
        
        <tr>
            <td>GATEWAY_INTERFACE</td>
            <td>CGI/1.1</td>
        </tr>
        
        <tr>
            <td>SERVER_NAME</td>
            <td>localhost</td>
        </tr>
        
        <tr>
            <td>SERVER_SOFTWARE</td>
            <td>Apache/2.2.22 (Win32) PHP/5.3.13</td>
        </tr>
        
        <tr>
            <td>SERVER_PROTOCOL</td>
            <td>HTTP/1.1</td>
        </tr>
        
        <tr>
            <td>REQUEST_METHOD</td>
            <td>GET</td>
        </tr>

        <tr>
            <td>QUERY_STRING</td>
            <td></td>
        </tr>

        <tr>
            <td>DOCUMENT_ROOT</td>
            <td>C:/wamp/www/TPPHP/</td>
        </tr>

        <tr>
            <td>HTTP_ACCEPT</td>
            <td>text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td>
        </tr>

        <tr>
            <td>HTTP_ACCEPT_CHARSET</td>
            <td>gzip,deflate,sdch</td>
        </tr>

        <tr>
            <td>HTTP_ACCEPT_LANGUAGE</td>
            <td>fr-FR,fr;q=0.8,en-US;q=0.6,en;q=0.4</td>
        </tr>

        <tr>
            <td>HTTP_CONNECTION</td>
            <td>keep-alive</td>
        </tr>

        <tr>
            <td>HTTP_HOST</td>
            <td>localhost:8080</td>
        </tr>

        <tr>
            <td>HTTP_REFERER</td>
            <td>http://localhost:8080/TPPHP/</td>
        </tr>

        <tr>
            <td>HTTP_USER_AGENT</td>
            <td>Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36</td>
        </tr>

        <tr>
            <td>REMOTE_ADDR</td>
            <td>127.0.0.1</td>
        </tr>

        <tr>
            <td>SCRIPT_FILENAME</td>
            <td>C:/wamp/www/TPPHP/serveur.php</td>
        </tr>

        <tr>
            <td>SERVER_ADMIN</td>
            <td>admin@localhost</td>
        </tr>

        <tr>
            <td>SERVER_PORT</td>
            <td>8080</td>
        </tr>

        <tr>
            <td>SERVER_SIGNATURE</td>
            <td></td>
        </tr>
    </table>

</body>
</html>
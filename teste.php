<?php
if (isset($_GET['teste']))
{
    $teste = $_GET['teste'];
    echo "url valida:".$teste;
    
    //$github_api_url ="https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($teste)."key=AIzaSyAjfhOTua-TQb1q4HTFTzX8-4SOqdTlxvQ";
    $github_api_url = "https://api.github.com/users/".$teste;
	$github_api_json = file_get_contents($github_api_url);
    $github_api_array = json_decode($github_api_json, true);
    var_dump($github_api_array);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste Estagio</title>
    </head>
    <body>
        <form action="" method="GET">
            <label for="teste">Teste Nome</label>
            <input type="text" name="teste">
            <button type="submit"> Consultar </button>
        </form>
</body>
</html>



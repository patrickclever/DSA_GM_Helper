<?php
$xmlData = array();
foreach(getCharacterSheetFilename() as $value)
{
    $xmlData[substr($value,0,-4)] = loadCharacterData("./chars/".$value);
}

foreach ($xmlData as $dsaChar) {
//    echo $dsaChar->held->attributes['name']."<br>\n";
//    var_dump($dsaChar);
    echo '';
}


function getCharacterSheetFilename($dir="./chars") {
    $log_directory = $dir;

    $results_array = array();

    if (is_dir($log_directory))
    {

        if ($handle = opendir($log_directory))
        {
            //Notice the parentheses I added:
            while(($file = readdir($handle)) !== FALSE)
            {
                if($file == "." || $file == "..") continue;
                $results_array[] = $file;
            }
            closedir($handle);
        }
    }

    return $results_array;
}

function getCharacterCount($chars){
    return count($chars);
}

function loadCharacterData($file) {
    $data  =simplexml_load_file($file) or die("Failed to load");
    return $data;
}
?>

<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<h1>Hello, world!</h1>

<div class="container-fluid">
    <div class="row">
        <?php
        $characterCount = getCharacterCount($xmlData);

        $json = json_encode($xmlData);
        $array = json_decode($json,TRUE);

        foreach ($array as $hero=>$heroData){
            echo "<div class=\"col\"><pre>";
            print_r($heroData);
            echo "</pre></div>";
        }
        /*
         * http://www.rither.de/a/informatik/php-beispiele/arrays/zwei-arrays-miteinander-verbinden/
         *  maybe rearrange array with this
         */
        foreach ($array as $data){
            echo '<div class="col-md-'.(12/$characterCount).'">';
                echo "<pre>";
                print_r($data['held']['basis']['geschlecht']['@attributes']['name']);
                echo "</pre>";
            echo '</div>';
        }
        ?>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

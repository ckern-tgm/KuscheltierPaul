<?php
/**
 * Cool file.
 *
 * @author ich <ich@gmail.com>
 *
 * @version GIT: $Id$ In development. Very unstable.
 */

/**
 * Inserts a new row into table medikamentewecker.
 *
 * @param $name, $mo, $di, $mi, $do, $fr, $sa, $so, $anz, $zeit
 */
function addMedikament($name, $anz, $mo, $di, $mi, $do, $fr, $sa, $so, $zeit)
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc"); //change to localhost
    pg_prepare($dbconn, "addMedikament", "INSERT INTO medikamente VALUES($1,$2,$3,$4,$5,$6,$7,$8,$9,$10)");
    $insertValue = array($name, $anz, $mo, $di, $mi, $do, $fr, $sa, $so, $zeit);
    pg_execute($dbconn, "addMedikament", $insertValue);

}

/**
 * Liest alle Medikamente aus der Datenbank aus und zeigt sie an
 *
 */
function showMedikamente()
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
    $medikament = "SELECT * FROM medikamente WHERE name is not null;";
    $sql = pg_query($dbconn, $medikament);
    $medikamentArr = pg_fetch_all($sql);


    foreach ($medikamentArr as $medikament) { //zwischen zeit und anzahl die Tage ausgeben
        $name = $medikament['name'];
        $zeit = $medikament['zeit'];
        $anz = $medikament['anz'];
        echo "<form action='delMedikament.php' method='GET'>";
        echo   "<tr>
                        <td scope='row'><h3>".$name.'</h3></td>
                        <td><h3>'.$zeit.'</h3></td>
                        <td><h3>'.$anz.'</h3></td>
                        <td><h3>'.showDays($name, $zeit, $anz)."</h3></td>
                        <td>
                            <a href='delMedikament.php?id=$name&zeit=$zeit&anz=$anz;' class='btn btn-danger'>Löschen</a>
                        </td>
                    </tr>";
        echo "</form>";
    }

}

function showDays($name, $zeit, $anz)
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
    $days = "SELECT montag,dienstag,mittwoch,donnerstag,freitag,samstag,sonntag FROM medikamente WHERE name = '$name' AND zeit = '".$zeit."' AND anz = ".$anz.";";
    $sql = pg_query($dbconn, $days);
    $i = pg_num_fields($sql);
    $row = pg_fetch_row($sql);
    $string = "";


    for ($j = 0; $j < $i; $j++) {
        $fieldname = pg_field_name($sql, $j);
        if ($row[$j] == 't') {
            switch ($fieldname) {
                case 'montag':
                    $fieldname = 'Mo';
                    break;
                case 'dienstag':
                    $fieldname = 'Di';
                    break;
                case 'mittwoch':
                    $fieldname = 'Mi';
                    break;
                case 'donnerstag':
                    $fieldname = 'Do';
                    break;
                case 'freitag':
                    $fieldname = 'Fr';
                    break;
                case 'samstag':
                    $fieldname = 'Sa';
                    break;
                case 'sonntag':
                    $fieldname = 'So';
                    break;
            }
            $string .= $fieldname.", ";
        }
    }

    return $string;
}

function addTermin($name, $datum, $zeit, $ort, $hinweis)
{

    $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
    pg_prepare($dbconn, "addTermin", "INSERT INTO termine VALUES($1,$2,$3,$4,$5)");
    $insertValue = array($name, $datum, $zeit, $ort, $hinweis);
    pg_execute($dbconn, "addTermin", $insertValue);

   
}

function showTermine(){
    $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
    $termine = "SELECT * FROM termine WHERE name is not null;";
    $sql = pg_query($dbconn, $termine);
    $termineArr = pg_fetch_all($sql);

    foreach($termineArr as $termin){
        $name = $termin['name'];
        $datum = $termin['datum'];
        $zeit = $termin['uhrzeit'];
        /*echo "<div class='remodal' data-remodal-id='modalHinz".$name."'>
			   <button data-remodal-action='close' class='remodal-close'></button>
			   <h1 style='background-color: transparent; color: red; text-align: center;'>".$name." <br /> löschen?</h1>
			   <br />
			   <br />
			   <a href='delTermin.php?id=$name' data-remodal-action='confirm' class='remodal-confirm'>OK</a>
		       </div>";
           */
        echo '<form action="delTermin.php" method="get">';
        echo   "<tr>
                        <td scope='row'><h3>".$datum."</h3></td>
                        <td><h3>".$zeit."</h3></td>
                        <td><h3>".$name."</h3></td>
                        <td><h3>".$termin['ort']."</h3></td>
                        <td><h3>".$termin['hinweis']."</h3></td>
                        <td>
                            <a href='delTermin.php?id=$name&datum=$datum&zeit=$zeit' class='btn btn-danger'>Löschen</a>
                        </td>
                    </tr>";
        echo '</form>';
    }

}

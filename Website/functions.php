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
    $dbconn = pg_connect("host=localhost port=5432 dbname=kuscheltier user=vinc password=vinc"); //change to localhost
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
    $dbconn = pg_connect("host=localhost port=5432 dbname=kuscheltier user=vinc password=vinc");
    $medikament = "SELECT * FROM medikamente WHERE name is not null;";
    $sql = pg_query($dbconn, $medikament);
    $medikamentArr = pg_fetch_all($sql);

    foreach ($medikamentArr as $medikament) { //zwischen zeit und anzahl die Tage ausgeben
        $name = $medikament['name'];
        echo "<form action='delMedikament.php' method='get'>";
        echo   "<tr>
                        <td scope='row'><h3>".$medikament['name'].'</h3></td>
                        <td><h3>'.$medikament['zeit'].'</h3></td>
                        <td><h3>'.$medikament['anz'].'</h3></td>
                        <td><h3>'.showDays($medikament['name'])."</h3></td>
                        <td>
                            <a href='#modalDel' data-id='".$name."' class='btn btn-danger'>Löschen</a>
                        </td>
                    </tr>";
        echo "</form>";
    }
}

function showDays($name)
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=kuscheltier user=vinc password=vinc");
    $days = "SELECT montag,dienstag,mittwoch,donnerstag,freitag,samstag,sonntag FROM medikamente WHERE name = '$name';";
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

function addTermin($name, $datum, $zeit, $beschreibung, $ort)
{
    /*
    $dbconn = pg_connect('host=localhost port=5432 dbname=teddy user=vinc password=vinc');
    pg_prepare($dbconn, 'addTermin', 'INSERT INTO termine VALUES($1,$2,$3,$4,$5,$6)');
    $insertValue = array($this->name, $this->datum, $this->zeit, $this->beschreibung, $this->ort);
    pg_execute($dbconn, 'addTermin', $insertValue);
    */
}

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
function addMedikament($name, $mo, $di, $mi, $do, $fr, $sa, $so, $anz, $zeit)
{
    /*
    echo '<script language="javascript">';
    echo 'alert("addMedikament()")';
    echo '</script>';
    */
    $dbconn = pg_connect('host=192.168.231.128 port=5432 dbname=kuscheltier user=vinc password=vinc'); //change to localhost
    pg_prepare($dbconn, 'addMedikament', 'INSERT INTO medikamente VALUES($1,$2,$3,$4,$5,$6,$7,$8,$9,$10)');
    $insertValue = array($this->name, $this->mo, $this->di, $this->mi, $this->do, $this->fr, $this->sa, $this->so, $this->anz, $this->zeit);
    pg_execute($dbconn, 'addMedikament', $insertValue);

}

/**
 * Liest alle Medikamente aus der Datenbank aus und zeigt sie an
 *
 */
function showMedikamente()
{
    echo '<script language="javascript">';
    echo 'alert("showMedikament()")';
    echo '</script>';
    /*
    $dbconn = pg_connect('host=localhost port=5432 dbname=kuscheltier user=vinc password=vinc');
    $medikament = 'SELECT * FROM medikamente WHERE name is not null;';
    $sql = pg_query($dbconn, $medikament);
    $medikamentArr = pg_fetch_all($sql);

    foreach ($medikamentArr as $medikament) { //zwischen zeit und anzahl die Tage ausgeben
        $name = $medikament['name'];
        echo '<form action="delMedikament.php" method="get">';
        echo   "<tr>
                        <td scope='row'><h3>".$medikament['name'].'</h3></td>
                        <td><h3>'.$medikament['zeit'].'</h3></td>
                        <td><h3>'.$this->showDays($medikament['name']).'</h3></td>
                        <td><h3>'.$medikament['anz']."</h3></td>
                        <td>
                            <a href='#modalDel' data-id='".$medikament['name']."' class='btn btn-danger'>Löschen</a>
                        </td>
                    </tr>";
        echo '</form>';
    }
    */
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

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
    echo '<script language="javascript">';
    echo 'alert("addMedikament()")';
    echo '</script>';
    /*
    $dbconn = pg_connect('host=localhost port=5432 dbname=teddy user=vinc password=vinc');
    pg_prepare($dbconn, 'addMedikament', 'INSERT INTO medikamentewecker VALUES($1,$2,$3,$4,$5,$6,$7,$8,$9,$10)');
    $insertValue = array($this->name, $this->mo, $this->di, $this->mi, $this->do, $this->fr, $this->sa, $this->so, $this->anz, $this->zeit);
    pg_execute($dbconn, 'addMedikament', $insertValue);
    */
}

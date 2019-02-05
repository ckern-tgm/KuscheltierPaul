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
                            <a href='delMedikament.php?id=$name&zeit=$zeit&anz=$anz;' class='btn btn-danger' accesskey='7'>Löschen</a>
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

     function addTermin($datum, $zeit, $ort, $hinweis, $name)
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        pg_prepare($dbconn, "addTermin", "INSERT INTO termine VALUES($1,$2,$3,$4,$5)");
        $insertValue = array($datum, $zeit, $ort, $hinweis, $name);
        pg_execute($dbconn, "addTermin", $insertValue);
    }

     function showTermine()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        $termine = "SELECT * FROM termine WHERE name is not null and datum is not null;";
        $sql = pg_query($dbconn, $termine);
        $termineArr = pg_fetch_all($sql);

        foreach ($termineArr as $termin) {
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
                            <a href='delTermin.php?id=$name&datum=$datum&zeit=$zeit' class='btn btn-danger' accesskey='7'>Löschen</a>
                        </td>
                    </tr>";
            echo '</form>';
        }
    }


     function showBuecher($bname)
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        if ($bname == "") {
            $select = "SELECT name, genre, autor, ausgewaehlt FROM buch WHERE name is not null";
        }else{
            $select = "SELECT name, genre, autor, ausgewaehlt FROM buch WHERE name = '$bname'";
        }
        $sql = pg_query($dbconn, $select);
        $buchArr = pg_fetch_all($sql);

        foreach ($buchArr as $buch) {
            $name = $buch['name'];
            $nameOhneWS = preg_replace('/\s+/', '', $name);
            $genre = $buch['genre'];
            $autor = $buch['autor'];
            $ausgewaehlt = $buch['ausgewaehlt'];

            echo '<form action="" method="get">';
            echo "<tr>
						<td scope='row'><h3>".$name."</h3></td>
						<td><h3>".$genre."</h3></td>
						<td><h3>".$autor. "</h3></td>
						<td>
						    <input type='text' id='text_".$nameOhneWS."' value='Nein' disabled />
							<input type='checkbox' id='checkbox_".$nameOhneWS."' style='margin-left: 10px;' />
							<script>
							    var bool = '$ausgewaehlt';
							    if(bool == 't'){
							        $('#checkbox_".$nameOhneWS."').prop('checked', true);
							        $('#text_".$nameOhneWS."').val('Ja');
							    }
								$('#checkbox_".$nameOhneWS."').click(function () {
									if($(this).prop('checked')) {
										 $('#text_".$nameOhneWS."').val('Ja');
										 
                                        $.ajax({ url: 'setBuchTrue.php',
                                                 data: {name: '$name', genre: '$genre', autor: '$autor'},
                                                 type: 'POST',
                                                 success: function(output) {
                                                              //alert(output.abc);
                                                 }
                                        });										
									}
									else {
										$('#text_".$nameOhneWS."').val('Nein');
										
                                        $.ajax({ url: 'setBuchFalse.php',
                                                 data: {name: '$name', genre: '$genre', autor: '$autor'},
                                                 type: 'POST',
                                                 success: function(output) {
                                                              //alert(output.abc);
                                                 }
                                        });										
									}
								});
							</script>
						</td>
					</tr>";
            echo '</form>';
        }
    }

class Notfallkontakt
{
     function __construct()
    {
    }

     function getName()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        $nname = "SELECT name FROM notfallkontakt WHERE name is not null;";
        $sql = pg_query($dbconn, $nname);
        $nname = pg_fetch_row($sql);

        echo "$nname[0]";
    }

     function getTel()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        $ntel = "SELECT tel FROM notfallkontakt WHERE name is not null;";
        $sql = pg_query($dbconn, $ntel);
        $ntel = pg_fetch_row($sql);

        echo "$ntel[0]";
    }

     function update()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");

        if (func_num_args() == 2) {
            $del = "DELETE FROM notfallkontakt WHERE name is not null;";
            pg_query($dbconn, $del);
            pg_prepare($dbconn, "updateKontakt", "INSERT INTO notfallkontakt VALUES($1,$2)");
            $insertValue = array(func_get_arg(0), func_get_arg(1));
            pg_execute($dbconn, "updateKontakt", $insertValue);
        }
    }
}

class Kuscheltiernutzer
{
     function __construct()
    {
    }

     function getName()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        $nname = "SELECT name FROM kuscheltiernutzer WHERE name is not null;";
        $sql = pg_query($dbconn, $nname);
        $nname = pg_fetch_row($sql);

        echo "$nname[0]";
    }

     function getAdress()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        $nadress = "SELECT adresse FROM kuscheltiernutzer WHERE name is not null;";
        $sql = pg_query($dbconn, $nadress);
        $nadress = pg_fetch_row($sql);

        echo "$nadress[0]";
    }

     function getTel()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");
        $ntel = "SELECT tel FROM kuscheltiernutzer WHERE name is not null;";
        $sql = pg_query($dbconn, $ntel);
        $ntel = pg_fetch_row($sql);

        echo "$ntel[0]";
    }

     function update()
    {
        $dbconn = pg_connect("host=localhost port=5432 dbname=paul user=vinc password=vinc");

        if (func_num_args() == 3) {
            $del = "DELETE FROM kuscheltiernutzer WHERE name is not null;";
            pg_query($dbconn, $del);
            pg_prepare($dbconn, "updateNutzer", "INSERT INTO kuscheltiernutzer VALUES($1,$2,$3)");
            $insertValue = array(func_get_arg(0), func_get_arg(1),func_get_arg(2));
            pg_execute($dbconn, "updateNutzer", $insertValue);
        }
    }
}

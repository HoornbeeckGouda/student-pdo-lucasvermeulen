<?php
include 'header.php';
include '../Class/Studenten.php'
?>
<div class="studentContainer">
    <div class="studentTable">
<?php
// initialiseren/declareren
$contentTable = "";
//tabelkop samenstellen
$table_header = '<table id="students">
                    <tr>
                        <th>studentnr</th>
                        <th>voornaam</th>
                        <th>tussenvoegsel</th>
                        <th>achternaam</th>
                        <th>straat</th>
                        <th>postcode</th>
                        <th>woonplaats</th>
                        <th>email</th>
                        <th>klas</th>
                        <th>geboortedatum</th>
                        <th>Edit</th>
                    </tr>';

$studenten = new Student($dbconn);
$studenten->getStudenten();
if ($studenten->getNumberStudenten()>0) { // wel studenten ophalen
    $studenten->studentenResult->setFetchMode(PDO::FETCH_BOTH);
    foreach($studenten->studentenResult as $row) {
        $contentTable .= "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['voornaam'] . "</td>
                            <td>" . $row['tussenvoegsel'] . "</td>
                            <td>" . $row['achternaam'] . "</td>
                            <td>" . $row['straat'] . "</td>
                            <td>" . $row['postcode'] . "</td>
                            <td>" . $row['woonplaats'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['klas'] . "</td>
                            <td>" . $row['geboortedatum'] . "</td>
                            

                            <td> 
                                <form  method='POST' action='../function/editPersoon.php'>
                                        <button type='submit' name='ID' id='Edit'  value=" . $row['id'] . " >Edit</button>
                                </form>  
                        </td>
                        </tr>";
    }
}
$table_student = $table_header . $contentTable . "</table>";

echo $table_student;
?>
    </div>
</div>
<?php
include('footer.php')

?>

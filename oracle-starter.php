<!--THIS CODE WAS ADAPTED FROM THE CPSC304 oracle-test.php FILE FROM TUTORIAL 7.-->


<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
}
?>
<html>
<head>
    <title>Little Genshin DB</title>
</head>

<body>
<h2>Welcome to Teyvat, Traveler <?php echo $_SESSION["username"];?></h2>

<form method="post" action="includes/logout.inc.php">
    <input type="submit" name="logout" value="Log Out">
</form>

<p>You MUST click here if this is your first time loading the webpage. You MAY click here to reset ALL your progress.</p>

<form method="POST" action="oracle-starter.php">
    <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
    <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
    <p><input type="submit" value="Enter World" name="reset"></p>
</form>

<h4> Scroll to the bottom of the page everytime you click a button for responses from Paimon - the best travel companion! <h4>

        <hr />

        <h2>Artifacts In Your Inventory</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="printRequest" name="printRequest">
            <input type="submit" value="View" name="printTuples"></p>
        </form>

        <h2>Characters In Your Inventory</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="characterRequest" name="characterRequest">
            <input type="submit" value="View" name="character"></p>
        </form>

        <h2>Show Artifacts By Set (SELECT)</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="selectRequest" name="selectRequest">

            <input type="radio" id="emblem" name="artifact_set" value="Emblem of Severed Fate">
            <label for="emblem">Emblem of Severed Fate</label><br>
            <input type="radio" id="noblesse" name="artifact_set" value="Noblesse Oblige">
            <label for="noblesse">Noblesse Oblige</label><br>
            <input type="radio" id="paradise" name="artifact_set" value="Flower of Paradise Lost">
            <label for="paradise">Flower of Paradise Lost</label><br>
            <input type="radio" id="desert" name="artifact_set" value="Desert Pavilion Chronicle">
            <label for="desert">Desert Pavilion Chronicle</label><br>
            <input type="radio" id="deepwood" name="artifact_set" value="Deepwood Memories">
            <label for="deepwood">Deepwood Memories</label><br>
            <br />
            <input type="submit" value="Filter" name="select"></p>
        </form>

        <h2>Count Artifacts By Set (GROUP BY)</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="countTupleRequest" name="countTupleRequest">
            <p><input type="submit" value="Count" name="countTuples"></p>
        </form>

        <h2>View Sets With Highest Quality Artifacts (NESTED)</h2>
        <p>Shows sets with most number of 5 Star Artifacts.</p>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="nestRequest" name="nestRequest">

            <input type="radio" id="flower_type" name="artifact_type" value="flower">
            <label for="flower_type">Flower of Life</label><br>
            <input type="radio" id="plume_type" name="artifact_type" value="plume">
            <label for="plume_type">Plume of Death</label><br>
            <input type="radio" id="timepiece_type" name="artifact_type" value="timepiece">
            <label for="timepiece_type">Sands of Eon</label><br>
            <input type="radio" id="goblet_type" name="artifact_type" value="goblet">
            <label for="goblet_type">Goblet of Enothem</label><br>
            <input type="radio" id="circlet_type" name="artifact_type" value="circlet">
            <label for="circlet_type">Circlet of Logos</label><br>
            <br />
            <input type="submit" name="nest"></p>
        </form>

        <h2>Find Your Best Artifact Sets (HAVING)</h2>
        <p>Finds all Artifact Sets (separated by quality) containing Stats above a certain threshold.</p>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="haveRequest" name="haveRequest">
            Lowest Stat: <input type="text" name="stat"> <br />
            <p><input type="submit" value="Find" name="have"></p>
        </form>

        <h2>Create A Character (INSERT)</h2>
        <form method="POST" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">

            Name: <input type="text" name="insName"> <br />

            <p>Equip your artifacts:</p>

            <label for="flowers">Flower of Life:</label>

            <select name="flowers" id="flowers">
                <option value="Magnificent Tsuba">Magnificent Tsuba</option>
                <option value="Royal Flora">Royal Flora</option>
                <option value="Ay-Khanoums Myriad">Ay-Khanoums Myriad</option>
                <option value="The First Days of the City of Kings">The First Days of the City of Kings</option>
                <option value="Labyrinth Wayfarer">Labyrinth Wayfarer</option>
            </select>

            <label for="plumes">Plume of Death:</label>

            <select name="plumes" id="plumes">
                <option value="Sundered Feather">Sundered Feather</option>
                <option value="Royal Plume">Royal Plume</option>
                <option value="Wilting Feast">Wilting Feast</option>
                <option value="End of the Golden Realm">End of the Golden Realm</option>
                <option value="Scholar of Vines">Scholar of Vines</option>
            </select>

            <label for="timepieces">Sands of Eon:</label>

            <select name="timepieces" id="timepieces">
                <option value="Storm Cage">Storm Cage</option>
                <option value="Royal Pocket Watch">Royal Pocket Watch</option>
                <option value="A Moment Congealed">A Moment Congealed</option>
                <option value="Timepiece of the Lost Path">Timepiece of the Lost Path</option>
                <option value="A Time of Insight">A Time of Insight</option>
            </select>
            <br /><br />

            <label for="goblets">Goblet of Enothem:</label>

            <select name="goblets" id="goblets">
                <option value="Scarlet Vessel">Scarlet Vessel</option>
                <option value="Royal Silver Urn">Royal Silver Urn</option>
                <option value="Secret-Keepers Magic Bottle">Secret-Keepers Magic Bottle</option>
                <option value="Defender of the Enchanting Dream">Defender of the Enchanting Dream</option>
                <option value="Lamp of the Lost">Lamp of the Lost</option>
            </select>

            <label for="circlets">Circlet of Logos:</label>

            <select name="circlets" id="circlets">
                <option value="Ornate Kabuto">Ornate Kabuto</option>
                <option value="Royal Masque">Royal Masque</option>
                <option value="Amethyst Crown">Amethyst Crown</option>
                <option value="Legacy of the Desert High-Born">Legacy of the Desert High-Born</option>
                <option value="Laurel Coronet">Laurel Coronet</option>
            </select>

            <label for="weapons">Weapon:</label>

            <select name="weapons" id="weapons">
                <option value="Dull Blade">Dull Blade</option>
                <option value="Mappa Mare">Mappa Mare</option>
                <option value="Prototype Crescent">Prototype Crescent</option>
                <option value="Skyward Spine">Skyward Spine</option>
                <option value="The Unforged">The Unforged</option>
            </select>
            <br /><br />
            <input type="submit" value="Create New Character" name="insertSubmit"></p>
        </form>

        <h2>Update Your Character's Artifacts (UPDATE)</h2>
        <form method="POST" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">

            Name of Character (case sensitive): <input type="text" name="update_names"> <br />

            <p>Equip your artifacts:</p>

            <label for="update_flowers">Flower of Life:</label>

            <select name="update_flowers" id="update_flowers">
                <option value="Magnificent Tsuba">Magnificent Tsuba</option>
                <option value="Royal Flora">Royal Flora</option>
                <option value="Ay-Khanoums Myriad">Ay-Khanoums Myriad</option>
                <option value="The First Days of the City of Kings">The First Days of the City of Kings</option>
                <option value="Labyrinth Wayfarer">Labyrinth Wayfarer</option>
            </select>

            <label for="update_plumes">Plume of Death:</label>

            <select name="update_plumes" id="update_plumes">
                <option value="Sundered Feather">Sundered Feather</option>
                <option value="Royal Plume">Royal Plume</option>
                <option value="Wilting Feast">Wilting Feast</option>
                <option value="End of the Golden Realm">End of the Golden Realm</option>
                <option value="Scholar of Vines">Scholar of Vines</option>
            </select>

            <label for="update_timepieces">Sands of Eon:</label>

            <select name="update_timepieces" id="update_timepieces">
                <option value="Storm Cage">Storm Cage</option>
                <option value="Royal Pocket Watch">Royal Pocket Watch</option>
                <option value="A Moment Congealed">A Moment Congealed</option>
                <option value="Timepiece of the Lost Path">Timepiece of the Lost Path</option>
                <option value="A Time of Insight">A Time of Insight</option>
            </select>
            <br /><br />

            <label for="update_goblets">Goblet of Enothem:</label>

            <select name="update_goblets" id="update_goblets">
                <option value="Scarlet Vessel">Scarlet Vessel</option>
                <option value="Royal Silver Urn">Royal Silver Urn</option>
                <option value="Secret-Keepers Magic Bottle">Secret-Keepers Magic Bottle</option>
                <option value="Defender of the Enchanting Dream">Defender of the Enchanting Dream</option>
                <option value="Lamp of the Lost">Lamp of the Lost</option>
            </select>

            <label for="update_circlets">Circlet of Logos:</label>

            <select name="update_circlets" id="update_circlets">
                <option value="Ornate Kabuto">Ornate Kabuto</option>
                <option value="Royal Masque">Royal Masque</option>
                <option value="Amethyst Crown">Amethyst Crown</option>
                <option value="Legacy of the Desert High-Born">Legacy of the Desert High-Born</option>
                <option value="Laurel Coronet">Laurel Coronet</option>
            </select>

            <label for="update_weapons">Weapon:</label>

            <select name="update_weapons" id="update_weapons">
                <option value="Dull Blade">Dull Blade</option>
                <option value="Mappa Mare">Mappa Mare</option>
                <option value="Prototype Crescent">Prototype Crescent</option>
                <option value="Skyward Spine">Skyward Spine</option>
                <option value="The Unforged">The Unforged</option>
            </select>
            <br /><br />
            <input type="submit" value="Update Existing Character" name="updateSubmit"></p>
        </form>

        <h2>Delete a Character (DELETE)</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="deleteCharRequest" name="deleteCharRequest">

            Name of Character (case sensitive): <input type="text" name="delete_name"> <br /> <br />

            <input type="submit" name="delete" value="Delete"> <br />
        </form>

        <h2>Display Character Information (PROJECT)</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="projectRequest" name="projectRequest">

            Name of Character (case sensitive): <input type="text" name="project_name"> <br />

            <input type="checkbox" id="name" name="attribute[]" value="Name" checked="true">
            <label for="name"> Character Name</label><br>
            <input type="checkbox" id="flower" name="attribute[]" value="Flower">
            <label for="flower"> Flower of Life </label><br>
            <input type="checkbox" id="plume" name="attribute[]" value="Plume">
            <label for="plume"> Plume of Death</label><br>
            <input type="checkbox" id="timepiece" name="attribute[]" value="Timepiece">
            <label for="timepiece"> Sands of Eon</label><br>
            <input type="checkbox" id="goblet" name="attribute[]" value="Goblet">
            <label for="goblet"> Goblet of Enothem</label><br>
            <input type="checkbox" id="circlet" name="attribute[]" value="Circlet">
            <label for="circlet"> Circlet of Logos</label><br>
            <input type="checkbox" id="weapon" name="attribute[]" value="Weapon">
            <label for="weapon"> Weapon</label><br>
            <br />
            <input type="submit" value="Show" name="project"></p>
        </form>

        <h2>Check Character for Artifact Set Bonus (JOIN)</h2>
        <p>Shows whether a character has more than 2 Artifacts from the same set.</p>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="joinRequest" name="joinRequest">
            <p><input type="submit" value="Check" name="join"></p>
        </form>

        <h2>Find Characters With All Artifacts Equipped (DIVISION)</h2>
        <form method="GET" action="oracle-starter.php"> <!--refresh page when submitted-->
            <input type="hidden" id="divideRequest" name="divideRequest">
            <p><input type="submit" value="Find" name="divide"></p>
        </form>

        <hr />

        <img src="https://upload-os-bbs.mihoyo.com/upload/2020/02/09/1092397/62e8f8692188b58722ba2c1d7970cb66_6262638770136679497.png?x-oss-process=image/resize,s_740/quality,q_80/auto-orient,0/interlace,1/format,png" alt="Paimon" width="300" height="400">

        <h2>Paimon Says:</h2>

        <?php
        //this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())
        $show_errors = False; // Set to True to show OCI_Errors

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL.sql command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                //echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                if (substr(htmlentities($e['message']), 0, 9) === 'ORA-00001'){
                    echo "Error - This may be because another character already has this name or is using one of the same Artifact(s)/Weapon.";
                } else {
                    echo htmlentities($e['message']);
                }
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                $e = OCI_Error($statement);
                //echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                if (substr(htmlentities($e['message']), 0, 9) === 'ORA-00001'){
                    echo "Error - This may be because another character already has this name or is using one of the same Artifact(s)/Weapon.";
                } else {
                    echo htmlentities($e['message']);
                }
                $success = False;
            }

            return $statement;
        }

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL.sql injection.
		See the sample code below for how this function is used */

            global $db_conn, $success;
            $statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                if (substr(htmlentities($e['message']), 0, 9) === 'ORA-00001'){
                    echo "Error - This may be because another character already has this name or is using one of the same Artifact(s)/Weapon.";
                } else {
                    echo htmlentities($e['message']);
                }
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this.
                }

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    $e = OCI_Error($statement);
                    if (substr(htmlentities($e['message']), 0, 9) === 'ORA-00001'){
                        echo "Error - This may be because another character already has this name or is using one of the same Artifact(s)/Weapon.";
                    } else {
                        echo htmlentities($e['message']);
                    }
                    $success = False;
                }
            }
        }

        function printArtifacts($result) { //prints results from a select statement
            echo "<table>";
            echo "<tr><th>Name</th><th>Set</th><th>Quality</th><td><th>Stat</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["SET_NAME"] . "<td>" . $row["QUALITY"] . "<td><td>". $row["STAT"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printArtifactSet($result) { //prints results from a select statement
            echo "<table>";
            echo "<tr><th>Artifact Set</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SET_NAME"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printSetCount($result) { //prints results from a select statement
            echo "<table>";
            echo "<tr><th>Set Name</th><td><th>Equipped</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SET_NAME"] . "<td><td>" . $row["COUNT(NAME)"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printArtifactCount($result) { //prints results from a select statement
            echo "<table>";
            echo "<tr><th>Artifact Set</th><th>Owned</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SET_NAME"] . "<td>" . $row["COUNT(*)"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printArtifactQuality($result) { //prints results from a select statement
            echo "<table>";
            echo "<tr><th>Artifact Set</th><th>Quality</th><th>Stat</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SET_NAME"] . "<td>" .  $row["QUALITY"] . "<td>" .  $row["MAX(STAT)"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printCharacter($result) { //prints results from a select statement
            echo "<h3>All Characters</h3>";
            echo "This will be empty if you have no characters! <br><br>";
            echo "<table>";
            echo "<tr><th>Name</th><td><th>Flower</th><td><th>Plume</th><td><th>Timepiece</th><td><th>Goblet</th><td><th>Circlet</th><td><th>Weapon</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["NAME"] . "<td><td>" . $row["FLOWER"] . "<td><td>" . $row["PLUME"] . "<td><td>" . $row["TIMEPIECE"] . "<td><td>" . $row["GOBLET"] . "<td><td>" . $row["CIRCLET"] . "<td><td>" . $row["WEAPON"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printCharacterName($result) { //prints results from a select statement
            echo "If this is empty, no characters have all artifacts equipped.";
            echo "<table>";
            echo "<tr><th>Name</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["NAME"] . "</td></tr>";
            }
            echo "</table>";
        }

        function printSetBonus($result) { //prints results from a select statement
            echo "If this is empty, you have no set bonuses.";
            echo "<table>";
            echo "<tr><th>Character</th><td><th>Set Name</th><td><th>Number Equipped From Set</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["NAME"] . "<td><td>" . $row["SET_NAME"] . "<td><td>" . $row["COUNT(ANAME)"] . "</td></tr>";
            }
            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
            // ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_oliviacp", "a66602574", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleResetRequest() {
            global $db_conn;
            echo "<br> Creating World... <br>";
            $init = file_get_contents('./init.sql');
            $cmds = explode(";", $init);
            foreach ($cmds as $cmd) {
                executePlainSQL($cmd);
                OCICommit($db_conn);
            }
        }

        function handleInsertRequest() {
            global $db_conn;

            if (empty($_POST['insName'])) {
                echo "Error -  Please provide a name for your character!";
                return;
            }

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['insName'],
                ":bind2" => $_POST['flowers'],
                ":bind3" => $_POST['plumes'],
                ":bind4" => $_POST['timepieces'],
                ":bind5" => $_POST['goblets'],
                ":bind6" => $_POST['circlets'],
                ":bind7" => $_POST['weapons']
            );

            $alltuples = array (
                $tuple
            );

            $r = executeBoundSQL("INSERT into character values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7)", $alltuples);
            OCICommit($db_conn);

            $result = executePlainSQL("SELECT * FROM character");
            printCharacter($result);
        }

        function handleUpdateRequest() {

            if (empty($_POST['update_names'])) {
                echo "Error -  Please provide a name for your character!";
                return;
            }
            global $db_conn;
            $name = $_POST['update_names'];
            $flower = $_POST['update_flowers'];
            $plume = $_POST['update_plumes'];
            $timepiece = $_POST['update_timepieces'];
            $goblet = $_POST['update_goblets'];
            $circlet = $_POST['update_circlets'];
            $weapon = $_POST['update_weapons'];

            executePlainSQL("UPDATE character SET flower='" . $flower . "', plume='" . $plume . "', timepiece='" . $timepiece. "', goblet='" . $goblet . "', circlet='" . $circlet . "', weapon='" . $weapon . "' WHERE name='" . $name . "'");
            OCICommit($db_conn);

            $result = executePlainSQL("SELECT * FROM character");
            printCharacter($result);
        }

        function handlePrintRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT * FROM flower");
            echo "<h3>Flower</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM plume");
            echo "<h3>Plume</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM timepiece");
            echo "<h3>Sands</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM goblet");
            echo "<h3>Goblet</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM circlet");
            echo "<h3>Circlet</h3>";
            printArtifacts($result);
        }

        function handleCharacterRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT * FROM character");
            printCharacter($result);
        }

        function handleCountRequest() {
            global $db_conn;
            $cmd = "SELECT set_name, Count(*) FROM (SELECT * FROM flower UNION SELECT * FROM plume UNION SELECT * FROM timepiece UNION SELECT * FROM goblet UNION SELECT * FROM circlet) GROUP BY set_name";
            $result = executePlainSQL($cmd);
            printArtifactCount($result);
        }

        function handleJoinRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT name, set_name, COUNT(aname) FROM (SELECT character.name, flower.set_name, flower.name as aname FROM character, flower WHERE character.flower = flower.name UNION SELECT character.name, plume.set_name, plume.name as aname FROM character, plume WHERE character.plume = plume.name UNION SELECT character.name, timepiece.set_name, timepiece.name as aname FROM character, timepiece WHERE character.timepiece = timepiece.name UNION SELECT character.name, goblet.set_name, goblet.name as aname FROM character, goblet WHERE character.goblet = goblet.name UNION SELECT character.name, circlet.set_name, circlet.name as aname FROM character, circlet WHERE character.circlet = circlet.name) GROUP BY name, set_name HAVING COUNT(aname) > 1");
            printSetBonus($result);
        }

        function handleSelectRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT * FROM flower WHERE set_name ='" . $_GET['artifact_set'] . "'");
            echo "<h3>Flower</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM plume WHERE set_name ='" . $_GET['artifact_set'] . "'");
            echo "<h3>Plume</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM timepiece WHERE set_name ='" . $_GET['artifact_set'] . "'");
            echo "<h3>Sands</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM goblet WHERE set_name ='" . $_GET['artifact_set'] . "'");
            echo "<h3>Goblet</h3>";
            printArtifacts($result);
            $result = executePlainSQL("SELECT * FROM circlet WHERE set_name ='" . $_GET['artifact_set'] . "'");
            echo "<h3>Circlet</h3>";
            printArtifacts($result);
        }

        function handleProjectRequest() {
            global $db_conn;

            if (empty($_GET['project_name'])) {
                echo "Error -  Please provide a Character's name to display their information.";
                return;
            }

            echo "<h4>Character Info: <br><h4>";
            echo "If this is blank - double check that your character exists in the Inventory! <br><br>";

            if(!empty($_GET['attribute'])) {
                foreach($_GET['attribute'] as $a){
                    echo strtoupper($a) .': <br/>';
                    $result = executePlainSQL("SELECT " . $a . " FROM character WHERE name ='" . $_GET['project_name'] . "'");
                    while ($row = OCI_Fetch_Array($result, OCI_RETURN_NULLS)) {
                        echo $row[0] . "<br><br>";
                    }
                }
            }
        }

        function handleNestRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT set_name FROM (SELECT set_name, COUNT(*) as num FROM " . $_GET['artifact_type'] . " WHERE quality = 5 GROUP BY set_name) a WHERE NOT EXISTS (SELECT * FROM (SELECT set_name, COUNT(*) as num FROM " . $_GET['artifact_type'] . " WHERE quality = 5 GROUP BY set_name) b WHERE a.num < b.num)");
            printArtifactSet($result);
        }

        function handleDivideRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT name FROM character WHERE flower IS NOT NULL AND plume IS NOT NULL AND timepiece IS NOT NULL AND goblet IS NOT NULL AND circlet IS NOT NULL");
            printCharacterName($result);
        }

        function handleHaveRequest() {
            global $db_conn;
            if (empty($_GET['stat'])) {
                echo "Error -  Please provide a minimum stat value!";
                return;
            }

            $result = executePlainSQL("SELECT set_name, quality, MAX(stat) FROM (SELECT * FROM flower UNION SELECT * FROM plume UNION SELECT * FROM timepiece UNION SELECT * FROM goblet UNION SELECT * FROM circlet) GROUP BY set_name, quality HAVING MAX(stat) > " . $_GET['stat'] . "");
            printArtifactQuality($result);
        }

        function handleDeleteRequest() {
            global $db_conn;

            if (empty($_GET['delete_name'])) {
                echo "Error -  Please provide the name of a Character to delete.";
                return;
            }

            executePlainSQL("DELETE FROM character WHERE name = '" . $_GET['delete_name'] . "'");
            OCICommit($db_conn);

            $result = executePlainSQL("SELECT * FROM character");
            printCharacter($result);
        }

        // HANDLE ALL POST ROUTES
        // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }
                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
        // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('printTuples', $_GET)) {
                    handlePrintRequest();
                }
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                }
                if (array_key_exists('select', $_GET)) {
                    handleSelectRequest();
                }
                if (array_key_exists('project', $_GET)) {
                    handleProjectRequest();
                }
                if (array_key_exists('join', $_GET)) {
                    handleJoinRequest();
                }
                if (array_key_exists('nest', $_GET)) {
                    handleNestRequest();
                }
                if (array_key_exists('divide', $_GET)) {
                    handleDivideRequest();
                }
                if (array_key_exists('have', $_GET)) {
                    handleHaveRequest();
                }
                if (array_key_exists('delete', $_GET)) {
                    handleDeleteRequest();
                }
                if (array_key_exists('character', $_GET)) {
                    handleCharacterRequest();
                }
                disconnectFromDB();
            }
        }

        if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if ( isset($_GET['characterRequest']) || isset($_GET['haveRequest']) || isset($_GET['divideRequest']) || isset($_GET['nestRequest']) || isset($_GET['joinRequest']) || isset($_GET['printRequest']) || isset($_GET['countTupleRequest']) || isset($_GET['selectRequest']) || isset($_GET['projectRequest']) || isset($_GET['deleteCharRequest'])) {
            handleGETRequest();
        }
        ?>
</body>
</html>

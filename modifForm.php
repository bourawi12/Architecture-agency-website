<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

    <?php
     require_once "header.php";
     require_once "session.php";
     Verifier_session();
    require_once('project.class.php');
    $us = new Project();
    $res = $us->getproj($_GET['id_proj']);
    $data = $res->fetchAll(PDO::FETCH_ASSOC);
    $id = $data[0]["id"];
    $title = $data[0]["title"];
    $type = $data[0]["type"];
    $emplacement = $data[0]["emplacement"];
    $surface = $data[0]["surface"];
    $annee = $data[0]["annee"];
    $statut = $data[0]["statut"];
    $description = $data[0]["description"];
    $img_princ = $data[0]["img_princ"];
    $img_sec = $data[0]["img_sec"];

    /* récupération des données du formulaire */
    $id_proj = $_GET['id_proj'];

    ?>

    <fieldset>
        <legend>Modifier un projet</legend>

        <form action="modifier.php" method="post" enctype="multipart/form-data">
            <table class='table table-striped'>

                <tr> <label name="id">Projects :
                        <?php echo $id_proj; ?>
                    </label>
                    <input type="hidden" name="id" id="id" value="<?php echo ($id_proj) ?>">
                </tr>

                <tr>
                    <td> <label for="ftitle">title :</label> </td>
                    <td><input type="text" name="ftitle" id="ftitle" value="<?php echo $title ?>"></td>
                </tr>
                
                <tr>
                    <td> <label for="ftype">type :</label> </td>
                    <td><input type="text" name="ftype" id="ftype" value="<?php echo $type ?>"></td>
                </tr>

                <tr>
                    <td> <label for="">emplacement</label> </td>
                    <td>
                        <select name="emplacement" id="emplacement">
                            <?php
                            $governorates = [
                                "Ariana",
                                "Beja",
                                "Ben Arous",
                                "Bizerte",
                                "Gabès",
                                "Gafsa",
                                "Jendouba",
                                "Kairouan",
                                "Kasserine",
                                "Kébili",
                                "Kef",
                                "Mahdia",
                                "Manouba",
                                "Mèdenine",
                                "Monastir",
                                "Nabeul",
                                "Sfax",
                                "Sidi Bouzid",
                                "Siliana",
                                "Sousse",
                                "Tataouine",
                                "Touzeur",
                                "Tunis",
                                "Zagouan"
                            ];
                            
                            foreach ($governorates as $governorate) {

                                if ($governorate == $emplacement)
                                    echo "<option value='$governorate' selected>$a</option>";
                                else
                                    echo "<option value='$governorate'>$governorate</option>";}
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> <label for="fsurface">surface :</label> </td>
                    <td><input type="number" name="fsurface" id="fsurface" value="<?php echo $surface ?>"></td>
                </tr>
                
                <tr>
                    <td> <label for="">annee</label> </td>
                    <td>
                        <select name="annee" id="annee">
                            <?php
                            $year = date("Y");
                            for ($a = 1900; $a <= $year; $a++)

                                if ($a == $annee)
                                    echo "<option value='$a' selected>$a</option>";
                                else
                                    echo "<option value='$a'>$a</option>";
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> <label for="ftype">statut :</label> </td>
                    <td><input type="text" name="fstatut" id="fstatut" value="<?php echo $statut ?>"></td>
                </tr>

                <tr>
                    <td> <label for="ftype">description :</label> </td>
                    <td><input type="text" name="fdescription" id="fdescription" value="<?php echo $description ?>"></td>
                </tr>
                
                <tr>
                    <td>img_princ: <input type="file" name="img_princ" /> </td>
                    <td><img src="assets/img/<?= $img_princ ?>" width="50" height="50"></td>
                </tr>

                <tr>
                    <td>img_sec: <input type="file" name="img_sec" multiple /> </td>
                    <td><img src="assets/img/<?= $img_sec ?>" width="50" height="50"></td>
                </tr>
                
                <table>

                    <input type="submit" name="Envoyer" value="Envoyer">
        </form>

    </fieldset>

</body>

</html>
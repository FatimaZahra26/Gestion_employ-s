<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "employés";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['ajouter'])) {

    $Nom = $_POST['Nom'];
    $Prénom = $_POST['Prénom'];
    $Email= $_POST['Email'];
    $Sexe= $_POST['Sexe'];
    $Tel= $_POST['Tel'];
    $Fonction= $_POST['Fonction'];
    $DateE = $_POST['DateE'];
    $Adresse = $_POST['Adresse'];
    
 
    
    $sql = "INSERT INTO employees (Nom ,Prénom, Fonction, Email, adresse , Date_Entrée, Sexe, Tel)
    VALUES ('$Nom', '$Prénom','$Fonction','$Email','$Adresse', '$DateE','$Sexe','$Tel')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['Enregistrer'])) {

    $Nom = $_POST['Nom_C'];
    $Heure_EM = $_POST['HeureEM'];
    $Heure_ES= $_POST['HeureES'];
    $Heure_SM= $_POST['HeureSM'];
    $Heure_SS= $_POST['HeureSS'];
    
 
    
    $sql = "INSERT INTO Gestion (Nom_Complet ,Heure_EntréeM, Heure_EntréeS, Heure_SortieM, Heure_SortieS)
    VALUES ('$Nom', '$Heure_EM',' $Heure_ES','$Heure_SM', '$Heure_SS')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['EnregistrerRetard'])) {

    $Nom = $_POST['Nom_c'];
    $Date = $_POST['Date'];
    $Raison= $_POST['Raison'];
   
    
    $sql = "INSERT INTO retards (Nom_complet , Date, Raison)
    VALUES ('$Nom', '$Date', '$Raison')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['EnregistrerAbscence'])) {

    $Nom = $_POST['Nom_CA'];
    $Nb_jrs = $_POST['Nb_jours'];
    $Depart= $_POST['Depart'];
    $Retour= $_POST['Retour'];
    $Raison= $_POST['RaisonA'];
   
    
    $sql = "INSERT INTO Abscences (Nom ,nb_jrs,Depart, retour,Raison)
    VALUES ('$Nom', '$Nb_jrs', '$Depart','$Retour','$Raison')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['EnregistrerCongés'])) {

    $Nom = $_POST['Nom_CC'];
    $Nb_jrs = $_POST['Nb_joursC'];
    $Depart= $_POST['DepartC'];
    $Retour= $_POST['RetourC'];
    $Tel= $_POST['TelC'];
   
    
    $sql = "INSERT INTO Congés (Nom ,nb_jrs,Départ, retour,Tel)
    VALUES ('$Nom', '$Nb_jrs', '$Depart','$Retour','$Tel')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

 

$sql = "SELECT * FROM employees";

$result = mysqli_query($conn, $sql);


    mysqli_close($conn);




?><!doctype html>
<html lang="en">

<head>
    <title>Gestion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="order-last" class="img" style="background-image: url(images/bg_1.jpg);">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
            </div>
            <div class="">
                <h1><a href="index.html" class="logo">Gestion RH <span>Suivi des horaires</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#" onclick="afficherEmployés();"><span></span>Liste des Employés</a>
                    </li>
                    <li>
                        <a href="#" onclick="afficherGestion();"><span></span>Gestion horaires</a>
                    </li>
                    <li>
                        <a href="#" onclick="afficherRetards();"><span></span> Retards</a>
                    </li>
                    <li>
                        <a href="#" onclick="afficherAbscences();"><span></span> Abscences</a>
                    </li>
                    <li>
                        <a href="#" onclick="afficherCongés();"><span></span> Congés</a>
                    </li>
                </ul>



                <div class="footer px-4">

                </div>

            </div>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

          <div id="A" >

            <center>
                <h2 class="mb-4">Ajouter un employé</h2>
            </center>
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">

                    <form action="" method="POST">
                        <div class="formbold-input-flex">
                            <div>
                                <label for="firstname" class="formbold-form-label"> Nom </label>
                                <input type="text" name="Nom" id="firstname" placeholder="Your first name" class="formbold-form-input" />
                            </div>

                            <div>
                                <label for="lastname" class="formbold-form-label"> Prénom </label>
                                <input type="text" name="Prénom" id="lastname" placeholder="Your last name" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Email </label>
                                <input type="email" name="Email" id="email" placeholder="example@email.com" class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Sexe</label>

                                <select class="formbold-form-input" name="Sexe" id="occupation">
						  <option value="Homme">Homme</option>
						  <option value="Femme">Femme</option>
						  
						  </select>
                            </div>
                        </div>

                        <div class="formbold-mb-3 formbold-input-wrapp">
                            <label for="phone" class="formbold-form-label"> Tel </label>

                            <div>


                                <input type="text" name="Tel" id="phone" placeholder="Phone number" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-mb-3">
                            <label for="age" class="formbold-form-label"> Fonction: </label>
                            <input type="text" name="Fonction" id="age" class="formbold-form-input" />
                        </div>

                        <div class="formbold-mb-3">
                            <label for="dob" class="formbold-form-label"> Date d'entrée au service </label>
                            <input type="date" name="DateE" id="dob" class="formbold-form-input" />
                        </div>

                        <div class="formbold-mb-3">
                            <label for="address" class="formbold-form-label"> Addresse </label>

                            <input type="text" name="Adresse" id="address" placeholder="Street address" class="formbold-form-input formbold-mb-3" />

                        </div>

                        <div class="formbold-mb-3">


                        </div>

                        <div class="formbold-form-file-flex">


                        </div>

                        <button class="formbold-btn" name="ajouter">Enregistrer</button>
                    </form>
                </div>
            </div>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                
                body {
                    font-family: 'Inter', sans-serif;
                }
                
                .formbold-mb-3 {
                    margin-bottom: 30px;
                }
                
                .formbold-main-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 48px;
                }
                
                .formbold-form-wrapper {
                    margin: 0 auto;
                    max-width: 800px;
                    width: 100%;
                    background: white;
                    padding: 20px;
                }
                
                .formbold-img {
                    display: block;
                    margin: 0 auto 25px;
                }
                
                .formbold-input-wrapp>div {
                    display: flex;
                    gap: 20px;
                }
                
                .formbold-input-flex {
                    display: flex;
                    gap: 20px;
                    margin-bottom: 15px;
                }
                
                .formbold-input-flex>div {
                    width: 50%;
                }
                
                .formbold-form-input {
                    width: 100%;
                    padding: 13px 22px;
                    border-radius: 5px;
                    border: 1px solid #dde3ec;
                    background: #ffffff;
                    font-weight: 500;
                    font-size: 16px;
                    color: #536387;
                    outline: none;
                    resize: none;
                }
                
                .formbold-form-input::placeholder,
                select.formbold-form-input,
                .formbold-form-input[type='date']::-webkit-datetime-edit-text,
                .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
                    color: rgba(83, 99, 135, 0.5);
                }
                
                .formbold-form-input:focus {
                    border-color: #6a64f1;
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }
                
                .formbold-form-label {
                    color: #07074D;
                    font-weight: 500;
                    font-size: 14px;
                    line-height: 24px;
                    display: block;
                    margin-bottom: 10px;
                }
                
                .formbold-form-file-flex {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                }
                
                .formbold-form-file-flex .formbold-form-label {
                    margin-bottom: 0;
                }
                
                .formbold-form-file {
                    font-size: 14px;
                    line-height: 24px;
                    color: #536387;
                }
                
                .formbold-form-file::-webkit-file-upload-button {
                    display: none;
                }
                
                .formbold-form-file:before {
                    content: 'Upload file';
                    display: inline-block;
                    background: #EEEEEE;
                    border: 0.5px solid #FBFBFB;
                    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
                    border-radius: 3px;
                    padding: 3px 12px;
                    outline: none;
                    white-space: nowrap;
                    -webkit-user-select: none;
                    cursor: pointer;
                    color: #637381;
                    font-weight: 500;
                    font-size: 12px;
                    line-height: 16px;
                    margin-right: 10px;
                }
                
                .formbold-btn {
                    text-align: center;
                    width: 20%;
                    font-size: 16px;
                    border-radius: 5px;
                    padding: 14px 25px;
                    border: none;
                    font-weight: 500;
                    background-color: #6a64f1;
                    color: white;
                    cursor: pointer;
                    margin-top: 25px;
                    
                }
                
                .formbold-btn:hover {
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }
                
                .formbold-w-45 {
                    width: 45%;
                }
            </style>
        </div>
        <div id="B">
        <center>
                <h2 class="mb-4">Liste des employés</h2>
            </center>
            <?php
        if(mysqli_num_rows($result) > 0)
    {
       echo ' <table border="solid"  style="margin:0 auto; width: 100%">
       <tr style="text-align:center; background-color:#ADD8E6;">
       <th>Prenom</th>
       <th>Nom</th>
       <th>Sexe</th>
       <th>Fonction</th>
       <th>Date Entree</th>
       <th>Email</th>
       <th>Adresse</th>
       <th>Tel</th>

       </tr>
       
  ';
       while($row = mysqli_fetch_assoc($result)){
       
           echo '<tr > <td>' . $row["Prénom"] . '</td>
           <td>' . $row["Nom"] . '</td>
           <td>' . $row["Sexe"] . '</td> 
           <td>' . $row["Fonction"] . '</td>
           <td>' . $row["Date_Entrée"] . '</td>
           <td> ' . $row["Email"] . '</td>
           <td>' . $row["adresse"] . '</td>
           <td>' . $row["Tel"] . '</td>
           
           </tr>';
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }?>
            </div>
            <div>
 
        <div id="C" style="display: none;">
            <center>
                <h2 class="mb-4">Gestion horaires</h2>
            </center>
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">

                    <form action="" method="POST">
                    <div class="formbold-mb-3 formbold-input-wrapp">
                            <label for="Nom" class="formbold-form-label"> Nom Complet </label>
                            <div>
                                <input type="text" name="Nom_C" id="phone" placeholder="Nom Complet" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Heure D'entrée (Matin) </label>
                                <input type="text" name="HeureEM" id="Heure"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Heure de Sortie (Matin)</label>
                                <input type="text" name="HeureSM" id="Heure"  class="formbold-form-input" />
                                
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Heure D'entrée (Soir) </label>
                                <input type="text" name="HeureES" id="Heure"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Heure de Sortie (Soir)</label>
                                <input type="text" name="HeureSS" id="Heure"  class="formbold-form-input" />
                                
                            </div>
                        </div>

                       


                        <button class="formbold-btn" name="Enregistrer">Ajouter</button>
                    </form>
                </div>
            </div>
    </div>
    <div id="E" style="display: none;">
            <center>
                <h2 class="mb-4">Retards</h2>
            </center>
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">

                    <form action="" method="POST">
                    <div class="formbold-mb-3 formbold-input-wrapp">
                            <label for="Nom" class="formbold-form-label"> Nom Complet </label>
                            <div>
                                <input type="text" name="Nom_C" id="phone" placeholder="Nom Complet" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Date </label>
                                <input type="Date" name="Date" id="Date"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Raison</label>
                                <input type="text" name="Raison" id="Raison"  class="formbold-form-input" />
                                
                            </div>
                        </div>
                        
                        <button class="formbold-btn" name="EnregistrerRetard">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="F" style="display: none;">
            <center>
                <h2 class="mb-4">Abscences</h2>
            </center>
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">

                    <form action="" method="POST">
                    <div class="formbold-input-flex">
                            <div>
                                <label for="Nom" class="formbold-form-label"> Nom Complet </label>
                                <input type="text" name="Nom_CA"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Nombre de jours</label>
                                <input type="Nombre" name="Nb_jours" id="Raison"  class="formbold-form-input" />
                                
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Du </label>
                                <input type="Date" name="Depart" id="Depart"  class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="email" class="formbold-form-label"> Au </label>
                                <input type="Date" name="Retour" id="DateA"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Raison</label>
                                <input type="text" name="RaisonA" id="RaisonA"  class="formbold-form-input" />
                                
                            </div>
                            
                        </div>
                        
                        <button class="formbold-btn" name="EnregistrerAbscence">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>  
        <div id="G" style="display: none;" >
        <center>
                <h2 class="mb-4">Congés</h2>
            </center>
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">

                    <form action="" method="POST">
                    <div class="formbold-input-flex">
                            <div>
                                <label for="Nom" class="formbold-form-label"> Nom Complet </label>
                                <input type="text" name="Nom_CC"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Nombre de jours</label>
                                <input type="Nombre" name="Nb_joursC" id="Raison"  class="formbold-form-input" />
                                
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Date de Depart </label>
                                <input type="Date" name="DepartC" id="Depart"  class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="email" class="formbold-form-label"> Date de Retour </label>
                                <input type="Date" name="RetourC" id="DateA"  class="formbold-form-input" />
                            </div>

                            <div>
                                <label class="formbold-form-label">Tel</label>
                                <input type="text" name="TelC" id="RaisonA"  class="formbold-form-input" />
                                
                            </div>
                            
                        </div>
                        
                        <button class="formbold-btn" name="EnregistrerCongés">Ajouter</button>
                    </form>
                </div>
            </div>
             
        </div>
          
    <div id="D" style="display: none;">
    <div class="formbold-main-wrapper">
    <form action="" method="GET" class="">
    <?php

//fire query
$sql = "SELECT * FROM Gestion";
$conn = mysqli_connect($host, $username, $password, $dbname);
$result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
    {
    echo ' <table border="solid" style="width:800px; margin:0 auto;text-align:center; ">
    <tr style="text-align:center; background-color:#ADD8E6;">
    <th>Nom_Complet</th>
    <th>Heure_Entrée (matin)</th>
    <th>Heure_Sortie (matin)</th>
    <th>Heure_Entrée (Soir)</th>
    <th>Heure_Sortie (Soir)</th></tr>';
    while($row = mysqli_fetch_assoc($result)){
    // echo"" .$row['id'];
        echo '<tr> <td>' . $row["Nom_Complet"] . '</td><td>' . $row["Heure_EntréeM"] . ' </td>
        <td>' . $row["Heure_SortieM"] . ' </td><td>' . $row["Heure_EntréeS"] . ' </td><td>' . $row["Heure_SortieS"] . ' </td>
         </tr>
        ';
    }}
    ?></form>
    </div>
    
    </div>
    </div>
    
    </div>
    
            </div>
            



    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    
</body>

</html>
<?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $profile = $_FILES['profile_image']['name'];
    $first_name = $_POST['nom'];
    $Formation=$_POST['Formation'];
    $about_me = $_POST['about_me'];
    $profession = $_POST['profession'];
    $temp_profile = $_FILES['profile_image']['tmp_name'];
    move_uploaded_file($temp_profile,'images/'.$profile);
    $last_name = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $nombreStages = $_POST["stages"];
    $stages = array();
    for ($i = 1; $i <= $nombreStages; $i++) {
        $nomEntreprise = $_POST["Nom_de_entreprise$i"];
        $description = $_POST["Description$i"];
        $stage = array(
            'Nom' => $nomEntreprise,
            'Description'  => $description
        );
        $stages[$i] = $stage;
    }
    $nombreProjets = $_POST["projets"];
    $projects = array();
    for ($i = 1; $i <= $nombreProjets; $i++) {
        $nomProjet = $_POST["Nom_de_Projet$i"];
        $description = $_POST["Description_project$i"];
        $projectDetails = array(
            'Nom de Projet' => $nomProjet,
            'Description project' => $description
        );
        $projects[$i] = $projectDetails;
    }
    $nombreLangues = $_POST["langues"];
    $langues = array();
    for ($i = 1; $i <= $nombreLangues; $i++) {
        $nomlangue = $_POST["langues$i"];
        $langues[] = $nomlangue;
    }
    $nombrecompetences = $_POST["competences"];
    $competences = array();
    for ($i = 1; $i <= $nombrecompetences; $i++) {
        $nomcompetences = $_POST["Competence$i"];
       
        $competences[] = $nomcompetences;
    }
  }
  
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <style>
      * {
        font-family: "Montserrat", sans-serif;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
         }
        .form-container
      {
        max-width: 768px;
        margin: 10px auto;
        padding: 30px;
       border: 1px solid black;
        }
      body {
       background: #5f6368;
           }

      .toCenter {
         width: 100%;
         text-align: center;
         display: flex;
         justify-content: center;
         align-items: center;
        }
        .grid-container {
        display: flex;
      
    }
  
       .grid-container .zone-1 .profile {
         display: inline-flex;
         margin-bottom: 5px;
          margin-left: -15px;
           width: 220px;
           height: 220px;
            border-radius: 50%;
          background-position: center top;
         background-size: 200%;
           border: 4px solid #2c2b29;
         }
         .grid-container .zone-1 .contact-box {
          margin-top: 10px;
            }
        .grid-container .zone-1 .contact-box > * {
          width: 100%;
          display: grid;
          grid-template-columns: 0.3fr 1fr;
          margin-top: 25px;
          align-items: center;
         }
        .grid-container .zone-1 .contact-box > * i {
              font-size: 1.3em;
            }
        .grid-container .zone-1 .contact-box > * .text {
            display: inline-flex;
            word-break: break-all;
              }
        .grid-container .zone-1 .personal-box {
            margin-top: 35px;
             }
        .grid-container .zone-1 .personal-box > *:not(.title) {
             margin: 25px 0px;
             grid-template-columns: 0.55fr 1fr;
             display: grid;
             }
         .grid-container .zone-1 .personal-box .progress .dot {
              display: inline-block;
              width: 10px;
              height: 10px;
              background-color: #313131;
              border-radius: 50%;
              margin-left: 4px;
              }
          .margin-20
           {
              margin-left: 20px;
              margin-bottom: 10px;
            /* vertical-align: baseline; */
              }
          li::marker
              {
              font-size: 2rem;
              color: #dbdcd7;
            }
          .d-flex
          {
              display: flex;
           }
      .align-items-center
         {
              align-items: center;
              padding-top: 1rem;
          }
        .circle
         {
          display: block;
          width: 10px;
          height: 10px;
          background-color: #dbdcd8;
          border-radius: 50%;
           margin-right: 10px;
          }
         .grid-container .zone-1 .personal-box .progress .fa-star.active {
           color: #9db858;
           margin-right: 5px;
           }
         .grid-container .zone-1 .hobbies-box {
           margin-top: 35px;
           }
         .grid-container .zone-1 .hobbies-box .logo {
          margin: 10px 0px;
          display: grid;
         grid-template: 1fr 1fr/1fr 1fr;
          font-size: 2.8em;
            grid-row-gap: 15px;
          }
          .grid-container .zone-1 {
                /* Use display: flex; instead of position: flex; */
                padding: 40px 20px;
               padding-left: 35px;
               background: #d1d1d1;
               width: 50%;
               color: #313131;
                    }

               .grid-container .zone-2 {
                position: absolute;
                background: #2c2b29;
                top: 0;
                right: 0;
                width: 50%;
                padding: 40px 20px;
               padding-right: 75px;
               color: #b5b5b4;
                }

         .grid-container .zone-2 .headTitle {
           font-size: 2.1em;
            color: #b5b7b0;
           }
         .grid-container .zone-2 .headTitle h1 {
               font-weight: 400 !important;
          }
         .grid-container .zone-2 .subTitle h1 {
              font-weight: 400 !important;
               }
           .grid-container .zone-2 .box {
              display: inline-block;
               padding: 2px 70px 2px 20px;
                margin-left: -20px;
                margin-top: 35px;
                 background: #797878;
                 color: #2c2b29;
                   }
             .grid-container .zone-2 .group-1 .desc {
                margin-top: 15px;
                line-height: 1.5;
                  }
               .grid-container .zone-2 .group-2 .desc {
                 margin-top: 15px;
                 margin-left: 20px;
                    }
                 .grid-container .zone-2 .group-2 .desc ul {
                   position: relative;
                   margin-top: 20px;
                   margin-left: 5px;
                    }
                   .grid-container .zone-2 .group-2 .desc ul:before {
                    content: "";
                     position: absolute;
                     top: 12px;
                     left: -22px;
                     width: 10px;
                      height: 10px;
                  border-radius: 50%;
                   background: #9db858;
                   }
               .grid-container .zone-2 .group-2 .desc ul li {
                   list-style-type: none;
                   position: relative;
                      }
              .grid-container .zone-2 .group-2 .desc ul li:before {
                     content: "";
                    position: absolute;
                    top: 12px;
                    left: -18px;
                    height: 60px;
                    border-left: 2px solid #9db858;
                  }
              .grid-container .zone-2 .group-2 .desc ul:last-of-type li:before {
                    content: none;
                       }
              .grid-container .zone-2 .group-2 .desc ul li div:last-of-type {
                   color: #9db858;
                    font-weight: bold;
                      }
                   .grid-container .zone-2 .group-3 .desc {
                    margin-top: 15px;
                      margin-left: 20px;
                      }
                  .grid-container .zone-2 .group-3 .desc ul {
                position: relative;
                margin-top: 20px;
                margin-left: 5px;
               }
                  .grid-container .zone-2 .group-3 .desc ul:before {
                     content: "";
                     position: absolute;
                   top: 30px;
             left: -22px;
                width: 10px;
              height: 10px;
               border-radius: 50%;
             background: #9db858;
            }
                    .grid-container .zone-2 .group-3 .desc ul li {
                     list-style-type: none;
                     position: relative;
                    }
                  .grid-container .zone-2 .group-3 .desc ul li:before {
                       content: "";
                       position: absolute;
                        top: 30px;
                       left: -18px;
                       height: 100px;
                       border-left: 2px solid #9db858;
                        } 
                    .grid-container .zone-2 .group-3 .desc ul:last-of-type li:before {
                    content: none;
                   }
                      .grid-container .zone-2 .group-3 .desc ul li div:nth-child(2) {
                  color: #9db858;
                       font-weight: bold;
              }


            

      </style>
     
  </head>
  <body>
  <div class="grid-container">
  <div class="zone-1">
   <div class="toCenter">
       <img src="images/<?php echo $profile;?>" class="profile">

    </div>'
    <div class="contact-box">
      <div class="title">
        <h2>Contact</h2>
      </div>
      <div class="call"><i class="fas fa-phone-alt"></i>
        <div class="text"><?php echo $phone;?></div>
        </div>
      <div class="email"><i class="fas fa-envelope"></i>
        <div class="text"><?php echo $email;?></div>
      </div>
    </div>
    <div class="hobbies-box">
      <div class="title">
        <h2>Langues</h2>
      </div>
      <?php 
        foreach($langues as $langue)
        {
          echo "<div class='d-flex align-items-center'>
          <div class='circle'></div>
          <div><strong>" . ucwords($langue) . "</strong></div>
        </div>";
        }
        ?>
        </div>
        <div class="hobbies-box">
          <div class="title">
            <h2>Competences</h2>
          </div>
          <?php 
            foreach($competences as $competence)
            {
              echo "<div class='d-flex align-items-center'>
              <div class='circle'></div>
              <div><strong>" . ucwords($competence) . "</strong></div>
            </div>";
            }
            ?>
            </div>
          </div>
          <div class="zone-2">
            <div class="headTitle">
              <h1><?php echo ucwords($first_name);?><br><b><?php echo ucwords($last_name);?></b></h1>
            </div>
            <div class="subTitle">
                 <h1><?php echo ucwords($profession);?></h1>

            </div>
            <div class="group-1">
              <div class="title">
                <div class="box">
                  <h2>About Me</h2>
                </div>
              </div>
              <div class="desc"><?php echo $about_me;?></div>
            </div>
            <div class="group-2">
            <div class="title">
        <div class="box">
          <h2>Formation</h2>
        </div>
      </div>
      <div class="desc">
        <?php 
         
            echo "
              <div class='msg-2'>" . ucwords($Formation) . "</div>
            ";
          
        ?>
      </div>
    </div>
    <div class="group-3">
      <div class="title">
        <div class="box">
          <h2>Stages</h2>
        </div>
      </div>
      <div class="desc">
      <?php
foreach ($stages as $index => $stage) {
  echo "<ul>
          <li>
              <div class='msg-1'><br></div>
              <div class='msg-2'>" . ucwords($stage['Nom']) . "</div>
              <div class='msg-4'>" . ucfirst($stage['Description']) . "</div>
          </li>
        </ul>";
}

?>
      </div>
    </div>
    <div class="group-3">
      <div class="title">
        <div class="box">
          <h2>Projets</h2>
        </div>
      </div>
      <div class="desc">
      <?php
foreach ($projects as $i => $projectDetails) {
  echo "<ul>
          <li>
              <div class='msg-1'><br></div>
              <div class='msg-2'>" . ucwords($projectDetails['Nom de Projet']) . "</div>
              <div class='msg-4'>" . ucfirst($projectDetails['Description project']) . "</div>
          </li>
        </ul>";
}

?>

      </div>
    </div>
    </div>
</div>
</body>
</html>



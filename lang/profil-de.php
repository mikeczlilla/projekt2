<?php
session_start();?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profil.css">
  </head>
  <body>
    <div class="list-group" style="width: fit-content;">
      <a href="lang/profil-english.html" class="list-group-item list-group-item-action" style="text-align: center;"><img src="kep/uk.png" alt="English" style="width: 40px;"></a>
      <a href="lang/profil-de.html" class="list-group-item list-group-item-action" style="text-align: center;"><img src="kep/germany.png" alt="D" style="width: 40px;"></a>
    </div>
    <div class="card" id="cardMain">
        <div class="card-body" id="cardB1">
            <h1>Profil</h1>
            <form>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daten</li>
                    <li class="list-group-item"><b>Name: </b>
                    <?php
                     echo $_SESSION["vezeteknev"] . " " . $_SESSION["keresztnev"];
                    ?>
                    </li>
                    <li class="list-group-item"><b>Nutzername: </b>
                    <?php
                     echo $_SESSION["username"];
                    ?>
                    </li>
                    <li class="list-group-item"><b>Email: </b>
                    <?php
                     echo $_SESSION["email"];
                    ?>
                    </li>
                    <li class="list-group-item"><b>Telefonnummer: </b>
                    <?php
                     echo $_SESSION["tszam"];
                    ?>
                    </li>
                    <li class="list-group-item"><b>Adresse: </b>
                    <?php
                     echo $_SESSION["iranyitoszam"] . " " . $_SESSION["varos"] . " " . $_SESSION["utca"] . " " . $_SESSION["haz_szam"] . ".";
                    ?>
                    </li>
                    <li class="list-group-item"><b>Geburtsdatum: </b>
                    <?php
                     echo $_SESSION["szdatum"];
                    ?>
                    </li>
                  </ul>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Kilépés
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sind Sie sicher, dass Sie aufhören wollen?</h1>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zurück</button>
                            <button type="submit" formaction="index.html" class="btn btn-primary">Ausloggen</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </form>
              
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
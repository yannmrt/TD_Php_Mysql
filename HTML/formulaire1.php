<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire1</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php include('../menu.php'); ?>
    
        <div align="center">
            <h1>Formulaire</h1>
        </div>

        <table border=2 with=60%>
            <form method="" action="">
                <div>
                    <span>Civilités:</span>
                    <input type="radio" id="Mr" name="Mr" value="Mr">
                    <label for="Civilité">Mr</label>
                    <label for="Civilité">Mme</label>
                    <input type="radio" id="Mme" name="Mme" value="Mme">             
                </div>
                <div>
                    <span>Nom:</span>
                    <input type="text" id="nom" name="nom" placeholder="Nom">
                </div>
                <div>
                    <span>Prénom:</span>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                </div>
                <div>
                    <span>Date de naissance:</span>
                    <select>
                        <option value="">Jour</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <select>
                        <option value="">Mois</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <input type="text" id="annee" name="annee" placeholder="Année">
                </div>
                <div>
                    <span>Adresse:</span>

                    <span>Numéro  </span>
                    <input type="text" id="numero" name="numero">

                    <span>Rue  </span>
                    <input type="text" id="rue" name="rue">

                </div>
                <div>

                    <span>Code postal  </span>
                    <input type="text" id="codepostal" name="codepostal">

                    <span>Ville  </span>
                    <input type="text" id="ville" name="ville">

                </div>
                <div>
                    <span>Téléphone: </span>
                    <input type="text" id="numerodetelephone" name="numerodetelephone">
                </div>
                <div>
                    <span>Adresse Email: </span>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <input type="submit" id="submit" name="submit">
                    <input type="button" value="Remise à zéro " id="return" name="return">
                </div>
            </form>
        </table>
        
        </div>

        <a href="../index.php"><button>Retour en arrière</button></a>

    </body>
</html>
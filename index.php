<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>TP : Page protégée par mot de passe</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="row">                    
                    <div class="col-12 p-5 mt-5" style="background-color: #f9e4b7">
                        <h3>TP : Page protégée par mot de passe</h3>
                        <form action="traitement.php" method="POST" class="">
                            <div class="form-group mt-3">
                                <label class="form-label" for="mot-de-passe">Mot de passe</label>
                                <input type="password" class="form-control" name="mot-de-passe" id="mot-de-passe" placeholder="Veuillez entrer le mot de passe" required/>
                                <?php 
                                    if(isset($_GET["erreur"]) && !empty($_GET["erreur"])){
                                        echo "<p class='text-danger'>" . $_GET["erreur"] . "</p>";
                                    }
                                ?>
                            </div>
                            
                            <div class="form-group mt-3">
                                <input type="reset" class="btn btn-danger" value="Annuler"/>
                                <input type="submit" class="btn btn-success" value="Envoyer"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
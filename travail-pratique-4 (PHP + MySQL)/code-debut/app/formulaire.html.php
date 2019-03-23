<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de transaction</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-8">
                <h4>Entrez le montant de la transaction à valider</h4>
                <form action="app/api.php" method="POST">
                    <input type="hidden" name="transaction" value="true" />
                    <div class="form-group">
                        <label for="montant">Montant de la transaction :</label>
                        <input type="number" step="0.01" min="0" name="montant" class="form-control" id="montant" aria-describedby="montantHelp" placeholder="Entrez le montant en format numérique">
                        <small id="montantHelp" class="form-text text-muted">Cela simule un appel à l'API de votre compagnie!</small>
                    </div>
                    <div class="alert alert-secondary mb-3" role="alert">
                        Le solde du compte est {Solde dynamique du compte}$.
                    </div>
                    <div class="alert alert-warning mb-3" role="alert">
                        Le solde du compte est inférieur à 10$.
                    </div>
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-8">
                
                <b>La dernière transaction est :</b>
                <table class="table table-striped table-dark mt-2 mb-5">
                    <tbody>
                        <tr>
                            <td>
                                <span class="<?php echo $montant > 0 ? 'text-success' : 'text-danger'; ?>">
                                    <b>{montant de la transaction}$</b>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
        
        <div class="row justify-content-center mt-4">
            <div class="col-8">
                <h4>Rechargez la carte (+500$) en appuyant le bouton ci-dessous.</h4>
                <form action="app/api.php" method="POST">
                    <input type="hidden" name="recharge" value="500" />
                    <button type="submit" class="btn btn-primary">Recharger la carte!</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
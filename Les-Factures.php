<!DOCTYPE html>
<html>
<head>
    <title>Facture</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:3em;">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Facture</h1>
            </div>
        </div>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>
                        <select class="form-control" id="produit">
                            <option>Pomme</option>
                            <option>Poire</option>
                            <option>Cerise</option>
                            <option>Avocat</option>
                            <option>Orange</option>
                            <option>Melon</option>
                        </select>
                    </td>
                    <td><input type="number" name="number" min="0" class="form-control" id="number" placeholder="Quantité"></td>
                    <td><input type="number" name="price" class="form-control" id="price" placeholder="Prix à l'unité"></td>
                    <td><button type="submit" id="add" class="btn btn-primary">Ajouter le produit</button></td>
                </tr>
            </tbody>
        </table>
        <div id="facture">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix à l'unité</th>
                        <th>Prix global</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0</td>
                        <td>Cerise</td>
                        <td>14</td>
                        <td>1</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pomme</td>
                        <td>10</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr style="border-top:2px solid #AAA;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total HT</td>
                        <td>24€</td>
                    </tr>
                    <tr style="border-bottom:2px solid #AAA;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total TVA</td>
                        <td>4.80€</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total TTC</td>
                        <td>28€</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

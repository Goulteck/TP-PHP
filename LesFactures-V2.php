<!DOCTYPE html>
<html>
<head>
    <title>Facture</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script>
        $(document).ready(function() {
            let products = [];
            const taxRate = 0.20;

            function updateInvoice() {
                let totalHT = 0;
                $("#invoice tbody").empty();
                products.forEach((product, index) => {
                    let productTotal = product.quantity * product.price;
                    totalHT += productTotal;
                    $("#invoice tbody").append(`
                        <tr>
                            <td>${index}</td>
                            <td>${product.name}</td>
                            <td>${product.quantity}</td>
                            <td>${product.price.toFixed(2)}</td>
                            <td>${productTotal.toFixed(2)}</td>
                        </tr>
                    `);
                });

                let totalTVA = totalHT * taxRate;
                let totalTTC = totalHT + totalTVA;

                $("#invoice tbody").append(`
                    <tr style="border-top:2px solid #AAA;">
                        <td colspan="3"></td>
                        <td>Total HT</td>
                        <td>${totalHT.toFixed(2)}€</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Total TVA</td>
                        <td>${totalTVA.toFixed(2)}€</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Total TTC</td>
                        <td>${totalTTC.toFixed(2)}€</td>
                    </tr>
                `);
            }

            $("#add").click(function() {
                let productName = $("#produit").val();
                let quantity = parseFloat($("#quantity").val());
                let price = parseFloat($("#price").val());

                if (!productName || isNaN(quantity) || isNaN(price)) {
                    alert("Veuillez entrer un produit valide, une quantité et un prix.");
                    return;
                }

                products.push({ name: productName, quantity: quantity, price: price });
                updateInvoice();
            });
        });
    </script>
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
                            <option value="">Sélectionnez un fruit</option>
                            <option value="Pomme">Pomme</option>
                            <option value="Poire">Poire</option>
                            <option value="Cerise">Cerise</option>
                            <option value="Avocat">Avocat</option>
                            <option value="Orange">Orange</option>
                            <option value="Melon">Melon</option>
                        </select>
                    </td>
                    <td><input type="number" name="quantity" min="0" class="form-control" id="quantity" placeholder="Quantité"></td>
                    <td><input type="number" name="price" min="0" step="0.01" class="form-control" id="price" placeholder="Prix à l'unité HT"></td>
                    <td><button type="button" id="add" class="btn btn-primary">Ajouter le produit</button></td>
                </tr>
            </tbody>
        </table>
        <div id="invoice">
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
                    <!-- Les lignes de la facture seront ajoutées ici dynamiquement -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

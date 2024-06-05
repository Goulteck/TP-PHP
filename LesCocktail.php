<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Builder</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6/svgs/solid/martini-glass-citrus.svg"
    />
    <style>
      .bg-gris {
        background-color: #ccc;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="fa-solid fa-martini-glass-citrus me-2"></i> VIP Cocktail
        </a>
      </div>
    </nav>
    
    <!-- Main Container -->
    <div class="container mt-4">
      <div class="row">
        <!-- Form Section -->
        <div class="col-8">
          <div class="bg-gris p-4">
            <form>
              <div class="row">
                <div class="col-4">
                  <label for="nom" class="form-label">Nom</label>
                  <input id="nom" class="form-control" placeholder="Nom" aria-label="Nom" />
                </div>
                <div class="col-4">
                  <label for="prenom" class="form-label">Prénom</label>
                  <input id="prenom" class="form-control" placeholder="Prénom" aria-label="Prénom" />
                </div>
                <div class="col-1 d-flex align-items-end">
                  <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <!-- Table Section -->
        <div class="col-4">
          <table class="table table-striped mt-4">
            <thead>
              <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-success">
                <td>Jean</td>
                <td>DUJARDIN</td>
                <td>
                  <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning">
                    <i class="fa fa-check"></i>
                  </a>
                </td>
              </tr>
              <tr class="table-danger">
                <td>Brad</td>
                <td>PITT</td>
                <td>
                  <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning">
                    <i class="fa fa-check"></i>
                  </a>
                </td>
              </tr>
              <tr class="table-danger">
                <td>Bruce</td>
                <td>Willis</td>
                <td>
                  <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
                <td>
                  <a href="#" class="btn btn-warning">
                    <i class="fa fa-check"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Seven Valley 2023</p>
      </div>
    </footer>
  </body>
</html>

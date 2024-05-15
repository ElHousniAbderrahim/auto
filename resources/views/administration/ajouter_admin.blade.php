<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter Admin </title>

  </head>
  <body>
    @include('menu')

    <div class="container text-center">

    <div class="row">
        <div class="col s12">
            <hr>
          <h3>Liste Des Admin</h3>
        

            {{-- coder ici --}}
            <div class="container">

                <form  action="/ajouter/traitement_admin/" method="POST" class="form-group" >
                  <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" class="form-control" id="nom">
                  </div>
                  <div class="form-group">
                    <label for="prenom">Prenom:</label>
                    <input type="text" class="form-control" id="prenom">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password">
                  </div>
                  <div class="form-group">
                    <div >
                      <button type="submit" class="btn btn-warning">Ajouter</button>
                    </div>
                    <br>

                        <a href="/administration" class="btn btn-danger">Rvenir a la Liste Des Admin</a>
              </div>

                  </div>
                </form>
              </div>



  </div>




        </div>

      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

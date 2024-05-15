<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Ajouter Chef </title>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 --}}  </head>


  <body>
    @include('menu')
    <div class="container text-center">


        <div class="row">
          <div class="col s12">
            <h3>Ajouter Chef Division</h3>
            <hr>
                    {{-- coder ici --}}
                    <div class="container">

                        <form  action="/ajouter/traitement_chef/" method="POST" class="form-group" >
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

                        <a href="/chef_div" class="btn btn-danger">Rvenir a la Liste Des Chef</a>
                      </div>

                          </div>
                        </form>
                      </div>




          </div>

        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Technicien </title>

  </head>
  <body>
    @include('menu')

    <div class="container text-center">

    <div class="row">
        <div class="col s12">
        <hr>
          <h3>Liste Des Technicien</h3>
        <hr>
          <a href="/ajouter_technicien" class="btn btn-info">Ajouter Un Technicien</a>
        <hr>
          <table class="table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Action</th>

                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($techniciens as $technicien)
                        <tr>
                          <td>{{ $technicien->id}}</td>
                          <td>{{ $technicien->nom}}</td>
                          <td>{{ $technicien->prenom}}</td>
                          <td>
                              <a href="#" class="btn btn-primary">Update</a>
                              <a href="#" class="btn btn-danger">Delete</a>

                          </td>
                        </tr>
                    @endforeach


                  </tbody>


          </table>
          <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>

        </div>

      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

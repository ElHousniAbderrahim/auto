<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Liste Chef </title>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 --}}  </head>


  <body>
    @include('menu')
    <div class="container text-center">


        <div class="row">
          <div class="col s12">
            <hr>
            <h3>Liste Chef Division</h3>
            <hr>
            <a href="/ajouter_chef" class="btn btn-info">Ajouter Un Chef Division</a>
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
                        <tr>
                            <td>1</td>
                            <td>blidi</td>
                            <td>jamal</td>
                            <td>
                                <a href="#" class="btn btn-primary">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Abderrahim</td>
                            <td>El housni</td>
                            <td>
                                <a href="#" class="btn btn-primary">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
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
  </body>
</html>

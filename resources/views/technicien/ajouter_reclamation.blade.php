<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter Reclamation </title>

  </head>
  <body>
    @include('menu')
    <div class="container text-center">

    <div class="row">
        <div class="col s12">
        <hr>
          <h3>Ajouter Des Reclamation</h3>

                {{-- coder ici --}}
                <div class="container">

                    @if(session('status') )
                        <div class="alert alert-sucsses">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger"> {{ $error }}</li>
                          @endforeach
                    </ul>


                    <form  action="" method="POST" class="form-group" >
                        @csrf
                      <div class="form-group">
                        <label for="gare">La Gare :</label>
                        <input name="gare" type="text" class="form-control" id="gare">
                      </div>
                      <div class="form-group">
                        <label for="date">Date Reclamation:</label>
                        <input name="date" type="date" class="form-control" id="date">
                      </div>
                      <div class="form-group">
                        <label for="description">Description Du Reclamation:</label>
                        <input name="description" type="text" class="form-control" id="description">
                      </div>
                      <div class="form-group">
                        <div >
                          <button type="submit" class="btn btn-warning">Ajouter La Reclamation</button>
                        </div>
                        <br>

                        <a href="/technicien" class="btn btn-danger">Rvenir a la Liste Technicien</a>
                  </div>

                      </div>
                    </form>
                  </div>



      </div>




        </div>

      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

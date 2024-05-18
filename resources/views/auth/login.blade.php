<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un utilisateur</title>

  </head>
  <body>
    @include('menu')
    <div class="container text-center">

    <div class="row">
        <div class="col s12">
        <hr>
          <h3>Ajouter un utilisateur</h3>

                {{-- coder ici --}}
                <div class="container">

                    @if(session('error') )
                        <div class="alert alert-sucsses">
                            {{ session('error') }}
                        </div>
                    @endif
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger"> {{ $error }}</li>
                          @endforeach
                    </ul>


                    <form  action="/login" method="POST" class="form-group" >
                        @csrf
                      <div class="form-group">
                        <label for="username">Username :</label>
                        <input name="username" type="text" class="form-control" id="username">
                      </div>
                      <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input name="password" type="text" class="form-control" id="password">
                      </div>
                      <div class="form-group">
                        <div >
                          <button type="submit" class="btn btn-warning">Login</button>
                        </div>
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

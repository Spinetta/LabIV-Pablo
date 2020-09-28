<!DOCTYPE html>
<html lang="en">
    <?php include_once("header.php") ?>
<body>
    <?php include_once("navbar.php") ?>

    <div class="container">
    
    <div class="d-flex justify-content-center">
        <div class="card mt-3 ">
                <div class="card-body">
                    <h5 class="card-title text-center"> Nueva persona </h5>
                    <hr>
                    <?php if(isset($msg_error)){echo '<p class="text-danger" >' . $msg_error . '</p>';} ?>
                    <form action="verify.php" method="POST">

                        <div class="row row-cols-md-1">
                            <div class="col">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" >
                            </div>
                        </div>
                        <div class="row row-cols-md-2 mt-3">
                            <div class="col">
                                <label for="age">Edad</label>
                                <input type="number" name="age" id="age" class="form-control" >
                            </div>
                            <div class="col">
                                <label>Genero</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="genreM" value="m"   >
                                    <label class="form-check-label" for="genreM">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="genreF" value="f">
                                    <label class="form-check-label" for="genreF">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                                <button class="btn btn-primary" type="submit">Continuar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    </div>

    
    <?php include_once("footer.php") ?>

    
</body>
</html>
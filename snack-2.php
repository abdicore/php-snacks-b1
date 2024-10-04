

<?php 
if($_GET['nome'])

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- form -->
     <main class="container">
        <section class="row">
            <div class="col-12">
                <h1></h1>
                <form action="snack-2.php" method="GET">
                    <div class="mb-3">
                         <label for="nome" class="form-label">Iserisci il tuo nome</label>
                         <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci la parola da nome">
                          
                    </div>              
                    <div class="mb-3">
                        <label for="mail" class="form-label">inserisci la tua mail</label>
                        <input type="mail" class="form-control" id="mail" name="mail" placeholder="Inserisci la parola da nmail">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">inserisci la tua età</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Inserisci la parola da nmail">
                    </div> 
                    
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
                <h3>LA Lunghezza del nome è:</h3>
                <?php echo strlen($_GET['nome']);?>

               
            </div>
        </section>
     </main>
    
</body>
</html>
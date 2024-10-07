

<?php 
$_GET['nome']

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
                <form action="snack-palindroma.php" method="GET">
                    <div class="mb-3">
                         <label for="nome" class="form-label">Iserisci il tua parola</label>
                         <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci la tua parola">
                          
                    </div>              
                   
                    
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>

               
            </div>
        </section>
     </main>
    
</body>
</html>
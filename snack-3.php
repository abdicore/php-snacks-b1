<?php
 
 
        $teachers = [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
            ];
        $pm = [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
;
 
?>


<?php 

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
                <ul>
                    <?php foreach ($teachers as $teacher)?>
                    var_dump($teacher)
                    <li>
                    <?php echo $teacher['name']; ?>
                    </li>
                </ul>
               
            
               
            </div>
        </section>
     </main>
    
</body>
</html>
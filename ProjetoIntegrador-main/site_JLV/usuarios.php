<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
            <title>Yby</title>
            <link rel="icon" type ="image/x-icon" href="img/favicon.ico">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <link rel="stylesheet" type="text/css" href="css/styles.css">

    </head>
    <body>
        <?php include_once 'header.php';?>

        <br>

        <h3 class="light"> Usuários </h3>

        <div class="row">
            <div>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome: </th>
                            <th>Email: </th>
                            <th>Etnia: </th>                                                   
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php

                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }

                        require 'conexao.php';
                    
                        $sql="SELECT * FROM user";

                        $resultado= mysqli_query($connect,$sql);
                        
                        if (mysqli_num_rows($resultado)>0){
                            while($dados =mysqli_fetch_array($resultado)){
                                $_SESSION['id2'] = $dados['id_user'];

                                 
                                
                            ?>
                        <tr>
                            <td><?php echo $dados['nome'];?></td>
                            <td><?php echo $dados['email'];?></td>
                            <td><?php echo $dados['etnia'];?></td>
                            <td><a class='btn waves-effect waves-light' href="delete.php"> Delete</td>
                            // update not working keeps getting wrong id maybe while error idk
                            <td><a class='btn waves-effect waves-light' href="update.php?id=<?php echo $dados['id'];?>"> Update</td>
                        </tr>

                        

                        <?php
                                }
                            }
                            else{
                        ?>

                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
				        </tr>

                        <?php
                            }
                        ?>      
                    </tbody>            
                </table>                    
            </div>                     
        </div>

        <?php include_once 'footer.php';?>                        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

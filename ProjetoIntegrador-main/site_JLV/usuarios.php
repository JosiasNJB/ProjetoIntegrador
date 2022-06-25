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

        <br><br>

        <h3 class="light"> Usuários </h3>

        <br><br>

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
          
                            ?>
                        <tr>
                            <td><?php echo $dados['nome'];?></td>
                            <td><?php echo $dados['email'];?></td>
                            <td><?php echo $dados['etnia'];?></td>
                            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $dados['id_user'];?>"> Delete</td>

                            <td><a class="btn btn-success" href="update.php?id=<?php echo $dados['id_user'];?>"> Update</td>
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
        <br><br><br><br>

        <?php include_once 'footer.php';?>                        
    </body>
</html>

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
        <div class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="contato.php">Contato</a></li>
			<li><a href="depoimentos.php">Depoimentos</a></li>
			<li><a href="usuarios.php">Usuarios</a></li>
		</div>

        <div class="row">
            <div class="col s12 m6 push-m3 ">
                <h3 class="light"> Usuários </h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome: </th>
                            <th>Sobrenome: </th>
                            <th>Email: </th>
                            <th>Etnia: </th>                                                     
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php

                        require 'conexao.php';


                        $sql="SELECT * FROM user";

                        $resultado= mysqli_query($connect,$sql);
                        
                        if (mysqli_num_rows($resultado)>0){
                            while($dados =mysqli_fetch_array($resultado)){
                            ?>
                        <tr>
                            <td><?php echo $dados['nome'];?></td>
                            <td><?php echo $dados['sobrenome'];?></td>
                            <td><?php echo $dados['email'];?></td>
                            <td><?php echo $dados['etnia'];?></td>

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
    </body>
</html>
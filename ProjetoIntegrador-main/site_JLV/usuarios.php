
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
                            <td><a class="btn waves-effect waves-light red darken-4" href="delete.php?id=<?php echo $dados['id_user'];?>"> Delete</td>

                            <td><a class="btn waves-effect waves-light green accent-4" href="update.php?id=<?php echo $dados['id_user'];?>"> Update</td>
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
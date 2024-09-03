<?php
     include "conexao.php";
     $select = "SELECT * FROM professor ";
     $resultado = $conn->query($select);
     
?>
    <table border="1">
          <thead>
               <th>ID</th><th>nome</th><th>email</th>

          </thead>
          <tbody>
               <?php 
                    if($resultado->num_rows > 0){
                          while($professor=$resultado->fetch_object()){
                         echo "<tr>";
                              echo "<td>".$professor->id."</td>";
                              echo "<td>".$professor->nome."</td>";
                              echo "<td>".$professor->email."</td>";
                              
                              
                         echo "<td>";
                              echo "<a href= 'delete.php?id=$professor->id'>deletar</a>";
                              echo "<a href= 'editar.php?id=$professor->id'>editar</a>";

                         echo "</td>";
                    }
                         echo "</td>";
               }else{
                    echo"<tr><td>nenhum dado encontrado</td><tr>";
                }
               ?>

          </tbody>

<a href="inserir.php">< voltar</a>



    </table>
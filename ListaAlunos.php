<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atualiza Alunos</font></b>    
      </br> </br>   
     
     <table border = "1">
      <tr>
        <td><b>Nome</b></td>
        <td><b>Matricula</b></td>
        <td><b>CPF</b></td>
        <td><b>Telefone</b></td>
        <td><b>Editar</b></td>
     </tr>
      
       <?php
            include_once("conexao.php");

            $conn = conectaBD();

            $alunos = "SELECT * FROM aluno";
            $resultado = mysqli_query($conn,$alunos);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['matricula'];?></td>
                <td><?php echo $i['cpf'];?></td>
                <td><?php echo $i['telefone'];?></td>
                <td><a href="<?php echo"EditaAluno.php?nome=". $i['nome']."&matricula=".$i['matricula']."&cpf=".$i['cpf']."&telefone=".$i['telefone']?>">
                   Alterar</a></td>


             </tr> 
            <?php
           }
            ?>
     </table>
     

</BODY>
</HTML>
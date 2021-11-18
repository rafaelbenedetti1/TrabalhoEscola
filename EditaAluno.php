<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $c = filter_input(INPUT_GET, "nome");
      $n = filter_input(INPUT_GET, "matricula");
      $f = filter_input(INPUT_GET, "cpf");
      $g = filter_input(INPUT_GET, "telefone");

   ?>


   <b><font color="#0000FF">Tela de Edição de Alunos</font></b>    
      </br> </br>   

    <form action="RecuperaDadosEditaAluno.php" method="post">

      <b> Matrícula:</b> <input type="text" name="matricula" size="20" value="<?php echo $n?>" readonly>
      </br></br>

     <b> Nome:</b> <input type="text" name="nome" size="8" value="<?php echo $c?>">
       </br></br>  

    <b> CPF:</b> <input type="text" name="cpf" size="20" value="<?php echo $f?>">
           </br></br>

    <b> Telefone:</b> <input type="text" name="telefone" size="20" value="<?php echo $f?>">
       </br></br>

       </br></br>
    <input type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>
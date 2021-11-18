<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atribuir Disciplina ao Professor</font></b>    
      </br> </br>   

    <form action="RecuperaDadosProfessorDisciplina.php" method="post">

     <b> IdProfessor: </b> <input type="text" name="cod" size="8">
       </br></br>

     <b> Professor:</b>
     <select name="professores">
        <option value="0">Selecione</option>
         <?php
            include_once("conexao.php");

            $conn = conectaBD();

            $professores = "SELECT * FROM professor";
            $resultado = mysqli_query($conn,$professores);
            
            while($i = mysqli_fetch_assoc($resultado)){
         ?>
              <option value="<?php echo $i['codProfessor'];?>">
                           <?php echo $i['nome'];?>
              </option>
            
              <?php
            }
         ?>

      </select> 
      </br></br>


     <b> Disciplina:</b>
     <select name="disciplinas">
         <option value="0">Selecione</option>
          <?php
            include_once("conexao.php");

            $conn = conectaBD();

            $disciplinas = "SELECT * FROM disciplina";
            $resultado = mysqli_query($conn,$disciplinas);
            
            while($i = mysqli_fetch_assoc($resultado)){
         ?>
              <option value="<?php echo $i['codDisciplina'];?>">
                            <?php echo $i['nome'];?>
              </option>
            
              <?php
            }
          ?>

      </select> 
       </br></br>
    <input type="reset" value="Reset">   <input type="submit" value="Cadastrar">
   
   </form>

</BODY>
</HTML>
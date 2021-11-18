<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atribuir Disciplina à Turma</font></b>    
      </br> </br>   

    <form action="RecuperaDadosTurmaDisciplina.php" method="post">

     
    <b> Dia:</b> 
      <select name="dias">
         <option value="Segunda">Segunda</option>
         <option value="Terça">Terça</option>
         <option value="Quarta">Quarta</option>
         <option value="Quinta">Quinta</option>
         <option value="Sexta">Sexta</option>     
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


     <b> Turma:</b>
     <select name="turmas">
        <option value="0">Selecione</option>
          <?php
            include_once("conexao.php");

            $conn = conectaBD();

            $turmas = "SELECT * FROM turma";
            $resultado = mysqli_query($conn,$turmas);
            
            while($i = mysqli_fetch_assoc($resultado)){
         ?>
            <option value="<?php echo $i['codTurma'];?>">
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
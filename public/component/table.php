<hr>

<h4> Usuários Cadastrados </h4>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Usuários</th>
        <th>Senha</th>
    </tr>

    <?php
    
    $sqlUsuarios = "SELECT * FROM usuario";

    $resultadoUsuario = $conn -> query($sqlUsuarios);

    while($linha = $resultadoUsuario -> fetch_assoc()){
        echo"<tr>
        
        <td>".$linha["id"]."</td>
        <td>".$linha["nome"]."</td>
        <td>".$linha["senha"]."</td>

        </tr>";
    }
    
    
    ?>


</table>
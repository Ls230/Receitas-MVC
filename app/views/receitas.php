<html>
    <head>

    </head>

    <body>
    <button type='button' onClick="location.href='./novaReceita'">nova receita</button>
        <ul style="list-style-type: none;">
            <form method='post' action='receitas/detalhes' id="form">
                <input type='hidden' name='escolhido' value=''>
            <?php
                for ($i = 0; $i < count($list); $i++){
                echo "<li>
                        <input type='hidden' value='".$list[$i]['cod_receita']."'id='cod'>
                        <p style='cursor:pointer;'>".$list[$i]["nome_receita"]."</p>
                        <input type='hidden' value='".$list[$i]["categoria"]."' id='categoria'>
                </li>";
                }
            ?>

            </form>
        </ul>
<h2>filtro</filtro><br>

<select name='categoria' style="margin-top:20px; width: 175px;">
    <option value='bebidas'>Bebidas</option>
    <option value='lanches'>lanches</option>
    <option value='doces'>doces</option>
</select>

<button type = 'button' id='filtrar'>Filtrar</button>

</body>

<script src='../../public/javascript/receitas.js'></script>
</html>
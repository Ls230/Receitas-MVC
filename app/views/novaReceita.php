<form action = "novaReceita/create" method='post'>

<p>nome da receita:</p> <input type='text' name='nome'><br>

<p>ingredientes:</p>  <textarea name='ingredientes'></textarea><br>

<p>modo preparo:</p> <textarea name='preparo'></textarea><br>

<select name='categoria' style="margin-top:20px; width: 175px;">
    <option value='bebidas'>Bebidas</option>
    <option value='lanches'>lanches</option>
    <option value='doces'>doces</option>
</select><br>

<input type='submit' style="margin-top:10px; margin-left: 50px;">

</form>

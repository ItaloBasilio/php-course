<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="OK">


</form>

<?php

// bom para capturar dados do formulario
if(isset($_GET)){

    foreach ($_GET as $key => $value) {
    
        echo "nome do campo: ". $key . "<br/>";

        echo "valor do campo ". $value;

        echo "<hr/>";
    
    }

}


?>
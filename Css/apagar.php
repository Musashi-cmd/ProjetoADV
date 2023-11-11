menu.php

<div style="background-color: yellow">

<h1>AVBOX</h1>


<a href="login.php">login</a>
<a href="register.php">register</a>
<a href="registeradv.php">registro de advogado</a>
<br><br>

<?php

    include_once("rodape.php");


?>






login.php


    <div class="login">
        <h1>LOGIN</h1>
        <input type="text" placeholder="CPF OU EMAIL">
        <br><br>
        <input type="password" placeholder="SENHA">
        <br><br>
        <button>ENTRAR</button>
        <a href="register.php">REGISTRO</a>
        <a href="registeradv.php">REGISTRO DE ADVOGADOS</a>

    </div>








registroadv.php


<div class="registeradv">

<h1>REGISTRO DE ADVOGADOS</h1>
<input type="text" placeholder="NOME">
<BR><BR>
<input type="number" placeholder="CPF">
<BR><BR>
<input type="NUMBER" placeholder="NASCIMENTO">
<BR><BR>
<input type="number" placeholder="OAB">
<br><br>
<button>REGISTRAR</button>



</div>




register.php

<div class="register">

    <h1>REGISTRO</h1>
    <input type="text" placeholder="NOME COMPLETO">
    <br><br>
    <input typer="number" placeholder="CPF">
    <br><br>
    <input typer="number" placeholder="NASCIMENTO">
    <br><br>
    <input typer="password" placeholder="SENHA">
    <br><br>
    <button>registrar</button>




</div>





rodape.php







<h1>CONTATO</h1>
<P>CELL: (83) 991228516</p>
<P>TELEFONE: 3291-4156</p>
<p>EMAIL: ADS_UNIPE@GMAIL.COM</p>
<p>LOCALIZAÇÃO: BAIRRO DOS YPES, RUA JARDIM VARGAS, NÚMERO 510</p>
<?php
    
    include_once "./cabecalho.php";
    include_once "./menu.php";
?>

    <header>
        <h2 class="px-3">Amigões de estimação</h2>
    </header>
    <hr>
    <div class="principal">
        <section class="categorias">
            <h3 class="px-3">Categorias</h3>
            <ul>
                <li onclick="exibirTodos()">Todos (12)</li>
                <li onclick="exibirCategoria('Gato filhote')">Gatos filhotes (4)</li>
                <li onclick="exibirCategoria('Gato adulto')">Gatos adultos (4)</li>
                <li onclick="exibirCategoria('Cachorro filhote')">Cachorros filhotes (4)</li>
                <li onclick="exibirCategoria('Cachorro adulto')">Cachorros adultos (4)</li>
            </ul>
        </section>
        <div class="secundario container-fluid">
            <section class="produtos">

            <?php
    
                require_once "./db_connect.php";

                $sql = "SELECT * FROM produto";
               if ($resultado = mysqli_query($connect, $sql)){

                while($row=mysqli_fetch_assoc($resultado)){
            ?>

                <div class="estilop" id="<?php echo $row['categoria']; ?>">
                    <img src="<?php echo $row['imagem'];?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p class="descricao"><?php echo $row['categoria']; ?></p>
                    <hr>
                    <p class="descricao"><strike>R$ 500,00</strike></p><br>
                    <p class="preco text-success"><?php echo $row['preco']; ?></p><br>
                </div>
            <?php
                }
                            
            }
            ?>
            </section>

            
        </div>
    </div>
    
<?php
    include_once "./rodape.php";
?>
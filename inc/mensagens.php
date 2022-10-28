<?php 

$host = 'mysql-db.cbfpnvjdyeio.us-east-1.rds.amazonaws.com';
$user = 'admin';
$pass = 'FSJshqMQ1P1vVaaJV4XX';
$bd = 'AtividadeContinua05_AO';

$conn = mysqli_connect($host,$user,$pass,$bd);

$sql = "SELECT * FROM contato_formulario";
$result = $conn->query($sql);

?>

<?php include 'head.php'; ?>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <?php include 'preloader.php'; ?>
    <!-- end of preloader -->

    <!-- Navbar -->
    <?php include 'navbarhome.php'; ?>
    <!-- end of navbar -->


    <br><br><br><br><br>
    

    <div class="container">

        <h1 class="display-1" style="text-align:center">Mensagens recebidas</h1>

        <br><br>

        <div class="col-12" >
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagens</th>
                    </tr>
                </thead>
                <tbody>

                <?php while($resposta = $result->fetch_object()) {?>
                    <tr>
                        <td><?php echo $resposta->nome_completo ?></td>
                        <td><?php echo $resposta->email ?></td>
                        <td><?php echo $resposta->telefone ?></td>
                        <td><?php echo $resposta->assunto ?></td>
                        <td><?php echo $resposta->mensagem ?></td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <?php include 'scriptsJS.php'; ?>
    <!-- Scripts -->
</body>
</html>
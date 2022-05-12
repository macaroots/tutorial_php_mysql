<?php
if (isset($_GET['sql'])) {
    $sql = $_GET['sql'];
}
else {
    $sql = 'SELECT coluna FROM tabela';
}
if (isset($_GET['db'])) {
    $db = $_GET['db'];
}
else {
    $db = 'mysql:host=localhost;dbname=database';
}

$lista = array();
$erro = '';
if (isset($_POST['db'])) {
    $db = $_POST['db'];
}
if (isset($_POST['sql'])) {
    $sql = $_POST['sql'];
    $db = $_POST['db'];
    try {
        $user = $_ENV['MYSQL_USER'];
        $pass = $_ENV['MYSQL_PASSWORD'];
        /*$host = $_ENV['MYSQL_HOST'];
        $db = $_ENV['MYSQL_DATABASE'];*/
        $conexao = new PDO($db, $user, $pass);
        $consulta = $conexao->prepare($sql);
        if ($consulta->execute()) {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $lista[] = $linha;
            }
        }
    } catch (Exception $e) {
        $erro = $e->getMessage();
    }
}

?>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <form method="POST">
        <input type="reset">
        <div>
            $conexao = new PDO(<input name="db" size="50" value="<?php echo $db; ?>" />, $user, $pass);
        </div>
        <div>
            $consulta = $conexao->prepare(<input name="sql" size="50" value="<?php echo $sql; ?>" />);
        </div>
        <button>$consulta->execute()</button>
    </form>
    <section>
        <div><?php echo $erro; ?></div>
        <table>
            <tr>
<?php
if (!empty($lista)) {
    $bean = $lista[0];
    foreach ($bean as $coluna => $valor) {
?>
                <th><?php echo $coluna; ?></th>
<?php
    }
}
?>
            </tr>
<?php
foreach ($lista as $bean) {
?>
            <tr>
<?php
    foreach ($bean as $coluna => $valor) {
?>
                <td><?php echo $valor; ?></td>
<?php
    }
?>
            </tr>
<?php
}
?>
        </table>
    </section>
</body>
</html>

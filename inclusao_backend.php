<!-- Arquivo para receber os dados quando o primeiro acesso é feito, 
     considerando que o usuário não possui cadastro e irá se cadastrar 
     pela primeira vez.-->

<?php
$postograduacao = $_POST['postograduacao'];
$nomecompleto = $_POST['nome'];
$nomeguerra = $_POST['nome_guerra'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$fone01 = $_POST['fone01'];
$fone02 = $_POST['fone02'];
$email = $_POST['email'];
$familiar = $_POST['familiar'];
$contato_familiar = $_POST['contato_familiar'];
$login = $_POST['login'];
$login = $_POST['senha'];

$query = "INSERT INTO tbl_pessoa ('id_pessoa','nome_completo') VALUES (NULL,'".$nomecompleto."')";

$inserir = mysql_query($query);

if ($inserir) {
echo "Registro inserido com sucesso!";
} else {
echo "Não foi possível salvar os dados, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}

?>
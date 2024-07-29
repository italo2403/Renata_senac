<?php
$servername = "localhost"; // substitua pelo seu servidor
$username = "root"; // substitua pelo seu username
$password = ""; // substitua pelo seu password
$dbname = "avaliacao"; // substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Prepara e faz o bind dos parâmetros
$stmt = $conn->prepare("INSERT INTO avaliacoes (nome, email, turma,  docente_presenca, docente_pontualidade, docente_comunicacao, docente_dominio, docente_interesse, docente_interacao, docente_avaliacao, curso_needs, curso_temas, curso_carga, curso_relacao, material_suficiente, instalacoes_satisfatorias, coordenacao_presente, aluno_presenca, aluno_pontualidade, aluno_motivacao, aluno_participacao, aluno_aproveitamento, aluno_capacidade, comentarios, curso_origem) VALUES (?, ?,?,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Define os parâmetros e executa
$nome = $_POST['nome'];
$email = $_POST['email'];
$turma = isset($_POST['turma']) ? $_POST['turma'] : '';
$docente_presenca = isset($_POST['docente_presenca']) ? $_POST['docente_presenca'] : '';
$docente_pontualidade = isset($_POST['docente_pontualidade']) ? $_POST['docente_pontualidade'] : '';
$docente_comunicacao = isset($_POST['docente_comunicacao']) ? $_POST['docente_comunicacao'] : '';
$docente_dominio = isset($_POST['docente_dominio']) ? $_POST['docente_dominio'] : '';
$docente_interesse = isset($_POST['docente_interesse']) ? $_POST['docente_interesse'] : '';
$docente_interacao = isset($_POST['docente_interacao']) ? $_POST['docente_interacao'] : '';
$docente_avaliacao = isset($_POST['docente_avaliacao']) ? $_POST['docente_avaliacao'] : '';
$curso_needs = isset($_POST['curso_needs']) ? $_POST['curso_needs'] : '';
$curso_temas = isset($_POST['curso_temas']) ? $_POST['curso_temas'] : '';
$curso_carga = isset($_POST['curso_carga']) ? $_POST['curso_carga'] : '';
$curso_relacao = isset($_POST['curso_relacao']) ? $_POST['curso_relacao'] : '';
$material_suficiente = isset($_POST['material_suficiente']) ? $_POST['material_suficiente'] : '';
$instalacoes_satisfatorias = isset($_POST['instalacoes_satisfatorias']) ? $_POST['instalacoes_satisfatorias'] : '';
$coordenacao_presente = isset($_POST['coordenacao_presente']) ? $_POST['coordenacao_presente'] : '';
$aluno_presenca = isset($_POST['aluno_presenca']) ? $_POST['aluno_presenca'] : '';
$aluno_pontualidade = isset($_POST['aluno_pontualidade']) ? $_POST['aluno_pontualidade'] : '';
$aluno_motivacao = isset($_POST['aluno_motivacao']) ? $_POST['aluno_motivacao'] : '';
$aluno_participacao = isset($_POST['aluno_participacao']) ? $_POST['aluno_participacao'] : '';
$aluno_aproveitamento = isset($_POST['aluno_aproveitamento']) ? $_POST['aluno_aproveitamento'] : '';
$aluno_capacidade = isset($_POST['aluno_capacidade']) ? $_POST['aluno_capacidade'] : '';
$comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
$curso_origem = isset($_POST['curso_origem']) ? $_POST['curso_origem'] : '';

$stmt->bind_param("sssssssssssssssssssssssss", $nome, $email,$turma, $docente_presenca, $docente_pontualidade, $docente_comunicacao, $docente_dominio, $docente_interesse, $docente_interacao, $docente_avaliacao, $curso_needs, $curso_temas, $curso_carga, $curso_relacao, $material_suficiente, $instalacoes_satisfatorias, $coordenacao_presente, $aluno_presenca, $aluno_pontualidade, $aluno_motivacao, $aluno_participacao, $aluno_aproveitamento, $aluno_capacidade, $comentarios, $curso_origem);

$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();
?>
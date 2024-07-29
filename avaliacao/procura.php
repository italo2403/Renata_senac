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

// $search = $_GET['search'];

$sql = "SELECT * FROM avaliacoes WHERE nome LIKE ? OR turma LIKE ?";
$stmt = $conn->prepare($sql);
$likeSearch = "%" . $search . "%";
$hidden = $likeSearch;
$stmt->bind_param("ss", $likeSearch, $likeSearch);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Turma</th><th>Docente Presença</th><th>Docente Pontualidade</th><th>Docente Comunicação</th><th>Docente Domínio</th><th>Docente Interesse</th><th>Docente Interação</th><th>Docente Avaliação</th><th>Curso Needs</th><th>Curso Temas</th><th>Curso Carga</th><th>Curso Relação</th><th>Material Suficiente</th><th>Instalações Satisfatórias</th><th>Coordenação Presente</th><th>Aluno Presença</th><th>Aluno Pontualidade</th><th>Aluno Motivação</th><th>Aluno Participação</th><th>Aluno Aproveitamento</th><th>Aluno Capacidade</th><th>Comentários</th><th>Curso Origem</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["turma"] . "</td>";
        echo "<td>" . $row["docente_presenca"] . "</td>";
        echo "<td>" . $row["docente_pontualidade"] . "</td>";
        echo "<td>" . $row["docente_comunicacao"] . "</td>";
        echo "<td>" . $row["docente_dominio"] . "</td>";
        echo "<td>" . $row["docente_interesse"] . "</td>";
        echo "<td>" . $row["docente_interacao"] . "</td>";
        echo "<td>" . $row["docente_avaliacao"] . "</td>";
        echo "<td>" . $row["curso_needs"] . "</td>";
        echo "<td>" . $row["curso_temas"] . "</td>";
        echo "<td>" . $row["curso_carga"] . "</td>";
        echo "<td>" . $row["curso_relacao"] . "</td>";
        echo "<td>" . $row["material_suficiente"] . "</td>";
        echo "<td>" . $row["instalacoes_satisfatorias"] . "</td>";
        echo "<td>" . $row["coordenacao_presente"] . "</td>";
        echo "<td>" . $row["aluno_presenca"] . "</td>";
        echo "<td>" . $row["aluno_pontualidade"] . "</td>";
        echo "<td>" . $row["aluno_motivacao"] . "</td>";
        echo "<td>" . $row["aluno_participacao"] . "</td>";
        echo "<td>" . $row["aluno_aproveitamento"] . "</td>";
        echo "<td>" . $row["aluno_capacidade"] . "</td>";
        echo "<td>" . $row["comentarios"] . "</td>";
        echo "<td>" . $row["curso_origem"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$stmt->close();
$conn->close();
?>

<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "10101010";
$db = "aula_php";
//$usuario = "u596669773_FemSoftWeb";
//$senha = "5tBmBJO?|N@";
//$db = "u596669773_aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

// Check connection
//if (!$conexao) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//mysqli_close($conexao);


$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT ALUNOS_CURSOS.id_alunos_cursos, ALUNOS.nome_aluno, CURSOS.nome_curso 
			FROM ALUNOS, CURSOS, ALUNOS_CURSOS
			WHERE ALUNOS_CURSOS.id_aluno = ALUNOS.id_aluno
			AND ALUNOS_CURSOS.id_curso = CURSOS.id_curso";
			
$consulta_matriculas = mysqli_query($conexao, $query);

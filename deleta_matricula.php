<?php 

include 'db.php';

$id_alunos_cursos = $_GET['id_alunos_cursos'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE ID_ALUNO_CURSO = $id_alunos_cursos";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');

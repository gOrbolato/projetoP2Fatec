<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style-avaliacaoReavaliacao.css">
    <title>Avaliações</title>
</head>
<body>
    <header class="head">
        <h1>Sistema de Avaliação Educacional</h1>
        <section class="menu-right">
            <section class="dropdown">
                <p><a href="#">Aluno</a></p>
                <section class="dropdown-content">
                    <a href="perfil.html">Perfil</a> <!--Possível página futura-->
                    <a href="configuracoes.html">Configurações</a> <!--Possível página futura-->
                    <a href="login.php">Sair</a>
                </section>
            </section>
        </section>
    </header>

    <nav class="menu">
        <li><a href="#Cadastro">Cadastrar</a>
            <ul class="cadastro">
                <li><a href="cadastroInstituicao.php">Cadastrar Instituição</a></li>
                <li><a href="cadastrarCurso.php">Cadastrar Curso</a></li>
                <li><a href="cadastrarMateria.php">Cadastrar Matéria</a></li>
            </ul>
        </li>

        <li><a href="visualizacaoDados.html">Visualização</a></li>

        <li><a href="avaliacao.html">Avaliações</a></li>
        <li><a href="reavaliacao.html">Reavaliações</a></li>
    </nav>

    <main class="home-container">
        <h2>Avaliações</h2>

        <section class="avaliacao-container">
            <h3>
                <?php
                if ($etapa === 'instituicao') echo "Avaliar Instituição";
                elseif ($etapa === 'curso') echo "Avaliar Curso";
                elseif ($etapa === 'materia') echo "Avaliar Matéria";
                ?>
            </h3>

            <!-- Formulário dinâmico baseado na etapa -->
            <?php if ($etapa === 'instituicao'): ?>
            <form method="POST" action="script/avaliacao.php">
                <label for="instituicao">Selecione a Instituição</label>
                <select id="instituicao" name="instituicao" required>
                    <option value="">-- Escolha uma Instituição --</option>
                    <?php
                    $sql = "SELECT id, nome FROM instituicoes";
                    $resultado = mysqli_query($conexao, $sql);
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $linha['id'] . "'>" . $linha['nome'] . "</option>";
                    }
                    ?>
                </select>

                <label for="instituicao-nota">Avaliação (0 a 5 estrelas)</label>
                <div class="stars">
                    <input type="radio" id="instituicao-star1" name="instituicao_rating" value="1" required />
                    <label for="instituicao-star1">★</label>
                    <input type="radio" id="instituicao-star2" name="instituicao_rating" value="2" />
                    <label for="instituicao-star2">★</label>
                    <input type="radio" id="instituicao-star3" name="instituicao_rating" value="3" />
                    <label for="instituicao-star3">★</label>
                    <input type="radio" id="instituicao-star4" name="instituicao_rating" value="4" />
                    <label for="instituicao-star4">★</label>
                    <input type="radio" id="instituicao-star5" name="instituicao_rating" value="5" />
                    <label for="instituicao-star5">★</label>
                </div>

                <textarea id="instituicao-comentario" name="instituicao_comentario" placeholder="Deixe seu comentário" required></textarea>
                <button type="submit" name="instituicao_submit">Enviar Avaliação</button>
            </form>
            <?php elseif ($etapa === 'curso'): ?>
            <form method="POST" action="script/avaliacao.php">
                <label for="curso">Selecione o Curso</label>
                <select id="curso" name="curso" required>
                    <option value="">-- Escolha um Curso --</option>
                    <?php
                    $sql = "SELECT id, nome FROM cursos";
                    $resultado = mysqli_query($conexao, $sql);
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $linha['id'] . "'>" . $linha['nome'] . "</option>";
                    }
                    ?>
                </select>

                <label for="curso-nota">Avaliação (0 a 5 estrelas)</label>
                <div class="stars">
                    <input type="radio" id="curso-star1" name="curso_rating" value="1" required />
                    <label for="curso-star1">★</label>
                    <input type="radio" id="curso-star2" name="curso_rating" value="2" />
                    <label for="curso-star2">★</label>
                    <input type="radio" id="curso-star3" name="curso_rating" value="3" />
                    <label for="curso-star3">★</label>
                    <input type="radio" id="curso-star4" name="curso_rating" value="4" />
                    <label for="curso-star4">★</label>
                    <input type="radio" id="curso-star5" name="curso_rating" value="5" />
                    <label for="curso-star5">★</label>
                </div>

                <textarea id="curso-comentario" name="curso_comentario" placeholder="Deixe seu comentário" required></textarea>
                <button type="submit" name="curso_submit">Enviar Avaliação</button>
            </form>
            <?php elseif ($etapa === 'materia'): ?>
            <form method="POST" action="script/avaliacao.php">
                <label for="materia">Selecione a Matéria</label>
                <select id="materia" name="materia" required>
                    <option value="">-- Escolha uma Matéria --</option>
                    <?php
                    $sql = "SELECT id, nome FROM materias";
                    $resultado = mysqli_query($conexao, $sql);
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $linha['id'] . "'>" . $linha['nome'] . "</option>";
                    }
                    ?>
                </select>

                <label for="materia-nota">Avaliação (0 a 5 estrelas)</label>
                <div class="stars">
                    <input type="radio" id="materia-star1" name="materia_rating" value="1" required />
                    <label for="materia-star1">★</label>
                    <input type="radio" id="materia-star2" name="materia_rating" value="2" />
                    <label for="materia-star2">★</label>
                    <input type="radio" id="materia-star3" name="materia_rating" value="3" />
                    <label for="materia-star3">★</label>
                    <input type="radio" id="materia-star4" name="materia_rating" value="4" />
                    <label for="materia-star4">★</label>
                    <input type="radio" id="materia-star5" name="materia_rating" value="5" />
                    <label for="materia-star5">★</label>
                </div>

                <textarea id="materia-comentario" name="materia_comentario" placeholder="Deixe seu comentário" required></textarea>
                <button type="submit" name="materia_submit">Enviar Avaliação</button>
            </form>
            <?php endif; ?>
        </section>
    </main>

    <footer class="foot">
        <p>&copy; Direitos Acadêmicos reservados</p>
    </footer>
</body>
</html>
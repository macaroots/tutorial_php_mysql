<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>MySQL</title>
    
    <style>
    a {display:block;}
    code {
        background: lightgray;
        padding: 5px;
        display: block;
        width: fit-content;
        border-radius: 5px;
    }
    </style>
</head>
<body>
    <header id="topo">
        <h1>MySQL</h1>
        <a href="ouvidoria.html">Ouvidoria</a>
        <nav>
            <ol>
                <li><a href="#listar">Listar - SELECT</a></li>
                <li><a href="#filtrar">Filtrar - WHERE</a></li>
                <li><a href="#and">Duas condições - AND</a></li>
                <li><a href="#like">LIKE</a></li>
                <li><a href="#in">IN</a></li>
                <li><a href="#ordenar">Ordenar - ORDER BY</a></li>
                <li><a href="#limite">Limite e paginação - LIMIT</a></li>
                <li><a href="#distinct">Selecionar dados sem repetição - DISTINCT</a></li>
                <li><a href="#contagem">Contagem - COUNT</a></li>
                <li><a href="#join">Junção de tabelas - JOIN</a></li>
            </ol>
        </nav>
    </header>
    
    <h2>1. Listar - SELECT</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT * FROM produtos
        </code>
    </p>
    <p>Utilize <span class="code">*</span> para selecionar todas as colunas.</p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="listar" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela"></iframe>
    
    <h2>2. Filtrar - WHERE</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela WHERE condicao
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT * FROM produtos WHERE id_categoria=2
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="filtrar" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela WHERE condicao"></iframe>
    
    <h2>3. Duas condições - AND</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela WHERE condicao1 AND condicao2
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT * FROM produtos WHERE id_categoria=2 AND preco>100
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="and" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela WHERE condicao1 AND condicao2"></iframe>
    
    <h2>4. LIKE</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela WHERE coluna LIKE valor
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT * FROM produtos WHERE nome LIKE 'bola%'
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="like" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela WHERE coluna LIKE valor"></iframe>
    
    <h2>5. IN</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela WHERE coluna IN (valor1, valor2 ...)
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT * FROM produtos WHERE id IN (1, 3, 4)
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="in" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela WHERE coluna IN (valor1, valor2 ...)"></iframe>
    
    <h2>6. Ordenar - ORDER BY</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela ORDER BY colunas [ASC | DESC]
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT * FROM produtos ORDER BY id_categoria, preco DESC
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="ordenar" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela ORDER BY colunas [ASC | DESC]"></iframe>
    
    <h2>7. Limite e paginação - LIMIT</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela LIMIT [deslocamento,] limite
        </code>
    </p>
    <p>
        Exemplo, os 10 primeiros: 
        <code>
        SELECT * FROM produtos LIMIT 10
        </code>
    </p>
    <p>
        Para paginação, considere a fórmula: deslocamento = (numero da página - 1) * registros por página. Exemplo, 4ª página de 10 em 10:
        <code>
        SELECT * FROM produtos LIMIT 30, 10
        </code>
    </p>
    <p>
        <b>Desafio: </b>
        Selecionar registros da 3ª página com 2 registros por página.
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="limite" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela LIMIT [deslocamento,] limite"></iframe>
    
    <h2>8. Selecionar dados sem repetição - DISTINCT</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT DISTINCT(coluna) FROM tabela
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT DISTINCT(id_categoria) FROM produtos
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="distinct" width="100%" height="200" src="consulta.php?sql=SELECT DISTINCT(coluna) FROM tabela"></iframe>
    
    <h2>9. Contagem</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT COUNT(coluna) FROM tabela
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT COUNT(*) FROM produtos
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="contagem" width="100%" height="200" src="consulta.php?sql=SELECT COUNT(coluna) FROM tabela"></iframe>
    
    <h2>10. Junção de tabelas - JOIN</h2>
    <p>
        Sintaxe: 
        <code>
        SELECT colunas FROM tabela1 JOIN tabela2 ON tabela1.pk = tabela2.fk
        </code>
    </p>
    <p>
        Exemplo: 
        <code>
        SELECT p.nome as produto, c.nome as categoria FROM produtos p JOIN categorias c ON p.id_categoria = c.id
        </code>
    </p>
    <a href="#topo">Voltar ao topo</a>
    <iframe id="join" width="100%" height="200" src="consulta.php?sql=SELECT colunas FROM tabela1 t1 JOIN tabela2 t2 ON t1.pk=t2.fk"></iframe>

    <footer>
        <p>Copyright 2021 Renato</p>
    </footer>

</body>
</html>

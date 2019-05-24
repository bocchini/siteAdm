<h3 class="mb-5">Edição de páginas</h3>
<form action="" method="post">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input type="text" name="title" required id="pagesTitle" placeholder="Título da página" value="Página Inicial" class="form-control">
    </div>
    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input type="text" id="pagesUrl" name="url" class="form-control" placeholder="Url amigável, deixe em branco para informar a página inicial ...">
        </div>
    </div>

    <div class="from-group">
        <input type="hidden" name="body" id="pagesBody" value="Pagina Inicial" required>
        <trix-editor input="pagesBody"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>   
</form>
<hr>
<a href="/admin/pages" class="btn btn-secondary">Voltar</a>
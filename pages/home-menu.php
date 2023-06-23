<div id="main-home" class="fade show px-2" style="">
    <form id="carrousel-form" class="mb-2">
        <div class="border border-secondary-subtle bg-white p-2 rounded container-fluid">
            <h4 class="alert alert-dark p-2">Fotos do Slide da Home Page</h4>
            <div id="corrousel-row" class="col row row-cols-1 row-cols-sm-2">
                <div class="col col-sm-4 ">
                    <div id="img_preview_container">
                        <img id="img_preview1" src="" alt="" class="w-100 bg-dark-subtle rounded"
                            style="height: 120px; object-fit: cover;">
                    </div>
                    <label for="img_produto1" class="form-label btn btn-dark mt-2 w-100">Carregar
                        Foto 1</label>
                    <input type="file" name="img_produto1" id="img_produto1" style="visibility:hidden;">
                </div>
                <div class="col col-sm-4 ">
                    <div id="img_preview_container">
                        <img id="img_preview2" src="" alt="" class="w-100 bg-dark-subtle rounded"
                            style="height: 120px; object-fit: cover;">
                    </div>
                    <label for="img_produto2" class="form-label btn btn-dark mt-2 w-100">Carregar
                        Foto 2</label>
                    <input type="file" name="img_produto2" id="img_produto2" style="visibility:hidden;">
                </div>
                <div class="col col-sm-4 ">
                    <div id="img_preview_container">
                        <img id="img_preview3" src="" alt="" class="w-100 bg-dark-subtle rounded"
                            style="height: 120px; object-fit: cover;">
                    </div>
                    <label for="img_produto3" class="form-label btn btn-dark mt-2 w-100">Carregar
                        Foto 3</label>
                    <input type="file" name="img_produto3" id="img_produto3" style="visibility:hidden;">
                </div>
            </div>
            <div class="row container-fluid mx-auto p-0">
                <input type="button" value="Salvar Fotos Carrossel" class="btn btn-secondary">
            </div>
        </div>
    </form>
    <form id="card-form" class="mb-2">
        <div class="border border-secondary-subtle bg-white p-2 rounded container-fluid">
            <h4 class="alert alert-dark p-2">Trio de Cards da Home Page</h4>
            <div class="row row-cols-1 row-cols-sm-3 p-2">
                <div class="col col-sm-4">
                    <label for="img_card1" class="form-label">Imagem Card 1</label>
                    <input type="file" name="img_card1" id="img_card1" class="form-control">
                    <label for="titulo-card1" class="form-label">Titulo Card 1</label>
                    <input type="text" name="titulo-card1" id="titulo-card1" class="form-control">
                    <label for="texto-card1">Texto Card 1</label>
                    <input type="text" name="texto-card1" id="texto-card1" class="form-control">
                </div>
                <div class="col col-sm-4">
                    <label for="img_card2" class="form-label">Imagem Card 2</label>
                    <input type="file" name="img_card2" id="img_card2" class="form-control">
                    <label for="titulo-card2" class="form-label">Titulo Card 2</label>
                    <input type="text" name="titulo-card2" id="titulo-card2" class="form-control">
                    <label for="texto-card2">Texto Card 2</label>
                    <input type="text" name="texto-card2" id="texto-card2" class="form-control">
                </div>
                <div class="col col-sm-4">
                    <label for="img_card3" class="form-label">Imagem Card 3</label>
                    <input type="file" name="img_card3" id="img_card3" class="form-control">
                    <label for="titulo-card3" class="form-label">Titulo Card 3</label>
                    <input type="text" name="titulo-card3" id="titulo-card3" class="form-control">
                    <label for="texto-card3">Texto Card 3</label>
                    <input type="text" name="texto-card3" id="texto-card3" class="form-control">
                </div>
            </div>
            <div class="row container-fluid mx-auto p-0">
                <input type="button" value="Salvar Cards da Home" class="btn btn-secondary mt-2">
            </div>
        </div>
    </form>
    <form id="destaque-form" class="mb-2">
        <div class="border border-secondary-subtle bg-white p-2 rounded container-fluid">
            <h4 class="alert alert-dark p-2">Destaques da Home Page</h4>
            <div class="row row-cols-1 row-cols-sm-3 p-2">
                <div class="col col-sm-4">
                    <label for="img_destaque1" class="form-label">Imagem Destaque 1</label>
                    <input type="file" name="img_destaque1" id="img_destaque1" class="form-control">
                    <label for="titulo-destaque1" class="form-label mt-3">Titulo Destaque 1</label>
                    <input type="text" name="titulo-destaque1" id="titulo-destaque1" class="form-control">
                </div>
                <div class="col col-sm-8">
                    <label for="texto-destaque1" class="form-label">Texto Destaque 1</label>
                    <textarea type="text" name="texto-destaque1" id="texto-destaque1" class="form-control form-text" rows="4"></textarea>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-3 p-2">
                <div class="col col-sm-4">
                    <label for="img_destaque2" class="form-label mt-3">Imagem Destaque 2</label>
                    <input type="file" name="img_destaque2" id="img_destaque2" class="form-control">
                    <label for="titulo-destaque2" class="form-label mt-3">Titulo Destaque 2</label>
                    <input type="text" name="titulo-destaque2" id="titulo-destaque2" class="form-control ">
                </div>
                <div class="col col-sm-8">
                    <label for="texto-destaque2" class="form-label">Texto Destaque 2</label>
                    <textarea type="text" name="texto-destaque2" id="texto-destaque2" class="form-control form-text" rows="4"></textarea>
                </div>
            </div>
            <div class="row container-fluid mx-auto p-0">
                <input type="button" value="Salvar Destaques da Home" class="btn btn-secondary mt-2">
            </div>
        </div>
    </form>
</div>
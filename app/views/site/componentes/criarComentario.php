<form action="postIndividual/{id}/create" method="POST">
    <div>
        crie seu comentario
    </div>
    <div>
        conteudo:
        <input type="text" name="conteudo">
    </div>
        <input type="hidden" value="<?php $post->id?>" name="id_post">
    <div>
        <button type="submit">
            salva comentario
        </button>
    </div>
</form>
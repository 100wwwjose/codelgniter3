<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Titulo</label>
    <input type="input" name="title" /><br />

    <label for="title1">Autor</label>
    <input type="input" name="title1" /><br />

    <label for="text">Descripcion</label>
    <textarea name="text"></textarea><br />
        
    <input type="submit" name="submit" value="Crear noticia" />

</form>
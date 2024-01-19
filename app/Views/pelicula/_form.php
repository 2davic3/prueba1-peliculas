<label for="Titulo">Titulo</label>
<input type="text" name="Titulo" placeholder="Titulo" id="Titulo" value="<?php echo $pelicula['titulo']; ?>">

<label for="Descripcion">Descripcion</label>
<textarea name="Descripcion" id="Descripcion" >
    <?php echo $pelicula['descripcion']; ?>
</textarea>
<button type="submit"><?php echo $op ; ?></button>
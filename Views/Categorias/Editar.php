<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6 m-auto">
                    <form method="post" action="<?php echo base_url(); ?>Categorias/actualizar" autocomplete="off" id="form">
                        <div class="card-header bg-dark">
                            <h6 class="title text-white text-center">Modificar Categoria</46>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="codigo">Código de barras</label>
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="codigo" class="form-control" type="text" name="codigo" value="<?php echo $data['codigo']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Categoria</label>
                                <input id="nombre" class="form-control" type="text" name="categoria" value="<?php echo $data['categoria']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="estado-select">Estado</label>
                                        <select name="estado" class="form-control" id="estado-select">
                                            <option value="">--Opciones--</option>
                                            <option class="bg-primary text-dark fw-semibold" value="activo">Activo</option>
                                            <option class="bg-primary text-dark fw-semibold" value="inactivo">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-dark" type="submit">Modificar</button>
                            <a href="<?php echo base_url(); ?>Categorias/Listar" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php pie() ?>
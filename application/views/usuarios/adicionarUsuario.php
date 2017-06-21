<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Registro de Empleado</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">'.$custom_error.'</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formUsuario" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nome" class="control-label">Nombres<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nome" type="text" name="nome" value="<?php echo set_value('nome'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="rua" class="control-label">Apellidos<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value="<?php echo set_value('rua'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="rg" class="control-label">Número de Identificación<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rg" type="text" name="rg" value="<?php echo set_value('rg'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Número de Teléfono<span class="required">*</span></label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="senha" class="control-label">Contraseña<span class="required">*</span></label>
                        <div class="controls">
                            <input id="senha" type="password" name="senha" value="<?php echo set_value('senha'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Estado*</label>
                        <div class="controls">
                            <select name="situacao" id="situacao">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Permisos<span class="required">*</span></label>
                        <div class="controls">
                            <select name="permissoes_id" id="permissoes_id">
                                  <?php foreach ($permissoes as $p) {
                                      echo '<option value="'.$p->idPermissao.'">'.$p->nome.'</option>';
                                  }?>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                                <a href="<?php echo base_url() ?>index.php/usuarios" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script  src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formUsuario').validate({
            rules : {
                  nome:{ required: true},
                  rg:{ required: true},
                  senha:{ re quired: true},
                  rua:{ required: true},
                  celular:{ required: true}
            },
            messages: {
                  nome :{ required: 'Campo Requerido.'},
                  rg:{ required: 'Campo Requerido.'},
                  senha:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  celular:{ required: 'Campo Requerido.'}
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });

      });
</script>

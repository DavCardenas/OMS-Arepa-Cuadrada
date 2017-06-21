<a href="<?php echo base_url()?>index.php/usuarios/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Empleado</a>
<?php
if(!$results){?>
        <div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
        </span>
        <h5>Empleados</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Número de Identificación</th>
            <th>Número de Teléfono</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="5">Ningún Empleado Encontrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>


<?php } else{?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
         </span>
        <h5>Empleados</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
          <th>#</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Número de Identificación</th>
          <th>Roll</th>
          <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {

            echo '<tr>';
            echo '<td>'.$r->idUsuarios.'</td>';
            echo '<td>'.$r->nome.'</td>';
            echo '<td>'.$r->rua.'</td>';
            echo '<td>'.$r->rg.'</td>';
            echo '<td>'.$r->permissao.'</td>';
            echo '<td>
                      <a href="'.base_url().'index.php/usuarios/editar/'.$r->idUsuarios.'" class="btn btn-info tip-top" title="Editar Usuario"><i class="icon-pencil icon-white"></i></a>
                  </td>';
            echo '</tr>';
        }?>
        <tr>

        </tr>
    </tbody>
</table>
</div>
</div>


<?php echo $this->pagination->create_links();}?>

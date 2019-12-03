<div class="modal modal-danger fade" id="modal-danger-{{$cts->nombre_taller}}">
    {{Form::Open(array('action'=>array('Postulante\CursoTallerSeminarioController@destroy',$cts->nombre_taller),'method'=>'delete'))}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Eliminar Taller, Curso, Seminario</h4>
        </div>
        <div class="modal-body">
          <p>Desea eliminar este elemento?&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline">Eliminar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    {{Form::Close()}}
</div>
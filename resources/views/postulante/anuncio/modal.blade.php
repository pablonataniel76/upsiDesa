
{!!Form::open(array('url'=>'candidato/postulaciones','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="modal modal-success fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"  >POSTULAR A ESTE EMPLEO</h4>
              <input type="hidden" name="id_anuncio" class="form-control" value="{{$anuncio->id_anuncio}}" >
              
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label>Seleccionar Curriculo para Postular</label>
                        <select name="id_curriculo" class="form-control">
                            <option selected="selected">Seleccionar id de Curriculo</option>
                            @foreach ($curriculos as $cu)
                                <option>{{$cu->id_curriculo}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-outline">Postular</button>
            </div>
          </div>
         
        </div>
      
</div>
{!! Form::close() !!}


     
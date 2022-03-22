@include('Frontend.Welcomex.Welcomex.Datatable.adicional')
<div class="modal fade" id="modal-primary" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Impactos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>IMPACTO</th>
              <th>NIVEL</th>
              <th>VALOR</th>
            </tr>  
          </thead>
          <tbody id="impactos">
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-probabil" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Probabilidades</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>PROBABILIDAD</th>
              <th>NIVEL</th>
              <th>VALOR</th>
            </tr>  
          </thead>
          <tbody id="probabil">
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <?php $tablasxx = $todoxxxx['tablasxx']; ?>
    <div class="col-md-6">
        @component($tablasxx[0]['archdttb'], ['todoxxxx' => $tablasxx[0]])
            @slot('tableName')
                {{ $tablasxx[0]['tablaxxx'] }}
            @endslot
            @slot('cuerpoxx')
            cuerpoxx
          @endslot
            @slot('class')
            @endslot
        @endcomponent
    </div>
    <div class="col-md-6">
      @component($tablasxx[1]['archdttb'], ['todoxxxx' => $tablasxx[1]])
          @slot('tableName')
              {{ $tablasxx[1]['tablaxxx'] }}
          @endslot
          @slot('cuerpoxx')
          cuervuln
          @endslot
          @slot('class')
          @endslot
      @endcomponent
  </div>
</div>

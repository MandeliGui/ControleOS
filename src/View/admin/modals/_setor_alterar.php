<div class="modal fade" id="modal_setor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Setor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Novo Setor</label>
                <input type="hidden" name="id_alt" id="id_alt">
                <input type="text" class="form-control obg-m" name="nome_alt" id="nome_alt" placeholder="digite aqui...">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" name="btn_alterar" id="btn_alterar" onclick="return AlterarSetor('form_alt')">Alterar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
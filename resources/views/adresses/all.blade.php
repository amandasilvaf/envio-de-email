<div class="card card-custom gutter-b">
    <div class="card-header">
        <h3 class="card-title">Endereços</h3>
        <div class="card-toolbar">
            <button onClick="novoEndereco()" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                </span>Novo endereço</button>
            </div>
    </div>
    <div class="card-body">
        <div class="row">
            
            <div class="card card-custom bg-success">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-labe">Tipo endereço</h3>
                    </div>
                </div>
                <div class="card-body">
                    
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="#" class="btn btn-outline-secondary font-weight-bold">Visualizar</a>
                    <a href="#" class="btn btn-outline-secondary font-weight-bold">Editar</a>
                    <a href="#" class="btn btn-outline-danger font-weight-bold">Excluir</a>
                </div>
            </div>
           
        </div>  
    </div>
</div>



<div class="modal" tabindex="-1" role="dialog" id="modalEnderecos">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo endereço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="id" class="form-control">

                <div class="form-group">
                    <label for="tipo" class="control-lable">Tipo</label>
                    <div class="input-group">
                        <select class="form-control" id="tipo"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="logradouro" class="control-lable">Logradouro</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="logradouro">
                    </div>
                </div>
                <div class="form-group">
                    <label for="numero" class="control-lable">Número</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="numero">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cep" class="control-lable">CEP</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cep">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bairro" class="control-lable">Bairro</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="bairro">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cidade" class="control-lable">Cidade</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cidade">
                    </div>
                </div>
                <div class="form-group">
                    <label for="estado" class="control-lable">Estado</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="estado">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
                <button type="submit" class="btn btn-success m-5">Salvar</button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            }
        });

        function novoEndereco(){
            $('#id').val('');
            $('#logradouro').val('');
            $('#numero').val('');
            $('#cep').val('');
            $('#bairro').val('');
            $('#cidade').val('');
            $('#estado').val('');
            $('#modalEnderecos').modal('show');
        }

        

    </script>
@endsection
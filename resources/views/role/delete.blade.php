<div class="modal fade" id="modal-eliminar-{{ $reg->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <form action="{{ route('roles.destroy', $reg->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-header">
                    <h4 class="modal-title" id="modalEliminarLabel">Eliminar Registro</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    ¿Está seguro que desea eliminar el registro <strong>{{ $reg->name }}</strong>?
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-light">Eliminar</button>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<<<<<<< HEAD
<div class="modal" id="modal-eliminar-{{$reg->id}}" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content bg-danger text-white">
            <form action="{{route('usuarios.destroy', $reg->id)}}" method="post">
                @csrf
                 @method('DELETE')
=======
<div class="modal" id="modal-eliminar-01" role="dialog" aria-labelledby="exapleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <form action="" method="post">
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
                <div class="modal-header">
                    <h4>Eliminar registro</h4>
                </div>
                <div class="modal-body">
<<<<<<< HEAD
                    <p>¿Está seguro de eliminar este registro de {{$reg->name}}?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-light">Eliminar</button>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
=======
                    ¿Usted desea eliminar el registro xyz?
                </div>
                <div class="modal-footer">
                    <button type="sudmit" class="btn btn-outline-light">Eliminar</button>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>

                </div>
            </form>


        </div>
    </div>

>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
</div>
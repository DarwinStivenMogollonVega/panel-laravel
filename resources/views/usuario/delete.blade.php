<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<div class="modal" id="modal-eliminar-01" role="dialog" aria-labelledby="exampleModalLabel">
=======
<div class="modal" id="modal-eliminar-{{$reg->id}}" role="dialog" aria-labelledby="exampleModalLabel">
>>>>>>> c34d9cb (Se agrego el modulo o la funcion de delete)
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <form action="{{route('usuarios.destroy', $reg->id)}}" method="post">
                @csrf
                @method('DELETE')

>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
                <div class="modal-header">
                    <h4>Eliminar registro</h4>
                </div>

                <div class="modal-body">
<<<<<<< HEAD
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
=======
                    ¿Usted desea eliminar el registro de {{$reg->name}}?
>>>>>>> c34d9cb (Se agrego el modulo o la funcion de delete)
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-light">Eliminar</button>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </form>
        </div>
    </div>
<<<<<<< HEAD

>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
</div>
=======
</div>
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)

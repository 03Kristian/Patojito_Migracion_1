@extends('Template.template')
@section('plantillaweb')
    <div class="container justify-center">
        <form action="{{route('Mall.store')}}" method="post">
            {{ csrf_field() }}
        <div class="row g-2">
            <br><br><br><br>
            <h2 align="center" style="color: aqua">Registro centro comercial</h2>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="nombre" id="floatingInputGrid" placeholder="name@example.com"
                        value="">
                    <label for="floatingInputGrid">Nombre del Centro Comercial</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" name="estado" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>Elija una opcion</option>
                        {{-- @foreach ($estado as $estado)
                            <option value="{{$estado->estado}}">{{$estado->}}</option>
                        @endforeach --}}
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                    <label for="floatingSelectGrid">Este campo es obligatorio</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="direccion" id="floatingInput" placeholder="Calle **">
                <label for="floatingInput">Dirección</label>
              </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    </div>
@endsection

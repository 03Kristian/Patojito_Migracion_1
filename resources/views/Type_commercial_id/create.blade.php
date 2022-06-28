@extends('Template.template')
@section('plantillaweb')
<br><br>
    <div class="container justify-center">
        <form action="{{route('Type_commercial_id.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row g-2">
                <br><br><br><br>
                <h2 align="center" style="color: rgb(0, 98, 255)">Crear idenficacion comercial</h2>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="tipo_comercial" id="floatingInputGrid" placeholder="name@example.com"
                            value="">
                        <label for="floatingInputGrid">Tipo Comercial</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">

                        <input class="form-control" type="text" name="tipo_identificacion" id="floatingSelectGrid" aria-label="Floating label select example">
                       
                        <label for="floatingSelectGrid">Este campo es obligatorio</label>
                    </div>

                </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
                
        </form>
    </div>
@endsection
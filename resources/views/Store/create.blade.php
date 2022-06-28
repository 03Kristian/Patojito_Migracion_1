@extends('Template.template')
@section('plantillaweb')
    <br><br><br><br>
    <div class="container justify-center">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="number" name="" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                    <label for="floatingInputGrid">Identificacion Comercial</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select name="" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                      {{-- <option selected>Open this select menu</option> --}}
                      
                      @foreach ($commercial_id as $comm)
                        <option value="{{$comm->id}}">{{$comm->tipo_identificacion_comercial}}</option>
                      @endforeach
                      
                    </select>
                    <label for="floatingSelectGrid">Selecciones un opcion</label>
                  </div>
                </div>
              </div>
        </form>
    </div>
@endsection
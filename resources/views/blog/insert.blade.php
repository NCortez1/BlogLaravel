<x-header/>
   
<?
    $col_l = 3;
    $col_i = 8;
?>

<form class="form" method="post" id="form" action="{{ route('blog.create') }}">
    @csrf
    <div class="row">
        <div class="col-sm-8 offset-md-2" style="text-align: right;">
            <h3 style="text-align: center;">Nuevo Blog</h3>
            <br>

            @error('message')
                <div id="error" class="alert alert-danger" role="alert" style="text-align:left;">{{ $message }}</div>
            @enderror

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>" for="titulo">Titulo</label>
                <div class="col-sm-<?=$col_i?>" >
                    <input type="text" class="form-control" id="titulo" name="titulo" maxlength="50" placeholder="Usuario" required>
                    <br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>" for="descripcion">Descripcion</label>
                <div class="col-sm-<?=$col_i?>" >
                    <input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="50" placeholder="Email" required>
                    <br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>" for="visibility">Visibilidad</label>
                <div class="col-sm-<?=$col_i?>" >
                    <select class="form-control" id="visibility" name="visibility">
                        <option value="2" selected>Visible</option>
                        <option value="1">No Visible</option>
                    </select>
                <br>
                <br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>"></label>
                <div class="form-group row col-sm-<?=$col_i?>">
                    <div class="col-sm-5">
                        <button type="submit" class="col-sm-12 btn btn-success">Publicar</button>
                    </div>
                    <div class="col-sm-5 offset-md-2">
                        <button type="button" onclick="location.href = '{{ route('main') }}';" class="col-sm-12 btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </div>

        </div>
            
    </div>
</form>

<x-footer/>
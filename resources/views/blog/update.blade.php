<x-header/>
   
<?
    $col_l = 3;
    $col_i = 8;
?>

<form class="form" method="post" id="form" action="{{ route('blog.update') }}">
    @csrf
    <div class="row">
        <div class="col-sm-8 offset-md-2" style="text-align: right;">
            <h3 style="text-align: center;">Nuevo Blog</h3>
            <br>

            @error('message')
                <div id="error" class="alert alert-danger" role="alert" style="text-align:left;">{{ $message }}</div>
            @enderror

            <input type="hidden" class="form-control" id="id" name="id" value="{{$blog->id}}">

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>" for="titulo">Titulo</label>
                <div class="col-sm-<?=$col_i?>" >
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$blog->titulo}}" maxlength="50" placeholder="Usuario" required>
                    <br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>" for="descripcion">Descripcion</label>
                <div class="col-sm-<?=$col_i?>" >
                    <textarea class="form-control" rows="10" id="descripcion" name="descripcion" maxlength="255" placeholder="descripcion" required>{{$blog->descripcion}}</textarea>
                    <br>
                </div>
            </div>

            @if (auth()->user()->rol_id == 1)
                <div class="form-group row">
                    <label class="col-sm-<?=$col_l?>" for="visibility">Visibilidad</label>
                    <div class="col-sm-<?=$col_i?>" >
                        <select class="form-control" id="visibility" name="visibility">
                            <option value="1" {{ ($blog->visibility == 1)? 'selected': '' }}>Visible</option>
                            <option value="0" {{ ($blog->visibility == 0)? 'selected': '' }}>No Visible</option>
                        </select>
                    <br>
                    <br>
                    </div>
                </div>
            @endif

            <div class="form-group row">
                <label class="col-sm-<?=$col_l?>"></label>
                <div class="form-group row col-sm-<?=$col_i?>">
                    <div class="col-sm-5">
                        <button type="submit" class="col-sm-12 btn btn-success">Guardar</button>
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
<x-header/>

<div class="col-sm-2 text-right">
    <button class="btn btn-primary" id="btn_agregar" name="btn_agregar" onclick="location.href ='{{ route('blog.create_view') }}';"
         data-toggle="tooltip" data-placement="top" title="agregar">
        Nuevo Blog
    </button>
</div>

<br>
<br>

@foreach ($blogs as $blog)

    <h4 class="card-header m-0 p-1">{{ $blog->titulo }}</h4>
    <div class="card" style="text-align:left;">
        <div class="card-body m-0 p-2">
            <div class="row m-0 p-0">
                <h5 class="card-title col-sm-11">{{ $blog->descripcion }}</h5>
                <button class="btn btn-primary col-sm-1" title="editar" onclick="location.href ='{{ route('blog.update') . '/' . $blog->id }}';">
                    Editar
                </button>
            </div>
        </div>
    </div>
    <br>

@endforeach

<x-footer/>
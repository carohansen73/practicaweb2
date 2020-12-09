
<form action="postciudad" method="POST" class="my-4">
    <div class=" mx-auto">
        <div class="col-9 ">
            <div class="form-group w-50">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        
        <div class="form-group w-50">
            <label>zonaRiesgo</label>
            <textarea name="zonariesgo" class="form-control" rows="3"></textarea>
        </div>
        
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

 {if $error}
        <div class="alert alert-primary">
            {$error}
        </div>
    {/if}

       
        <ul>
        {foreach from=$ciudades item= $ciudad}
            <li>{$ciudad->id} {$ciudad->nombre_ciudad} {$ciudad->zona_riesgo}</li>
        {/foreach} 
        </ul>
        
        
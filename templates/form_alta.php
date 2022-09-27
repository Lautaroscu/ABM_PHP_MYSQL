<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Título</label>
                <input name="title" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Valoracion</label>
                <select name="valoration" class="form-control">
                    <option value="0">Buena!</option>
                    <option value="1">Regular</option>
                    <option value="2">Mala :(</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Opinion</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
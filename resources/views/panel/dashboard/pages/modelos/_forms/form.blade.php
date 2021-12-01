<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Escolha marca</label>
            {!! Form::select('marca_id', $marca, $data->marca_id ?? old('marca_id'), ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" class="form-control" name="name" value="{{$data->name ??old('name')}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Referência</label>
            <input type="text" class="form-control" name="ref" value="{{$data->ref ??old('ref')}}">
        </div>
    </div>
</div>
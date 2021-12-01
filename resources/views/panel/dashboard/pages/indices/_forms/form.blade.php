<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="title" value="{{$data->title ??old('title')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <div class="form-group">
                <label for="">Conteúdo</label>
                <textarea name="content" class="form-control" id="edit">{{$data->content ?? old('content')}}</textarea>
            </div>
    </div>
</div>
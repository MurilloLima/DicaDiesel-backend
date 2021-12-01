<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="title" value="{{$item->title ?? old('title')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <div class="form-group">
                <label for="">Conteúdo</label>
                <textarea name="content" class="form-control" id="edit">{{$item->content ?? old('content')}}</textarea>
            </div>
    </div>
</div>
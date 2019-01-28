<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', $data['product'], ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('img', 'Image:') !!}
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
    </div>

    {{--<div class="form-group">--}}
        {{--<label for="attributes">Attributes:</label>--}}
        {{--<select name="attributes[]" id="attributes" class="form-control" multiple>--}}
            {{--@forelse($data['attributes'] as $attribute)--}}
                {{--<option value="{{ $attribute->id }}"--}}
                        {{--@if($attribute->selected)--}}
                        {{--selected--}}
                        {{--@endif--}}
                {{-->--}}
                    {{--{{ $attribute->title }}--}}
                {{--</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}
    {{--</div>--}}
</div>

<div class="form-group col-xs-12">
    <input type="submit" value="save" class="btn btn-primary">
</div>
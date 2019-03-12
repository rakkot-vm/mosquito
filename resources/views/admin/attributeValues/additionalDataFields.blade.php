
<div class="col-xs-12 col-xs-6 additional-item">
    <hr>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
            @if($action == "Save")
                {!! Form::label('additional['. $id .']', 'ID *:') !!}
                {!! Form::text('additional['. $id .']', $id, ['class' => 'form-control additional-id']) !!}
            @else
            <p><strong>Additional ID: </strong></p>
            <p>{{$id}}</p>
            @endif
            </div>
        </div>

        <div class="col-xs-2">
            <button type="button" class="btn btn-block btn-danger btn-xs delete-additional">
                <i class="fa fa-trash-o"></i>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                {!! Form::label('additional['. $id .'][title]', 'Title *:') !!}
                {!! Form::text('additional['. $id .'][title]', $value['title'], ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                {!! Form::label('additional['. $id .'][value]', 'Value:') !!}
                {!! Form::text('additional['. $id .'][value]', $value['value'], ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
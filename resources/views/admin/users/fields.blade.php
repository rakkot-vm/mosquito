<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">

            <div class="col-xs-12 col-lg-4">
                {!! Form::hidden('id', null, ['class' => 'form-control']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name *:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email *:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role', 'Role:') !!}
                    {{ Form::select('roles[]', $roles, $userRoles, ['multiple '=> 'multiple','class' => 'form-control'] ) }}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password *:') !!}
                    {!! Form::password('password', [null, 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">

                <a href="{{ route('users.index') }}" class="btn btn-success">Cancel</a>
            </div>
        </div>

    </div>
</div>
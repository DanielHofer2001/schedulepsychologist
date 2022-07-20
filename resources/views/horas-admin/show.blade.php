@extends('layouts.app')

@section('template_title')
    {{ $horasAdmin->name ?? 'Show Horas Admin' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horas Admin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horas-admins.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $horasAdmin->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $horasAdmin->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Final:</strong>
                            {{ $horasAdmin->fecha_final }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

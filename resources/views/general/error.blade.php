@extends('layouts.app')
<div class="container">
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <br>
        @if($mensaje)
            {{$mensaje}}
        @else
             Lo sentimos pero ocurrio un error imprevisto.
        @endif
    </div>

        <td class="text-center">
            <a href='{{url()->previous()}}' class="btn btn-default">
                Regresar
            </a>
        </td>
</div>


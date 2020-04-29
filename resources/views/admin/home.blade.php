@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pb-4 clearfix">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModalCenter">
                Precisa de Ajuda, {{\Illuminate\Support\Facades\Auth::user()->name}}?
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Contato para suporte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Renan Abraham<br>
                            @renanabraham<br><br>

                            E-mail: renanabraham@gmail.com<br>
                            Whatspp: 55 51 991341684
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Obrigado!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.category.list')
        @include('admin.service.list')
        @include('admin.addr.list')
    </div>
@endsection

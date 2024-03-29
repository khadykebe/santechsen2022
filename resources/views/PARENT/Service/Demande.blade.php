@extends('admin')
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> Listes des Profil </strong></h5>
                            <div class="pull-right m-t-n-xs">
                               
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id </th>
                                            <th>nom service</th>
                                            <th>nom client</th>
                                            <th>prenom client</th>
                                            <th>email client</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($demandeClent ?? false)
                                            @foreach ($demandeClent as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->nomService }}</td>
                                                    <td>{{ $item->nomclient }}</td>
                                                    <td>{{ $item->prenomclient}}</td>
                                                    <td>{{ $item->emailClient }}</td>
                                                    <td>
                                                        <button data-toggle="modal" type="button" class="btn btn-warning"
                                                            href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                                        <button type="submit" class="btn btn-danger" id="delete"
                                                            href="{{ route('delete.demande',$item->id) }}"><i
                                                                class="fa fa-trash"></i></button>
                                                        <button type="button" data-toggle="modal"class="btn btn-primary"
                                                            href="#modal-formchow"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

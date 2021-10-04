@extends('base')

@section('mytitle', '| Dashboard')

@section('content')

@include('partials.info_msg')

@include('partials.create')
    <h1 class="font-weight-light text-white"><i class="fas fa-th-large"></i> Dashboard</h1>
    <div class="container bg-white p-3 rounded dashcon mb-3">
        <div class="float-right mt-3">
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#createItemModal">
                <i class="fa fa-plus" aria-hidden="true"></i> New Item
            </button>
        </div>
        <h1 class="mt-3">List of Items</h1>

        <table id="mydatatable" class="table table-bordered table-striped table-sm">
            <thead class="theadstyle">
                <th>ID#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach($items as $i)
        
                <tr class="data-row">
                    <td><span class="badge badge-info p-2">{{$i->id}}</span></td>
                    <td class="name">{{$i->name}}</td>
                    <td class="description">{{$i->description}}</td>
                    <td class="price">{{$i->price}}</td>
                    <td class="quantity">{{$i->quantity}}</td>
                    <td class="text-center" style="font-size: 1em; width: 100px;">
                        <button class="btn btn-outline-primary" id="edit-item" data-item-id="{{$i->id}}" ><i class="fas fa-edit"></i></button>
                        <button class="btn btn-outline-danger" id="delete-item" data-item-id="{{$i->id}}"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
        
                @endforeach
            </tbody>
        </table>  
        @include('partials.edit')
        @include('partials.delete')
        @include('partials.logs')
    </div>
@endsection
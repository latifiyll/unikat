@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if($products->count() == 0)
            <div class="alert alert-danger" role="alert">
                Nuk keni produkte të regjistruara.<br>
                Për të shtuar një produkt të ri kliko këtu. <br> <br>
            <a href="{{url("products/create")}}"><button class="btn btn-success">Shto Produkt</button></a>
            </div>
            @else
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">produktet</h3>
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Kërko produkte" />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">

                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>

                            </div>
                        <div class="table-data__tool-right">
                            <div class="rs-select2--light rs-select2--md">
                                <a href="{{url('cart')}}"><button class="au-btn-filter">
                                        <i class="fas fa-shopping-cart"></i>
                                        Shporta @if(count((array) session('cart')) == 0)  @else <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span> @endif
                                    </button></a>
                            </div>
                        <a href="{{url('products/create')}}"> <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Shto Produkt</button></a>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>emri</th>
                                    <th>përshkrimi</th>
                                    <th>Kategoria</th>
                                    <th>Tipi</th>
                                    <th>Cmimi</th>
                                    <th>Sasia në stok</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)

                                <tr class="tr-shadow  @if($product->quantity <= 5 && $product->quantity > 0)  alert-warning
                                    @elseif($product->quantity == 0)  alert-danger @endif">
                                    @if ($product->quantity != 0)
                                       <td>
                                        <label class="au-checkbox">
                                            <a href="{{ url('add-to-cart/'.$product->id) }}"><input type="checkbox">
                                            <span class="au-checkmark"></span></a>
                                        </label>
                                    </td>
                                    @else
                                    <td></td>
                                    @endif

                                <td>{{$product->name}}</td>
                                    <td class="desc">
                                        {{$product->description}}
                                    </td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->type->name}}</td>
                                    <td>{{$product->price}}</td>
                                    @if ($product->quantity <= 5)
                                    <td>
                                        <span class="status--denied">{{$product->quantity}}</span>
                                    </td>
                                    @else
                                        <td>
                                            <span class="status--process">{{$product->quantity}}</span>
                                        </td>
                                    @endif
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Shiko më shumë">
                                            <a href="{{url("/products/$product->id")}}"><i class="zmdi zmdi-mail-send"></i></a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Përditëso">
                                                <a href="{{url("/products/$product->id/edit")}}"><i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <form action="{{url("/products/$product->id")}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Fshij">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

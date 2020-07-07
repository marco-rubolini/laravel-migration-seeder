@extends('layouts.app')

@section('page-titile', 'Products index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($lista_prodotti as $product)
                          <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.template')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pagina Principal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Inicio</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>
          <p>Total Productos</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
            Mas información
            <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bajo Stock</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-clipboard"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>Productos Cocina</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-restaurant"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>65</h3>

          <p>Productos Bar</p>
        </div>
        <div class="icon">
          <i class="ion ion-beer"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
@endsection

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('layout.recursos.icon_title')
    <title>Reportes | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {!! Html::style('css/adminlte.min.css') !!}
    {!! Html::style('css/notifications.min.css') !!}
    {!! Html::style('css/fonts-googleapis.css') !!}
    @yield('css')
  </head>
  <body class="hold-transition {{getenv('REPORT_THEME')}} sidebar-mini ">
    <!-- Token de sistemas -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenId">

    <div class="wrapper" id="frontAminLTE">
      @include('layout.recursos.header')
      @include('layout.recursos.left_colum')
      <div class="content-wrapper">
        @include('layout.recursos.flash_message')
          <section class="content-header">
            <h1>Front Panel
              <small>
              , Hola @{{ getNameComplete }}

              </small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-fw fa-calendar"></i> @{{ textDateServer }} &nbsp; <i class="fa fa-fw fa-clock-o"></i> @{{ hourServer }}</li>
              <li><a href="/"><i class="fa fa-dashboard"></i>Inicio</a></li>
              <li class="active" id='urlsistema'></li>
            </ol>
          </section>
          <section class="content">
            @yield('content')
          </section>
      </div>
      @include('layout.recursos.footer')
      @include('layout.recursos.right_colum')
      @include('layout.recursos.modals.modal_status')
      @include('layout.recursos.modals.modal_reconnect')
      @include('layout.recursos.modals.modal_asssistance')
      @include('layout.recursos.modals.modal_standby')
      @include('layout.recursos.modals.modal_releases_annexed')
      <div class="control-sidebar-bg"></div>
    </div>
    {!! Html::script('js/adminlte.min.js') !!}
    {!! Html::script('js/notifications.min.js?version='.date('YmdHis')) !!}
    {!! Html::script('js/vuesockets.min.js?version='.date('YmdHis')) !!}
    {!! Html::script('js/personalizeFunctions.min.js?version='.date('YmdHis')) !!}
    @include('layout.recursos.fecha_hora')
    @yield('scripts')
  </body>
</html>

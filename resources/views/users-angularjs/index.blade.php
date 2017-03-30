<!--
* Jonnyalexbh
* @Descripcion: vista users angularjs
-->

@extends('layouts.default')

@section('css')
<base href="{!! url('/') !!}/users-angulajs"/>
@stop

@section('content')
<div ng-app="myApp">
  <ng-view></ng-view>
</div>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-route.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-resource.min.js" charset="utf-8"></script>

<script src="{{asset('app/users-angular.js')}}" charset="utf-8"></script>
@stop

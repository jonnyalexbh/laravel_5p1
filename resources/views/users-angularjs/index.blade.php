<!--
* Jonnyalexbh
* @Descripcion: vista users angularjs
-->

@extends('layouts.default')

@section('css')

@stop

@section('content')
<div ng-app="myApp" ng-controller="myCtrl">
  @{{dataServiceHelloWorld}}
</div>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.min.js" charset="utf-8"></script>
<script src="{{asset('js/users.js')}}" charset="utf-8"></script>
<script src="{{asset('js/services/user-service.js')}}" charset="utf-8"></script>
<script src="{{asset('js/services/test-factory.js')}}" charset="utf-8"></script>
@stop

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-log-offset-1">

        <div class="card mt-3">
        <div class="card-header h3">
            เพิ่มข้อมูลหนังสือ
        </div>
        <div class="card-body">
            {!! Form:: open(array('url'=>'books','files'=>true))
          !! }
                <div class="form-group">
                  <?=Form::label('titel','ชื่อหนังสือ');?>
                  <?=Form::text('title',null,['class' =>
                  'form-control',''])
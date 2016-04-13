@extends('layouts.app')

@section('content')
<div id="content" class="app-content" role="main">

  <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
    <div class="col">
      <div class="app-content-body ">

        <div class="bg-light lter">    
          <ul class="breadcrumb bg-grey-breadcrumb m-b-none">
            <li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
              <i class="icon-bdg_expand1 text"></i>
              <i class="icon-bdg_expand2 text-active"></i>
            </a>   </li>
            <li><a href>Home</a></li>               
            <li class="active"><i class="fa fa-angle-right"></i>Chart</li>
          </ul>
        </div>
        <div class="bg-light b-b wrapper-md padder-md ">
          <h1 class="m-n font-bold h4 padder" >BDG Chart</h1>
        </div>
        
        <div class="wrapper-lg bg-light"> 
         <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading font-regular">
                New Visitors
              </div>
              <div class="panel-body text-center no-padder">
                <h4 class="text-warning">120.000</h4>
                <small class="text-light-grey block">Updated at 1 minutes ago</small>
                <div class="inline">
                  <div ui-jq="easyPieChart" ui-options="{
                  percent: 75,
                  lineWidth: 10,
                  trackColor: '#e5e6ec',
                  barColor: '#ff7e00',
                  scaleColor: '#fff',
                  size: 188,
                  lineCap: 'butt'
                }">
                <div>
                  <span class="h2">75%</span>
                  <div class="text">Yesterday</div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer"><small>% of avarage rate of the Conversion</small></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading font-regular">
            Today Visitors
          </div>
          <div class="panel-body text-center no-padder">
            <h4 class="text-success">40.000</h4>
            <small class="text-light-grey block">Updated at 3 minutes ago</small>
            <div class="inline">
              <div ui-jq="easyPieChart"  ui-options="{
              percent: 25,
              lineWidth: 10,
              trackColor: '#e5e6ec',
              barColor: '#8dc80e',
              scaleColor: '#ffffff',
              size: 188,
              lineCap: 'butt',
              animate: 1000
            }">
            <div>
              <span class="h2 m-l-sm step">25</span>%
              <div class="text">today</div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer"><small>% of change</small></div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading font-regular">
        Daily Visitors
      </div>
      <div class="panel-body text-center no-padder">
        <h4 class="text-info">430.000</h4>
        <small class="text-light-grey block">All Domestic Visitors</small>
        <div class="inline">
          <div ui-jq="easyPieChart"  ui-options="{
          percent: 97,
          lineWidth: 10,
          trackColor: '#e5e6ec',
          barColor: '#00b0ff',
          scaleColor: '#ffffff',
          size: 188,
          lineCap: 'butt',
          animate: 1000
        }">
        <div>
          <span class="h2 m-l-sm step">97</span>%
          <div class="text">All Visitors</div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-footer"><small>% of change</small></div>
</div>
@endsection
@extends('layouts.app')
@section('content')
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
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading font-semibold">
              <span class="label bg-danger pull-right m-t-xs">12 errors</span>
              Status
            </div>
            <table class="table table-striped m-b-none">
              <thead>
                <tr>
                  <th>Progress</th>
                  <th>Item</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar bg-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                    </div>
                    
                  </td>
                  <td>Wireframe</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar bg-danger" data-toggle="tooltip" data-original-title="35%" style="width: 35%"></div>
                    </div>
                  </td>
                  <td>Design Concept</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar bg-success" data-toggle="tooltip" data-original-title="60%" style="width: 60%"></div>
                    </div>
                  </td>
                  <td>User Interface Kit</td>
                </tr>
                <tr>
                  <td>
                    <div class="progress progress-xs progress-striped active m-t-xs m-b-none">
                      <div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
                    </div>
                  </td>
                  <td>Testing</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading font-semibold">Stats</div>
            <table class="table table-striped m-b-none">
              <thead>
                <tr>
                  <th style="width:60px;" class="text-center">Graph</th>
                  <th>Item</th>
                  <th style="width:70px;"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div ui-jq="sparkline" ui-options="[ 16,15,15,14,17,18,16,15,16 ], {type:'bar', height:17, barWidth:4, barSpacing:2, barColor:'#8dc80e'}" class="sparkline inline">loading...</div>
                  </td>
                  <td>Wireframe</td>
                  <td class="text-success">
                    40%
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div  ui-jq="sparkline" ui-options="[ 40,30,30 ], {type:'pie', height:17, sliceColors:['#00b0ef','#ff7e00','#8dc80e']}" class="sparkline inline">loading...</div>
                  </td>
                  <td>Design Concept</td>
                  <td class="text-success">
                    20%
                  </td>
                </tr>
                <tr>
                  <td>
                    <div ui-jq="sparkline" ui-options="[ 16,15,15,14,17,18,16,15,16 ], {type:'line', height:17, width:60, lineColor:'#ff7e00', fillColor:'#fff'}" class="sparkline inline">loading...</div>
                  </td>
                  <td>User Interface</td>
                  <td class="text-warning">
                    50%
                  </td>
                </tr>
                <tr>
                  <td>
                    <div ui-jq="sparkline" ui-options="[ 16,15,15,16,15,15,14,17,14,17,18,16,15,16,14,17,18,16,15,16 ], {type:'discrete', height:17 , width:60, lineColor:'#00b0ef'}" class="sparkline inline">loading...</div>
                  </td>
                  <td>Testing</td>
                  <td class="text-danger">
                    20%
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading font-semibold">
              Responsive Table
            </div>
            <div class="row wrapper-sm">
              <div class="col-sm-5">
                <select class="input-sm form-control w-sm inline v-middle">
                  <option value="0">Bulk action</option>
                  <option value="1">Delete selected</option>
                  <option value="2">Bulk edit</option>
                  <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-3">
                <div class="input-group">
                  <input type="text" class="input-sm form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                    <th style="width:20px;">
                      <label class="checkbox-inline ">
                        <input type="checkbox"><i></i>
                      </label>
                    </th>
                    <th>Project</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th style="width:30px;"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 25, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 22, 2013</td>
                    <td>
                      <a href ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Avatar system</td>
                    <td>15c</td>
                    <td>Jul 15, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Throwdown</td>
                    <td>4c</td>
                    <td>Jul 11, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 7, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 3, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Avatar system</td>
                    <td>15c</td>
                    <td>Jul 2, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><label class="checkbox-inline "><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Videodown</td>
                    <td>4c</td>
                    <td>Jul 1, 2013</td>
                    <td>
                      <a href class="active" ui-toggle-class><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-4 hidden-xs">
                  <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                  </select>
                  <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4 text-center">
                  <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-4 text-right text-center-xs">
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    <li><a href><i class="icon-bdg_arrow4"></i></a></li>
                    <li><a href>1</a></li>
                    <li><a href>2</a></li>
                    <li><a href>3</a></li>
                    <li><a href>4</a></li>
                    <li><a href>5</a></li>
                    <li><a href><i class="icon-bdg_arrow3"></i></a></li>
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Pie Chart-->
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Pie</div>
            <div class="panel-body no-padder">
              
              <div class="col-xs-8">
                <div class="wrapper text-center">
                  <div ui-jq="sparkline" ui-options="[20,5,35,40], {type:'pie', height:140, sliceColors:['#8560a8','#ff7e00','#8dc80e','#00b0ff']}" class="sparkline inline text-center"></div>
                  <div class="line pull-in"></div>
                </div>
              </div>
              
              <div class="col-xs-4 border-left">
                <div class="wrapper">
                  <div class="text-xs">
                    <ul class="sparkline-info">
                      <li class="mb20 text-info font-light"><i class="fa fa-circle text-info"></i> Windows</li>
                      <li class="mb20 text-success font-light"><i class="fa fa-circle text-success"></i> Linux</li>
                      <li class="mb20 text-warning font-light"><i class="fa fa-circle text-warning"></i> Ubuntu</li>
                      <li class="mb20 text-purple font-light"><i class="fa fa-circle text-purple"></i> OSX</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Sparkline Chart -->
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Investment Progress</div>
            <div class="panel-body no-padder">
              <div class="row">
                <div class="col-xs-6">
                  <div class="wrapper text-center">
                    <div ui-jq="sparkline" ui-options="[ [2, 8], [4, 6], [6, 4], [8, 2], [10, 0], [8, 2], [6, 4], [4, 6], [2,8] ], {type:'bar', width:100, height:178, barWidth:7, barSpacing:15, stackedBarColor:['#8dc80e', '#e5e6ec']}" class="sparkline inline"></div>
                  </div>
                </div>
                <div class="col-xs-6">
                  
                  <div class="wrapper">
                    <p class="h3 m-b-sm">Investings</p>
                    Revenue
                    <div class="h3 m-b-sm font-light m-t-sm">4500,00</div>
                    Costs
                    <div class="h3 m-b-sm font-light m-t-sm text-success">3450,00</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sparkline Chart -->
        
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Double Chart</div>
            <div class="bg-dark-grey wrapper pb-zero">
              
              <div class="text-center m-b-n m-t-sm">
                <div ui-jq="sparkline" ui-options="[50.32,45.23,47.56,36.25,53.85,40.15,41.25,50.15,57.14,36.15,97.26,50.15,45.32,47.19,37.75,25.15,56.34,50.35,47.25,53.15], {type:'line', height:65, width: '100%', lineWidth:2, valueSpots:{'0:':'#fff'}, lineColor:'#fff', spotColor:'#fff', fillColor:'', highlightLineColor:'#fff', spotRadius:3}"></div>
                <div ui-jq="sparkline" ui-options="[ 10,9,11,10,11,10,12,10,9,10,11,9,8 ], {type:'bar', height:123, barWidth:7, barSpacing:15, barColor:'#00b0ff'}" class="sparkline inline">loading...</div>
              </div>
            </div>
            <div class="panel-body">
              
              <div class="wrapper20 inline full-width">
                <div class="col-xs-4">
                  <p class="block font-semibold">Market</p>
                  <span class="block">Rp.3.500.000</span>
                </div>
                <div class="col-xs-4">
                  <p class="block font-semibold">Referal</p>
                  <span>Rp.1.150.000</span>
                </div>
                <div class="col-xs-4">
                  <p class="block font-semibold">Affiliate</p>
                  <span>Rp.950.000</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Double Chart Overlay</div>
            <div class="panel-body no-padder">
              <div class="wrapper">
                <div ui-jq="plot" ui-options="
                  [
                  { data: [ [0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7] ], label: 'Unique Visits', points: { show: true, radius : 2,fill:true,fillColor : '#00b0ff' },splines: { show: true, tension: 0.45, lineWidth: 1, fill: 0.4 } },
                  { data: [ [0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3] ], label: 'Pages View', points: { show: true, radius: 2,fill:true,fillColor : '#90cb23' },splines: { show: true, tension: 0.45, lineWidth: 1, fill: 0.4 }  }
                  ],
                  {
                  colors: [ '#01b0ff','#90cb23' ],
                  series: { shadowSize: 2 },
                  xaxis:{ font: { color: '#ccc' } },
                  yaxis:{ font: { color: '#ccc' } },
                  grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                  legend: false,
                  tooltip: true,
                  tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                  }
                " style="height:240px"></div>
                <div class="panel-info">
                  <span class="pull-left text-info"> <i class="fa fa-circle"></i>Unique Visits</span>
                  <span class="pull-left text-success"><i class="fa fa-circle"></i>Pages View</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Order bar</div>
            <div class="panel-body no-padder">
              <div class="wrapper">
                <div ui-jq="plot" ui-options="
                  [
                  { label: 'A', data: [ [10, 120], [20, 100], [30, 70], [40, 90], [50, 115] ] },
                  { label: 'B', data: [ [10, 80],  [20, 70], [30, 50],  [40, 75], [50, 115] ] },
                  { label: 'C', data: [ [10, 30],  [20, 40], [30, 90],  [40, 80], [50, 115] ] },
                  { label: 'D', data: [ [10, 10],  [20, 15], [30, 54],  [40, 50], [50, 115] ] }
                  ],
                  {
                  bars: { show: true, fill: true, lineWidth: 0, order: 1, fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.9}] } },
                  colors: ['#00e5ff', '#00b0ff', '#2979ff' ,'#3d5afe' ],
                  series: { shadowSize: 1 },
                  xaxis:{ font: { color: '#ccc' } },
                  yaxis:{ font: { color: '#ccc' } },
                  grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                  tooltip: true,
                  legend: {show: false}
                  }
                " style="height:240px"></div>
                <div class="panel-info">
                  <span class="pull-left text-blue-a"> <i class="fa fa-circle"></i>Unique Visits</span>
                  <span class="pull-left text-blue-b"><i class="fa fa-circle"></i>Pages View</span>
                  <span class="pull-left text-blue-c"><i class="fa fa-circle"></i>Comments</span>
                  <span class="pull-left text-blue-d"><i class="fa fa-circle"></i>Likes</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Donut Chart</div>
            <div class="panel-body no-padder">
              <div class="wrapper">
                <div ui-jq="plot" ui-options="
                  [ {label : 'Windows',data: [10, 80]},{label : 'OSX',data: [20, 45]},{label : 'Linux',data: [30, 50]},{label : 'Others',data: [40, 10]} ],
                  {
                  series: { pie: { show: true, innerRadius: 0.5, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
                  colors: ['#00b0ff','#ff7e00','#8560a8','#8dc80e','#b8bcce'],
                  grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                  tooltip: true,
                  tooltipOpts: { content: '%s: %p.0%' },
                  legend: {show: false}
                  }
                " style="height:240px"></div>
                <div class="panel-info">
                  <span class="pull-left text-info"> <i class="fa fa-circle"></i>Windows</span>
                  <span class="pull-left text-warning"><i class="fa fa-circle"></i>OSX</span>
                  <span class="pull-left text-purple"><i class="fa fa-circle"></i>Linux</span>
                  <span class="pull-left text-success"><i class="fa fa-circle"></i>Others</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Double Chart</div>
            <div class="panel-body no-padder">
              <div class="wrapper">
                <div ui-jq="plot" ui-options="
                  [
                  { data: [ [0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7] ], label: ' Unique Visits', points: { show: true, radius: 3, fill:true,fillColor : '#00b0ff' }, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.1 }, { opacity: 0.1}] } } },
                  { data: [ [0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3] ], label: ' Pages View', points: { show: true, radius: 3,fill:true,fillColor : '#8dc80e' } }
                  ],
                  {
                  colors: [ '#00b0ff','#8dc80e' ],
                  series: { shadowSize: 2 },
                  xaxis:{ font: { color: '#ccc' } },
                  yaxis:{ font: { color: '#ccc' } },
                  grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                  tooltip: true,
                  legend : false,
                  tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                  }
                " style="height:240px"></div>
                <div class="panel-info">
                  <span class="pull-left text-info"> <i class="fa fa-circle"></i>Unique Visits</span>
                  <span class="pull-left text-success"><i class="fa fa-circle"></i>Pages View</span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading font-regular">Background Chart</div>
            <div class="panel-body no-padder">
              <div class="wrapper">
                <div ui-jq="plot" ui-options="
                  [
                  { data: [ [0,7],[1,5],[2,8],[3,10],[4,17],[5,20],[6,16],[7,10],[8,17],[9,22] ], label: 'Unique Visits', points: { show: true, radius : 2,fill:true,fillColor : '#00b0ff' },splines: { show: true, tension: 0.45, lineWidth: 1, fill: 0 } }
                  ],
                  {
                  colors: [ '#01b0ff','#90cb23' ],
                  series: { shadowSize: 2 },
                  xaxis:{ font: { color: '#ccc' } },
                  yaxis:{ font: { color: '#ccc' } },
                  grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#7b8092', backgroundColor: '#555b70' },
                  legend: false,
                  tooltip: true,
                  tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                  }
                " style="height:240px"></div>
                <div class="panel-info">
                  <span class="pull-left text-info"> <h4><i class="text14 icon-bdg_arrow6"></i>9.879 <small>Users</small> </h4> </span>
                  <span class="pull-left text-success"><h4><i class="text14 icon-bdg_arrow6"></i>12.879 <small>Users</small></h4> </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 padder-v"></div>
      </div>
      
    </div>
  </div>
  <!-- App-content-body -->
</div>
@endsection
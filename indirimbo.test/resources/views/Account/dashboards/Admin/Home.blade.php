@extends('Account.dashboards.Admin.layout.dashboard')
@section('content')
        <!-- begin: .tray-center-->
<div class="tray tray-center">
    <!-- Admin-panels-->
    <div class="admin-panels">
        <div class="row">
            <!-- Three Pane Widget-->
            <div class="col-md-12 admin-grid">
                <!-- dashboard activity-->
                <div id="p01" data-panel-title="false" class="panel sort-disable">
                    <div class="panel-heading"><span class="panel-title hidden-xs hidden"> Recent Activity</span>
                        <ul class="nav panel-tabs panel-tabs-left">
                            <!-- Demo Note: all hrefs set to #tab1_1-->
                            <li class="active"><a href="#tab1_1" data-toggle="tab"> User Activity</a></li>
                            <li><a href="#tab1_1" data-toggle="tab" class="hidden-xs"> Popular Items</a></li>
                            <li><a href="#tab1_1" data-toggle="tab"> Conversions</a></li>
                        </ul>
                    </div>
                    <div class="panel-body pn">
                        <div class="tab-content">
                            <div id="tab1_1" role="tabpanel" class="tab-pane active">
                                <div class="row">
                                    <!-- Chart Column-->
                                    <div class="col-md-12">
                                        <h5 class="ml5 mt20 ph10 pb5 br-b fw600 hidden">Visitors<small class="pull-right fw600">13,253<span class="text-primary">(8,251 unique)</span></small></h5>
                                        <div id="ecommerce_chart1" style="height: 430px;"></div>
                                    </div>
                                    <div class="col-md-6 pl40 pln-lg">
                                        <h3 class="mt30 mbn ph10 pb25 fw300">Top Referrals</h3>
                                        <table class="table mbn tc-med-1">
                                            <thead>
                                            <tr class="hidden">
                                                <th>Source</th>
                                                <th>Count</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><span>Google.com</span></td>
                                                <td class="text-right">1.597</td>
                                            </tr>
                                            <tr>
                                                <td><span>Yahoo.com</span></td>
                                                <td class="text-right">1.296</td>
                                            </tr>
                                            <tr class="br-b">
                                                <td><span>Templatemonster.com</span></td>
                                                <td class="text-right"> 783</td>
                                            </tr>
                                            <tr>
                                                <td class="pt30 pb30"><a href="#" class="text-primary">View Report</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 pr40">
                                        <h3 class="mt30 mbn ph10 pb25 fw300 pl40">Top Search Terms</h3>
                                        <table class="table mbn tc-med-1">
                                            <thead>
                                            <tr class="hidden">
                                                <th>Source</th>
                                                <th>Count</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><span>admin theme</span></td>
                                                <td class="text-right">1.597</td>
                                            </tr>
                                            <tr>
                                                <td><span>admin dashboard</span></td>
                                                <td class="text-right">1.296</td>
                                            </tr>
                                            <tr class="br-b">
                                                <td><span>dashboard theme</span></td>
                                                <td class="text-right">783</td>
                                            </tr>
                                            <tr>
                                                <td class="pt30 pb30"><a href="#" class="text-primary">View Report</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Circle Stats-->
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
                <div class="panel">
                    <div class="panel-body pl40 pr40">
                        <div id="c1" title="1,425" value="35" data-circle-color="twilight" class="info-circle"></div>
                        <h3 class="fw300 mt30"> New Orders</h3>
                        <p class="ffs mt10">3% increase 1W AGO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="panel">
                    <div class="panel-body pl40 pr40">
                        <div id="c2" title="64,487" value="75" data-circle-color="primary" class="info-circle"></div>
                        <h3 class="fw300 mt30"> Total Sales Gross</h3>
                        <p class="ffs mt10">13% increase 1W AGO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="panel">
                    <div class="panel-body pl40 pr40">
                        <div id="c3" title="248" value="18" data-circle-color="info" class="info-circle"></div>
                        <h3 class="fw300 mt30"> Total Sales Gross</h3>
                        <p class="ffs mt10">2.7% Decrease 1W AGO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="panel">
                    <div class="panel-body pl40 pr40">
                        <div id="c4" title="4,487" value="42" data-circle-color="smalt" class="info-circle"></div>
                        <h3 class="fw300 mt30"> Unique Visits</h3>
                        <p class="ffs mt10">3% increase 1W AGO</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 admin-grid">
                <!-- Calendar Widget-->
                <div id="p02" class="panel panel-widget calendar-widget calendar-alt">
                    <div class="panel-heading br-b"><span class="panel-title"> Calendar Widget</span></div>
                    <div class="panel-body bg-white p15">
                        <div id="calendar-widget"></div>
                    </div>
                </div>
                <!-- Column Graph-->
            </div>
            <div class="col-md-6 admin-grid">
                <div id="pchart9" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title"> Column Graph</span></div>
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-lg-7 mt20">
                                <div id="high-column"></div>
                            </div>
                            <div class="col-lg-5 offset-7">
                                <table class="table text-left">
                                    <tbody>
                                    <tr>
                                        <td class="br-n"><span class="fa fa-circle text-facebook fs14 mr10 va-t m4"></span>Facebook</td>
                                        <td class="br-n fw700">54%</td>
                                    </tr>
                                    <tr>
                                        <td class="br-n"><span class="fa fa-circle text-twitter fs14 mr10 va-t m4"></span>Twitter</td>
                                        <td class="br-n fw700">25%</td>
                                    </tr>
                                    <tr>
                                        <td class="br-n"><span class="fa fa-circle text-behance fs14 mr10 va-t m4"></span>Behance</td>
                                        <td class="br-n fw700">39%</td>
                                    </tr>
                                    <tr>
                                        <td class="br-n"><span class="fa fa-circle text-dribble fs14 mr10 va-t m4"></span>Dribbble</td>
                                        <td class="br-n fw700">17%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><a href="#" class="text-primary text-uppercase link link-sm">Add social network</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Stats Top Graph Bot-->
                <div id="p7" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Area Graph</span></div>
                    <div class="row">
                        <div class="col-md-4 ml35 mt30 mb30">
                            <!-- RD SelectMenu-->
                            <label for="select-1" class="mnw-210">
                                <select id="select-1" class="rd-mailform-select">
                                    <option value="Search state">Search state</option>
                                    <option value="Search state 2">Search state 2</option>
                                    <option value="Search state 3">Search state 3</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-lg-4 pull-right mr30 mt35">
                            <div class="panel-body pn">
                                <div class="admin-form">
                                    <table class="table mbn">
                                        <tbody>
                                        <tr>
                                            <td class="fw600 text-right text-secondary">54%</td>
                                            <td class="va-m fw400 text-muted">Male</td>
                                            <td class="fw600 text-right text-secondary">46%</td>
                                            <td class="va-m fw400 text-muted">Female</td>
                                            <td class="fs14 fw600 text-right text-secondary">46%</td>
                                            <td class="va-m fw400 text-muted">Unemployed</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="high-line3" style="width: 100%; height: 371px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Geo Map + Table Stats-->
                <div id="p9" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Visitor Geograph</span></div>
                    <div class="row">
                        <div class="col-md-4 ml35 mt30 mb30">
                            <!-- RD SelectMenu-->
                            <label for="select-2" class="mnw300">
                                <select id="select-2" class="rd-mailform-select">
                                    <option value="United states of america">United states of america</option>
                                    <option value="China">China</option>
                                    <option value="Italy">Italy</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-lg-9">
                                <div id="WidgetMap" style="width: 100%; height: 490px;" class="jvector-colors hide-jzoom"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 mt10">
                                                <div id="c5" value="21" width="15" data-circle-color="twilight" class="info-circle"></div>
                                            </div>
                                            <div class="col-sm-6 col-lg-8">
                                                <h1 class="text-secondary-v1 fw700"> 21%</h1>
                                                <h3 class="ffs">New York</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 mt10">
                                                <div id="c6" value="47" width="15" data-circle-color="primary" class="info-circle"></div>
                                            </div>
                                            <div class="col-sm-6 col-lg-8">
                                                <h1 class="text-secondary-v1 fw700"> 47%</h1>
                                                <h3 class="ffs">Texas</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 mt10">
                                                <div id="c7" value="14" width="15" data-circle-color="info" class="info-circle"></div>
                                            </div>
                                            <div class="col-sm-6 col-lg-8">
                                                <h1 class="text-secondary-v1 fw700"> 14%</h1>
                                                <h3 class="ffs">Missouri</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 mt10">
                                                <div id="c8" value="24" width="15" data-circle-color="smalt" class="info-circle"></div>
                                            </div>
                                            <div class="col-sm-6 col-lg-8">
                                                <h1 class="text-secondary-v1 fw700"> 24%</h1>
                                                <h3 class="ffs">California</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Task Widget-->
        <div class="row">
            <div class="col-lg-6">
                <div id="p05" class="panel panel-widget task-widget task-alt">
                    <div class="panel-heading"><span class="panel-title"> Task-List Widget</span></div>
                    <div class="panel-body pl30 pr30">
                        <h3 class="mb30 mt20 text-muted fs18 fw300"> Personal Tasks</h3>
                        <ul class="task-list task-current">
                            <li class="task-item mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task1" type="checkbox">
                                        <label for="task1"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task2" type="checkbox">
                                        <label for="task2"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Add new servers to design board</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task3" type="checkbox">
                                        <label for="task3"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Finish building prototype for Sony</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task4" type="checkbox">
                                        <label for="task4"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Order new building supplies for Microsof</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task5" type="checkbox">
                                        <label for="task5"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Add new servers to design board</div>
                                <div class="task-menu"></div>
                            </li>
                        </ul>
                        <h3 class="mb30 mt50 text-muted fs18 fw300">Completed Tasks</h3>
                        <ul class="task-list task-completed">
                            <li class="task-item item-checked mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task7" type="checkbox" checked="">
                                        <label for="task7"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item item-checked mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task8" type="checkbox" checked="">
                                        <label for="task8"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item item-checked mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task9" type="checkbox" checked="">
                                        <label for="task9"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item item-checked mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task10" type="checkbox" checked="">
                                        <label for="task10"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item item-checked mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task11" type="checkbox" checked="">
                                        <label for="task11"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                            <li class="task-item item-checked mt10">
                                <div class="task-handle">
                                    <div class="checkbox-custom">
                                        <input id="task12" type="checkbox" checked="">
                                        <label for="task12"></label>
                                    </div>
                                </div>
                                <div class="task-desc">Create documentation for launch</div>
                                <div class="task-menu"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Search List-->
            </div>
            <div class="col-lg-6">
                <div id="p17" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Crawler List</span></div>
                    <div class="panel-body pn pl30 pr30">
                        <table class="table mbn tc-med-1 tc-bold-last">
                            <tbody>
                            <tr>
                                <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/img/15</td>
                                <td>7%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/popular</td>
                                <td>14%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/news/3</td>
                                <td>31%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/featured/16</td>
                                <td>49%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/featured/16</td>
                                <td>94%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/featured/16</td>
                                <td>5%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Country List-->
                <div id="p16" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Country List</span></div>
                    <div class="panel-body pn pl30 pr30">
                        <table class="table mbn tc-med-1 tc-bold-last">
                            <tbody>
                            <tr>
                                <td class="pt10 pb15"><span class="flag-sm flag-us mr10 va-b top-5"></span><span>United States</span></td>
                                <td>24%</td>
                            </tr>
                            <tr>
                                <td class="pt10 pb15"><span class="flag-sm flag-de mr10 va-b top-5"></span><span>Germany</span></td>
                                <td>7%</td>
                            </tr>
                            <tr>
                                <td class="pt10 pb15"><span class="flag-sm flag-fr mr10 va-b top-5"></span><span>France</span></td>
                                <td>14%</td>
                            </tr>
                            <tr>
                                <td class="pt10 pb15"><span class="flag-sm flag-tr mr10 va-b top-5"></span><span>Turkey</span></td>
                                <td>31%</td>
                            </tr>
                            <tr>
                                <td class="pt10 pb15"><span class="flag-sm flag-es mr10 va-b top-5"></span><span>Spain</span></td>
                                <td>22%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Browser List-->
                <div id="p18" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Tabs</span></div>
                    <div class="panel-body pn pl30 pr30">
                        <table class="table mbn tc-med-1 tc-bold-last">
                            <tbody>
                            <tr>
                                <td class="pt20 pb20"><span class="mr10 mt1 fa fa-chrome"></span>Google Chrome</td>
                                <td>54%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="mr10 mt1 fa fa-opera"></span>Opera</td>
                                <td>18%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="mr10 mt1 fa fa-firefox"></span>FireFox</td>
                                <td>25%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="mr10 mt1 fa fa-safari"></span>Safari</td>
                                <td>49%</td>
                            </tr>
                            <tr>
                                <td class="pt20 pb20"><span class="mr10 mt1 fa fa-internet-explorer"></span>Explorer</td>
                                <td>94%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- begin: .tray-right-->
<aside data-tray-height="match" class="tray tray-right tray270 pn hidden">
    <!-- store activity timeline-->
    <ol class="timeline-list pl5 mt5">
        <li class="timeline-item">
            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
            <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
            <div class="timeline-date">1:25am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
            <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Notebook</a></div>
            <div class="timeline-date">3:05am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
            <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
            <div class="timeline-date">4:15am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
            <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
            <div class="timeline-date">5:25am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
            <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Apple Inc.</a></div>
            <div class="timeline-date">7:45am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
            <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
            <div class="timeline-date">8:25am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
            <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Watch</a></div>
            <div class="timeline-date">9:35am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-system"><span class="fa fa-fire"></span></div>
            <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
            <div class="timeline-date">4:15am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
            <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
            <div class="timeline-date">5:25am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
            <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
            <div class="timeline-date">4:15am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
            <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
            <div class="timeline-date">5:25am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
            <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Apple Inc.</a></div>
            <div class="timeline-date">7:45am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
            <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
            <div class="timeline-date">8:25am</div>
        </li>
        <li class="timeline-item">
            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
            <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Watch</a></div>
            <div class="timeline-date">9:35am</div>
        </li>
    </ol>
</aside>
    @stop

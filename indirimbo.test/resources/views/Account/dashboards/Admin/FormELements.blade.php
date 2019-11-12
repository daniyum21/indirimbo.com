@extends('Account.dashboards.Admin.layout.dashboard')
@section('content')
        <!-- begin: .tray-center-->
<!-- begin: .tray-center-->
<div class="tray tray-center">
    <div class="mw1000 center-block">
        <!-- Begin: Content Header-->
        <div class="content-header">
            <h2>With <b>Admin Forms</b> you have everything you need.
            </h2>
            <p class="lead">We even included dozens of prebuilt form layouts so you can leave work early</p>
        </div>
        <!-- Begin: Admin Form-->
        <div class="admin-form">
            <div class="panel heading-border">
                <div class="panel-body bg-light">
                    <form id="form-ui" method="post" action="">
                        <div id="spy1" class="section-divider mb40"><span>Form UI Elements</span></div>
                        <!-- .section-divider-->
                        <!-- Basic Inputs-->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field">
                                        <input id="from" type="text" name="from" placeholder="Input no icon" class="gui-input">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field">
                                        <input id="from" type="text" name="from" placeholder="Disabled no icon" disabled="" class="gui-input">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Input Icons-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="firstname" type="text" name="firstname" placeholder="Input icon left" class="gui-input">
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field append-icon">
                                        <input id="firstname" type="text" name="firstname" placeholder="Input icon right" class="gui-input">
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="firstname" type="text" name="firstname" placeholder="Disabled with icon" disabled="" class="gui-input">
                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Input Formats-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="website" type="url" name="website" placeholder="URL input" class="gui-input">
                                        <label for="website" class="field-icon"><i class="fa fa-globe"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="email" type="email" name="email" placeholder="Email input" class="gui-input">
                                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 hidden">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="mobile" type="tel" name="mobile" placeholder="Telephone input" class="gui-input">
                                        <label for="mobile" class="field-icon"><i class="fa fa-phone-square"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="s" type="search" name="s" placeholder="Disabled Search input" disabled="" class="gui-input">
                                        <label for="s" class="field-icon"><i class="fa fa-search"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Multi Selects-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field select">
                                        <select id="country" name="country">
                                            <option value="">Select with single arrow</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                        </select><i class="arrow"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field select">
                                        <select id="selectID" name="selectID">
                                            <option value="">Select with double arrows</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option</option>
                                        </select><i class="arrow double"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field select">
                                        <select id="selectID" name="selectID" disabled="">
                                            <option value="">Select with double arrows</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select><i class="arrow double"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Text Areas-->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea id="comment" name="comment" placeholder="Text area" class="gui-textarea"></textarea>
                                        <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label><span class="input-footer"><strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea id="comment" name="comment" placeholder="Disabled Text area" disabled="" class="gui-textarea"></textarea>
                                        <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label><span class="input-footer"><strong>Hint:</strong>Don't be negative or off topic!</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="spy2" class="section-divider mv40"><span>Input Tooltips</span></div>
                        <!-- .section-divider-->
                        <!-- tooltips-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="tooltip1" type="text" name="tooltip1" placeholder="Top Right" class="gui-input"><b class="tooltip tip-right-top"><em> I am a top right aligned tooltip! Pretty useful huh.</em></b>
                                        <label for="tooltip1" class="field-icon"><i class="fa fa-flag"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="tooltip2" type="text" name="tooltip2" placeholder="Left" class="gui-input"><b class="tooltip tip-left position-9"><em> I am a left aligned tooltip!</em></b>
                                        <label for="tooltip2" class="field-icon"><i class="fa fa-flag"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="tooltip3" type="text" name="tooltip3" placeholder="Bottom Right" class="gui-input"><b class="tooltip tip-right-bottom"><em> I am a bottom right aligned tooltip! Pretty useful huh.</em></b>
                                        <label for="tooltip3" class="field-icon"><i class="fa fa-flag"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="tooltip4" type="text" name="tooltip4" placeholder="Top Left" class="gui-input"><b class="tooltip tip-left-top"><em> I am a top left aligned tooltip! Pretty useful huh.</em></b>
                                        <label for="tooltip4" class="field-icon"><i class="fa fa-flag"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="tooltip5" type="text" name="tooltip5" placeholder="Right" class="gui-input"><b class="tooltip tip-right position-8"><em> I am a right aligned tooltip!</em></b>
                                        <label for="tooltip5" class="field-icon"><i class="fa fa-flag"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input id="tooltip6" type="text" name="tooltip6" placeholder="Bottom Left" class="gui-input"><b class="tooltip tip-left-bottom"><em> I am a bottom left aligned tooltip! Pretty useful huh.</em></b>
                                        <label for="tooltip6" class="field-icon"><i class="fa fa-flag"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="spy3" class="section-divider mv40"><span>File Uploaders</span></div>
                        <!-- .section-divider-->
                        <!-- File Uploaders-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field prepend-icon append-button file"><span class="button">Choose File</span>
                                        <input id="file1" type="file" name="file1" onchange="document.getElementById('uploader1').value = this.value;" class="gui-file">
                                        <input id="uploader1" type="text" placeholder="Please Select A File" class="gui-input">
                                        <label class="field-icon"><i class="fa fa-upload"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <div class="section">
                                    <label class="field prepend-icon file"><span class="button">Choose File</span>
                                        <input id="file2" type="file" name="file2" onchange="document.getElementById('uploader2').value = this.value;" class="gui-file">
                                        <input id="uploader2" type="text" placeholder="Please Select A File" class="gui-input">
                                        <label class="field-icon"><i class="fa fa-upload"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- File Uploaders2-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <label class="field prepend-icon append-button file"><span disabled="" class="button">Choose File</span>
                                        <input id="file3" type="file" name="file3" onchange="document.getElementById('uploader3').value = this.value;" disabled="" class="gui-file">
                                        <input id="uploader3" type="text" placeholder="Disabled File Select" class="gui-input">
                                        <label class="field-icon"><i class="fa fa-upload"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <div class="section">
                                    <label class="field prepend-icon file"><span disabled="" class="button">Choose File</span>
                                        <input id="file4" type="file" name="file4" onchange="document.getElementById('uploader4').value = this.value;" disabled="" class="gui-file">
                                        <input id="uploader4" type="text" placeholder="Disabled File Select" class="gui-input">
                                        <label class="field-icon"><i class="fa fa-upload"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- File Uploaders3-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field prepend-icon append-button file"><span class="button btn-primary">Choose File</span>
                                        <input id="file3" type="file" name="file3" onchange="document.getElementById('uploader3').value = this.value;" class="gui-file">
                                        <input id="uploader3" type="text" placeholder="Disabled File Select" class="gui-input">
                                        <label class="field-icon"><i class="fa fa-upload"></i></label>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 hidden-xs">
                                <div class="section">
                                    <label class="field prepend-icon append-button file disabled"><span disabled="" class="button btn-primary">Choose File</span>
                                        <input id="file4" type="file" name="file4" onchange="document.getElementById('uploader4').value = this.value;" disabled="" class="gui-file">
                                        <input id="uploader4" type="text" placeholder="Disabled File Select" class="gui-input">
                                        <label class="field-icon"><i class="fa fa-upload"></i></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="spy4" class="section-divider mv40"><span>Form Addons</span></div>
                        <!-- .section-divider-->
                        <!-- Form Addons-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section">
                                    <div class="smart-widget sm-right smr-50">
                                        <label class="field">
                                            <input id="sub" type="text" name="sub" placeholder="Smart widget right 50" class="gui-input">
                                        </label>
                                        <button type="submit" class="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="smart-widget sm-right smr-80">
                                        <label class="field prepend-icon">
                                            <input id="sub2" type="text" name="sub2" placeholder="Smart widget right 80" class="gui-input">
                                            <label for="s" class="field-icon"><i class="fa fa-search"></i></label>
                                        </label>
                                        <button type="submit" class="button">Search</button>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="smart-widget sm-right smr-120">
                                        <label class="field">
                                            <input id="sub3" type="text" name="sub3" placeholder="Smart widget right 120" class="gui-input">
                                        </label>
                                        <button type="submit" class="button">Subscribe</button>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="smart-widget sm-right smr-160">
                                        <label class="field">
                                            <input id="sub3" type="text" name="sub3" placeholder="Smart widget right 160" class="gui-input">
                                        </label>
                                        <button type="submit" class="button">Join Mailing List</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section">
                                    <div class="smart-widget sm-left sml-50">
                                        <label class="field">
                                            <input id="sm3" type="text" name="sm3" placeholder="Smart widget left 50" class="gui-input">
                                        </label>
                                        <label for="sm3" class="button"><i class="fa fa-search"></i></label>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="smart-widget sm-left sml-80">
                                        <label class="field">
                                            <input id="sm2" type="text" name="sm2" placeholder="Smart widget left 80" class="gui-input">
                                        </label>
                                        <label for="sm2" class="button">Search</label>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="smart-widget sm-left sml-120">
                                        <label class="field">
                                            <input id="sm" type="text" name="sm" placeholder="Smart widget left 120" class="gui-input">
                                        </label>
                                        <label for="sm" class="button">Subscribe</label>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="smart-widget sm-left sml-160">
                                        <label class="field">
                                            <input id="sm4" type="text" name="sm4" placeholder="Smart widget left 160" class="gui-input">
                                        </label>
                                        <label for="sm4" class="button">Join Mailing List</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Radios and Checkboxes-->
                        <div id="spy5" class="section-divider mt40 mb25"><span>Radios and Checkboxes</span></div>
                        <!-- .section-divider-->
                        <div class="section row">
                            <div class="col-md-6 pl20 prn">
                                <div class="section mv15">
                                    <div class="option-group field">
                                        <label class="option">
                                            <input type="checkbox" name="checked" value="checked" checked=""><span class="checkbox"></span>Check
                                        </label>
                                        <label class="option">
                                            <input type="checkbox" name="disabled" value="disabled" disabled=""><span class="checkbox"></span>Disable
                                        </label>
                                        <label class="option">
                                            <input type="checkbox" name="mobileos" value="CH"><span class="checkbox"></span>Empty
                                        </label>
                                    </div>
                                </div>
                                <div class="section mb15">
                                    <div class="option-group field">
                                        <label class="option">
                                            <input type="radio" name="payment" checked=""><span class="radio"></span>Check
                                        </label>
                                        <label class="option">
                                            <input type="radio" name="disabled" disabled=""><span class="radio"></span>Disable
                                        </label>
                                        <label class="option">
                                            <input type="radio" name="payment"><span class="radio"></span>Empty
                                        </label>
                                    </div>
                                </div>
                                <div class="mb15">
                                    <label class="field option block">
                                        <input type="checkbox" name="terms"><span class="checkbox mr10"></span>Please agree to our<a href="javascript:;" class="theme-link"> terms</a>
                                    </label>
                                </div>
                                <div class="section">
                                    <label class="field option block">
                                        <input type="radio" name="terms"><span class="radio mr5"></span> Please agree to our<a href="javascript:;" class="theme-link"> terms</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="option-group field section">
                                            <label for="disabled" class="option block mt15">
                                                <input id="disabled" type="radio" name="disabled" value="disabled" disabled=""><span class="radio"></span>Disabled
                                            </label>
                                            <label for="female" class="option block mt15">
                                                <input id="female" type="radio" name="gender" value="female"><span class="radio"></span>Radio
                                            </label>
                                            <label for="other" class="option block mt15">
                                                <input id="other" type="radio" name="gender" value="other"><span class="radio"></span>Other
                                            </label>
                                            <label for="checked" class="option block mt15">
                                                <input id="checked" type="radio" name="gender" value="checked" checked=""><span class="radio"></span>Checked
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="option-group field section">
                                            <label class="option block mt15">
                                                <input type="checkbox" name="disabled" value="disabled" disabled=""><span class="checkbox"></span>Disabled
                                            </label>
                                            <label class="option block mt15">
                                                <input type="checkbox" name="mobileos" value="FR"><span class="checkbox"></span>Android Kitkat
                                            </label>
                                            <label class="option block mt15">
                                                <input type="checkbox" name="mobileos" value="CH"><span class="checkbox"></span>Apple IOS 7
                                            </label>
                                            <label class="option block mt15">
                                                <input type="checkbox" name="checked" value="checked" checked=""><span class="checkbox"></span>Checked
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="spy6" class="section-divider mt40 mb25"><span>Toggle Switches</span></div>
                        <!-- .section-divider-->
                        <div class="section row">
                            <div class="col-md-6 col-md-3">
                                <label class="switch block mt15">
                                    <input id="f1" type="checkbox" name="features" value="javascript">
                                    <label for="f1" data-on="ON" data-off="OFF"></label><span>Javascript</span>
                                </label>
                                <label class="switch block mt15">
                                    <input id="f2" type="checkbox" name="features" value="downloads">
                                    <label for="f2" data-on="ON" data-off="OFF"></label><span>Downloads</span>
                                </label>
                                <label class="switch block mt15">
                                    <input id="f3" type="checkbox" name="features" value="cookies">
                                    <label for="f3" data-on="ON" data-off="OFF"></label><span>Cookies</span>
                                </label>
                                <label class="switch block mt15">
                                    <input id="f4" type="checkbox" name="features" value="popups" checked="">
                                    <label for="f4" data-on="ON" data-off="OFF"></label><span>Popups</span>
                                </label>
                            </div>
                            <div class="hidden-xs col-md-3">
                                <label class="switch block mt15">
                                    <input id="t1" type="checkbox" name="tools" value="analytics">
                                    <label for="t1" data-on="YES" data-off="NO"></label><span>Analytics</span>
                                </label>
                                <label class="switch block mt15">
                                    <input id="t2" type="checkbox" name="tools" value="reports">
                                    <label for="t2" data-on="YES" data-off="NO"></label><span>Reports</span>
                                </label>
                                <label class="switch block mt15">
                                    <input id="t3" type="checkbox" name="tools" value="social">
                                    <label for="t3" data-on="YES" data-off="NO"></label><span>Social</span>
                                </label>
                                <label class="switch block mt15">
                                    <input id="t4" type="checkbox" name="tools" value="admin" checked="">
                                    <label for="t4" data-on="YES" data-off="NO"></label><span>Access</span>
                                </label>
                            </div>
                            <div class="col-md-6 col-md-3">
                                <label class="switch switch-round block mt15">
                                    <input id="fr1" type="radio" name="framework" value="mootols">
                                    <label for="fr1" data-on="ON" data-off="OFF"></label><span>MooTools</span>
                                </label>
                                <label class="switch switch-round block mt15">
                                    <input id="fr2" type="radio" name="framework" value="angular">
                                    <label for="fr2" data-on="ON" data-off="OFF"></label><span>Angular JS</span>
                                </label>
                                <label class="switch switch-round block mt15">
                                    <input id="fr3" type="radio" name="framework" value="jquery">
                                    <label for="fr3" data-on="ON" data-off="OFF"></label><span>jQuery</span>
                                </label>
                                <label class="switch switch-round block mt15">
                                    <input id="fr4" type="radio" name="framework" value="dojo" checked="">
                                    <label for="fr4" data-on="ON" data-off="OFF"></label><span>Dojo</span>
                                </label>
                            </div>
                            <div class="hidden-xs col-md-3">
                                <label class="switch switch-round block mt15">
                                    <input id="fr5" type="radio" name="framework2" value="mootols">
                                    <label for="fr5" data-on="YES" data-off="NO"></label><span>MooTools</span>
                                </label>
                                <label class="switch switch-round block mt15">
                                    <input id="fr6" type="radio" name="framework2" value="angular">
                                    <label for="fr6" data-on="YES" data-off="NO"></label><span>Angular JS</span>
                                </label>
                                <label class="switch switch-round block mt15">
                                    <input id="fr7" type="radio" name="framework2" value="jquery">
                                    <label for="fr7" data-on="YES" data-off="NO"></label><span>jQuery</span>
                                </label>
                                <label class="switch switch-round block mt15">
                                    <input id="fr8" type="radio" name="framework2" value="dojo" checked="">
                                    <label for="fr8" data-on="YES" data-off="NO"></label><span>Dojo</span>
                                </label>
                            </div>
                        </div>
                        <!-- Ratings Widget-->
                        <div id="spy7" style="margin-top: 60px;" class="section-divider mb40"><span>Review & Rating Widget</span></div>
                        <div class="section row">
                            <div class="col-md-6 pr40 border-right"><span class="rating block"><span class="lbl-text">Customization</span>
                            <input id="r5" type="radio" name="custom" checked="" class="rating-input">
                            <label for="r5" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="r4" type="radio" name="custom" class="rating-input">
                            <label for="r4" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="r3" type="radio" name="custom" class="rating-input">
                            <label for="r3" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="r2" type="radio" name="custom" class="rating-input">
                            <label for="r2" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="r1" type="radio" name="custom" class="rating-input">
                            <label for="r1" class="rating-star"><i class="fa fa-star"></i></label></span><span class="rating block"><span class="lbl-text">Reliability</span>
                            <input id="rr5" type="radio" name="reliable" class="rating-input">
                            <label for="rr5" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rr4" type="radio" name="reliable" checked="" class="rating-input">
                            <label for="rr4" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rr3" type="radio" name="reliable" class="rating-input">
                            <label for="rr3" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rr2" type="radio" name="reliable" class="rating-input">
                            <label for="rr2" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rr1" type="radio" name="reliable" class="rating-input">
                            <label for="rr1" class="rating-star"><i class="fa fa-star"></i></label></span><span class="rating block"><span class="lbl-text">Relevance</span>
                            <input id="rx5" type="radio" name="relevance" class="rating-input">
                            <label for="rx5" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rx4" type="radio" name="relevance" class="rating-input">
                            <label for="rx4" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rx3" type="radio" name="relevance" checked="" class="rating-input">
                            <label for="rx3" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rx2" type="radio" name="relevance" class="rating-input">
                            <label for="rx2" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="rx1" type="radio" name="relevance" class="rating-input">
                            <label for="rx1" class="rating-star"><i class="fa fa-star"></i></label></span></div>
                            <div class="col-md-6 hidden-xs pl40 pln-md"><span class="rating block"><span class="lbl-text">Our products</span>
                            <input id="five-stars" type="radio" name="product-rate" class="rating-input">
                            <label for="five-stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="four-stars" type="radio" name="product-rate" class="rating-input">
                            <label for="four-stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="three-stars" type="radio" name="product-rate" checked="" class="rating-input">
                            <label for="three-stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="two-stars" type="radio" name="product-rate" class="rating-input">
                            <label for="two-stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="one-star" type="radio" name="product-rate" class="rating-input">
                            <label for="one-star" class="rating-star"><i class="fa fa-star"></i></label></span><span class="rating block"><span class="lbl-text">Support team</span>
                            <input id="5stars" type="radio" name="support-rate" class="rating-input">
                            <label for="5stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="4stars" type="radio" name="support-rate" class="rating-input">
                            <label for="4stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="3stars" type="radio" name="support-rate" class="rating-input">
                            <label for="3stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="2stars" type="radio" name="support-rate" checked="" class="rating-input">
                            <label for="2stars" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="1star" type="radio" name="support-rate" class="rating-input">
                            <label for="1star" class="rating-star"><i class="fa fa-star"></i></label></span><span class="rating block"><span class="lbl-text">Response time</span>
                            <input id="5s" type="radio" name="response-rate" class="rating-input">
                            <label for="5s" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="4s" type="radio" name="response-rate" class="rating-input">
                            <label for="4s" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="3s" type="radio" name="response-rate" class="rating-input">
                            <label for="3s" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="2s" type="radio" name="response-rate" class="rating-input">
                            <label for="2s" class="rating-star"><i class="fa fa-star"></i></label>
                            <input id="1s" type="radio" name="response-rate" checked="" class="rating-input">
                            <label for="1s" class="rating-star"><i class="fa fa-star"></i></label></span></div>
                        </div>
                        <div class="section-divider mv40 hidden"><span class="bg-light">Buttons</span></div>
                        <!-- .tagline-->
                        <div class="section button-list hidden">
                            <button class="button"><i class="fa fa-align-left"></i></button>
                            <button class="button"><i class="fa fa-align-justify"></i></button><a href="javascript:;" class="button"><i class="fa fa-align-center"></i></a><a href="javascript:;" class="button"><i class="fa fa-align-right"></i></a><a href="javascript:;" class="button"><i class="fa fa-align-center"></i></a><a href="javascript:;" class="button btn-primary"><i class="fa fa-align-right"></i></a>
                            <button class="button btn-primary"><i class="fa fa-align-left"></i></button>
                            <button class="button btn-primary"><i class="fa fa-align-justify"></i></button><a href="javascript:;" class="button btn-primary"><i class="fa fa-align-center"></i></a><a href="javascript:;" class="button btn-primary"><i class="fa fa-align-right"></i></a>
                        </div>
                        <div class="section button-list hidden">
                            <input type="submit" value="Button normal" class="button">
                            <button class="button btn-primary">Button primary</button><a href="javascript:;" class="button btn-rounded">Button rounded</a><a href="javascript:;" class="button btn-primary btn-rounded">Primary rounded</a>
                        </div>
                        <div class="section button-list hidden">
                            <input type="submit" value="Pushed normal" class="button pushed">
                            <button class="button pushed btn-primary">Pushed primary</button><a href="javascript:;" class="button pushed btn-rounded">Pushed round</a><a href="javascript:;" class="button pushed btn-primary btn-rounded">Pushed round</a>
                        </div>
                        <div class="section button-list hidden">
                            <button class="button button-left">Button Left</button>
                            <button class="button button-right">Button right</button><a href="javascript:;" class="button btn-primary button-left">Primary Left</a><a href="javascript:;" class="button btn-primary button-right">Primary Right</a>
                        </div>
                        <div class="section button-list hidden">
                            <button class="button btn-pointed button-left">Pointed Left</button>
                            <button class="button btn-pointed button-right">Pointed right</button><a href="javascript:;" class="button btn-pointed btn-primary button-left">Pointed Left</a><a href="javascript:;" class="button btn-pointed btn-primary button-right">Pointed Right</a>
                        </div>
                        <div class="section-divider hidden"><span class="bg-light">Simple Pricing Grid</span></div>
                        <!-- .tagline-->
                        <!-- Pricing Tables-->
                        <div class="section row hidden">
                            <div class="col-md-6">
                                <div class="section">
                                    <div class="price-box">
                                        <h4><sup>$</sup>29<span class="per-month">/month</span></h4>
                                        <h5>Starter</h5>
                                        <div class="spacer mt20 mb20"></div>
                                        <p>For those looking for something simple to get started.</p>
                                        <div class="spacer mt20 mb20"></div><a href="#" class="button block pushed expand"> Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section">
                                    <div class="price-box selected-box">
                                        <div class="ribbon-large">
                                            <div class="ribbon-inner">POPULAR</div>
                                        </div>
                                        <h4><sup>$</sup>179<span class="per-month">/month</span></h4>
                                        <h5>Professional</h5>
                                        <div class="spacer mt20 mb20"></div>
                                        <p>For large enterprises selling over one million plus a year.</p>
                                        <div class="spacer mt20 mb20"></div><a href="#" class="button btn-primary block pushed expand"> Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-divider mv40 hidden"><span class="bg-light">Google Map</span></div>
                        <!-- .tagline-->
                        <!-- Google Map-->
                        <div class="section hidden">
                            <div class="map-container">
                                <div id="map_canvas"></div>
                            </div>
                        </div>
                        <!-- Notifications + Progress Bars-->
                        <div class="section-divider mv40 hidden"><span class="bg-light">Notifications + Progress Bars</span></div>
                        <div class="section hidden">
                            <div class="progress">
                                <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%" class="progress-bar progress-bar-striped active"><span class="sr-only">40% Complete (success)</span></div>
                            </div>
                            <div class="progress">
                                <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%" class="progress-bar progress-bar-success progress-bar-striped"><span class="sr-only">40% Complete (success)</span></div>
                            </div>
                            <div class="progress">
                                <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%" class="progress-bar progress-bar-info progress-bar-striped"><span class="sr-only">20% Complete</span></div>
                            </div>
                            <div class="progress">
                                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%" class="progress-bar progress-bar-warning progress-bar-striped"><span class="sr-only">60% Complete (warning)</span></div>
                            </div>
                            <div class="progress">
                                <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" class="progress-bar progress-bar-danger progress-bar-striped"><span class="sr-only">80% Complete (danger)</span></div>
                            </div>
                            <div role="alert" class="alert alert-success alert-dismissible">
                                <button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><strong>Well done!</strong>You successfully read this important alert message.
                            </div>
                            <div role="alert" class="alert alert-info alert-dismissible">
                                <button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><strong>Heads up!</strong>This alert needs your attention, but it's not super important.
                            </div>
                            <div role="alert" class="alert alert-warning alert-dismissible">
                                <button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><strong>Warning!</strong>Better check yourself, you're not looking too good.
                            </div>
                            <div role="alert" class="alert alert-danger alert-dismissible">
                                <button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><strong>Oh snap!</strong>Change a few things up and try submitting again.
                            </div>
                        </div>
                        <div class="panel-footer hidden">
                            <button type="submit" class="button btn-primary">Proceed to confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- begin: .tray-right-->
<aside data-tray-height="match" class="tray tray-right tray290">
    <div data-spy="affix" data-offset-top="200" class="tray-affix">
        <div id="skin-switcher" class="tray-bin stretch btn-dimmer row">
            <div class="col-xs-4 pln"><a data-form-skin="primary" class="btn btn-primary btn-gradient btn-alt btn-block item-active">Primary</a></div>
            <div class="col-xs-4"><a data-form-skin="success" class="btn btn-success btn-gradient btn-alt btn-block">Success</a></div>
            <div class="col-xs-4"><a data-form-skin="info" class="btn btn-info btn-gradient btn-alt btn-block">Info</a></div>
            <div class="col-xs-4 pln"><a data-form-skin="warning" class="btn btn-warning btn-gradient btn-alt btn-block">Warning</a></div>
            <div class="col-xs-4"><a data-form-skin="danger" class="btn btn-danger btn-gradient btn-alt btn-block">Danger</a></div>
            <div class="col-xs-4"><a data-form-skin="alert" class="btn btn-alert btn-gradient btn-alt btn-block">Alert</a></div>
            <div class="col-xs-4 pln"><a data-form-skin="system" class="btn btn-system btn-gradient btn-alt btn-block">System</a></div>
            <div class="col-xs-4"><a data-form-skin="dark" class="btn btn-dark btn-gradient btn-alt btn-block">Dark</a></div>
            <div class="col-xs-4"><a data-form-skin="default" class="btn btn-default btn-gradient btn-alt btn-block">Default</a></div>
        </div>
        <div id="nav-spy">
            <ul data-smoothscroll="-90" class="nav tray-nav">
                <li class="active"><a href="#spy1"><span class="fa fa-edit fa-lg"></span> Form UI Elements</a></li>
                <li><a href="#spy2"><span class="fa fa-flag fa-lg"></span> Input Tooltips</a></li>
                <li><a href="#spy3"><span class="fa fa-files-o fa-lg"></span> File Uploaders</a></li>
                <li><a href="#spy4"><span class="fa fa-caret-square-o-right fa-lg"></span> Form Input Addons</a></li>
                <li><a href="#spy5"><span class="fa fa-check-square-o fa-lg"></span> Radios & Checkboxes</a></li>
                <li><a href="#spy6"><span class="fa fa-toggle-off fa-lg"></span> Toggle Switches</a></li>
                <li><a href="#spy7"><span class="fa fa-star-o fa-lg"></span> Review & Rating Widgets</a></li>
            </ul>
        </div>
    </div>
</aside>
@stop

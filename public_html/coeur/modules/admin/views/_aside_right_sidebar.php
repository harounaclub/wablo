<aside id="sidebar-right" class="sidebar">
            <div class="lg-body mcs-overflow">
                <ul class="tab-nav m-t-10 p-l-15 p-r-15" role="tablist">
                	<li class="active">
                    	<a href="#control-tab-settings" aria-controls="control-tab-settings" role="tab" data-toggle="tab"><i class="him-icon zmdi zmdi-settings"></i></a>
                    </li>
                    <li><a href="#control-tab-contacts" aria-controls="control-tab-contacts" role="tab" data-toggle="tab"><i class="him-icon zmdi zmdi-accounts"></i></a></li>
                    <li class="close-btn">
                        <a href="#" data-dp-action="sidebar-close" data-dp-target="#sidebar-right">
                        	<i class="zmdi zmdi-close"></i>
                    	</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active p-l-25 p-r-25 p-b-25 p-t-10" id="control-tab-settings">
                        <ul class="skin-colors">
                            <li class="skin-switch hidden-xs">
                                <span class="dp-skin md-bg-light-blue" data-dp-action="change-skin" data-dp-skin="lightblue"></span>
                                <span class="dp-skin md-bg-blue-grey" data-dp-action="change-skin" data-dp-skin="bluegrey"></span>
                                <span class="dp-skin md-bg-cyan" data-dp-action="change-skin" data-dp-skin="cyan"></span>
                                <span class="dp-skin md-bg-teal" data-dp-action="change-skin" data-dp-skin="teal"></span>
                                <span class="dp-skin md-bg-orange" data-dp-action="change-skin" data-dp-skin="orange"></span>
                                <span class="dp-skin md-bg-brown" data-dp-action="change-skin" data-dp-skin="brown"></span>
                                <span class="dp-skin md-bg-green" data-dp-action="change-skin" data-dp-skin="green"></span>
                                <span class="dp-skin md-bg-purple" data-dp-action="change-skin" data-dp-skin="purple"></span>
                                <span class="dp-skin md-bg-pink" data-dp-action="change-skin" data-dp-skin="pink"></span>
                                <span class="dp-skin md-bg-blue" data-dp-action="change-skin" data-dp-skin="blue"></span>
                            </li>
                        </ul>
                        
                        <div class="select m-t-25">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                        <div class="select">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                        
                        <div class="toggle-switch toggle-switch-demo m-b-15 m-t-25" data-ts-color="pink">
                            <input id="ts1" type="checkbox" hidden="hidden">
                            <label for="ts1" class="ts-helper"></label>
                            <label for="ts1" class="ts-label m-l-10">Toggle Settings One</label>
                        </div>
                        <div class="toggle-switch toggle-switch-demo m-b-15" data-ts-color="purple">
                            <input id="ts2" type="checkbox" hidden="hidden">
                            <label for="ts2" class="ts-helper"></label>
                            <label for="ts2" class="ts-label m-l-10">Toggle Settings Two</label>
                        </div>
                        
                        <div class="checkbox m-b-15 m-t-25"><label><input type="checkbox" value=""><i class="input-helper"></i>Settings option 1</label></div>
                        <div class="checkbox m-b-15"><label><input type="checkbox" value=""><i class="input-helper"></i>Settings option 2</label></div>
                        
                        <label class="radio radio-inline m-r-20 m-t-25"><input type="radio" name="inlineRadioOptions" value="option1"><i class="input-helper"></i>1</label>
                        <label class="radio radio-inline m-r-20 m-t-25"><input type="radio" name="inlineRadioOptions" value="option2"><i class="input-helper"></i>2</label>
                        <label class="radio radio-inline m-r-20 m-t-25"><input type="radio" name="inlineRadioOptions" value="option3"><i class="input-helper"></i>3</label>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane" id="control-tab-contacts">
                        <div class="list-group">
                            <a class="list-group-item media" href="#">
                                <div class="pull-left p-relative">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/2.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">Thomas Douglas</div>
                                    <small class="lg-item-text">Available</small>
                                </div>
                            </a>
    
                            <a class="list-group-item media" href="#">
                                <div class="pull-left">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">David Edmonds</div>
                                    <small class="lg-item-text">Last seen 12 hours ago</small>
                                </div>
                            </a>
    
                            <a class="list-group-item media" href="#">
                                <div class="pull-left p-relative">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/3.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">Robert Taylor</div>
                                    <small class="lg-item-text">Availble</small>
                                </div>
                            </a>
    
                            <a class="list-group-item media" href="#">
                                <div class="pull-left p-relative">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/4.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">John Smith</div>
                                    <small class="lg-item-text">Availble</small>
                                </div>
                            </a>
    
                            <a class="list-group-item media" href="#">
                                <div class="pull-left">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">Tim Booth</div>
                                    <small class="lg-item-text">Last seen 10 days ago</small>
                                </div>
                            </a>
                            
                            <a class="list-group-item media" href="#">
                                <div class="pull-left p-relative">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/6.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">William James</div>
                                    <small class="lg-item-text">Available</small>
                                </div>
                            </a>
    
                            <a class="list-group-item media" href="#">
                                <div class="pull-left">
                                    <img class="lg-item-img" src="<?php echo base_url(); ?>/assets/V2/dist/images/profile-pics/7.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lg-item-heading">Paul Graham</div>
                                    <small class="lg-item-text">Last seen 7 hours ago</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
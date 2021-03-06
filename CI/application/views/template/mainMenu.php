<div class="leftpanel">
    <div class="leftpanelinner">

      <!-- ################## LEFT PANEL PROFILE ################## -->

      <div class="media leftpanel-profile">
        <div class="media-left">
          <a href="#">
            <img src="includes/admin/images/photos/loggeduser.png" alt="" class="media-object img-circle">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Elen Adarna <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"></a></h4>
        </div>
      </div><!-- leftpanel-profile -->

      <ul class="nav nav-tabs nav-justified nav-sidebar">
        <li class="tooltips active" data-toggle="tooltip" title="" data-original-title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h" data-original-title="" title=""></i></a></li>
        <li class="tooltips" data-toggle="tooltip" title="" data-original-title="Log Out" aria-describedby="tooltip491458"><a href="signin.html"><i class="fa fa-sign-out"></i></a></li>
      </ul>

      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">

          <h5 class="sidebar-title">Main Menu</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li><a href="<?php echo base_url(); ?>project_management/project/showProject"><i class="fa fa-check-square"></i> <span>Projects</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>product_management/product/showProduct"><i class="fa fa-suitcase"></i> <span>Products</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>user_management/customer/showCustomer"><i class="fa fa-user"></i> <span>Customers</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>user_management/agent/showAgent"><i class="fa fa-user"></i> <span>Agents</span></a></li>
            <li><a href="<?php echo base_url(); ?>user_management/investor/showInvestor"><i class="fa fa-user"></i> <span>Investors</span></a></li>
            <li><a href="<?php echo base_url(); ?>income/showIncome"><i class="fa fa-user"></i> <span>Income</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>expense/showExpense"><i class="fa fa-user"></i> <span>Expense</span></a>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>Reports</span></a>
              <ul class="children" style="display: none;">
                  <li><a href="asset-manager.html">Income</a></li>
                  <li><a href="people-directory.html">Expense</a></li>
                  <li><a href="timeline.php">Customers</a></li>
                  <li><a href="profile.html">Files</a></li>
                  <li><a href="blank.html">Documents</a></li>
                </ul>
            </li>
          </ul>
        </div><!-- tab-pane -->

      </div><!-- tab-content -->

    </div><!-- leftpanelinner -->
  </div>
  <div class="mainpanel">
    <div class="contentpanel">
      <?php $this->load->view($fileToLoad);?>
    </div>
  </div>

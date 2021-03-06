

 <!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- View Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Daily Data Details</h4>
      </div>
      <div class="modal-body addBody">
        <form id="basicForm" action="" method="post" class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-3 control-label">Project Name<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="available_space" value="" class="form-control" placeholder="" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Project Location/Address</label>
                  <div class="col-sm-8">
                    <textarea rows="5" class="form-control" name="notes" placeholder="Type  address..." ></textarea>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
                    <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
                  </div>
                </div>

              </form>

      </div>

    </div>

  </div>

</div>
<!-- END Modal -->

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="basic-tables.html">Projects</a></li>
      </ol>
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 people-list">
            <div class="people-options clearfix">
              <div class="btn-toolbar pull-left">
                <a href="<?php echo base_url(); ?>project_management/project/index"><button type="button" class="btn btn-success btn-quirk">Add New Project</button></a>
              </div>

              <div class="btn-group pull-right people-pager">
              <?php echo $links;?>
                <!-- <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button> -->
              </div>
              <span class="people-count pull-right">Showing <strong>1-10</strong> of <strong>34,404</strong> users</span>
            </div><!-- people-options -->
          </div>
        </div>

      <div class="panel">
        <div class="panel-body">
          <div class="table-responsive">
            <table id="dataTable1" class="table table-bordered table-striped-col">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Location</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th>Parent Project</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php foreach ($data as $project) {?>
              <tbody>
                <tr>
                  <td><?php echo $project->name ?></td>
                  <td><?php echo $project->location ?></td>
                  <td><?php echo $project->type ?></td>
                  <td><?php echo $project->category ?></td>
                  <td><?php echo $project->parent_project ?></td>
                  <td>
                    <div class="btn-group">
                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>project_management/project/showDetail/<?php echo $project->id ?>" id="" >Details</a></li>
                        <li><a class="editMe" href="<?php echo base_url(); ?>project_management/project/edit_project/<?php echo $project->id; ?>"  >Edit</a></li>
                        <li><a href="<?php echo base_url(); ?>project_management/project/delete_project/<?php echo $project->id; ?>" >Delete</a></li>
                      </ul>
                  </div><!-- btn-group -->
                  </td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div><!-- panel -->



<script src="js/quirk.js"></script>
<script>
$(document).ready(function() {

  'use strict';

  $('#dataTable1').DataTable();

  var exRowTable = $('#exRowTable').DataTable({
    responsive: true,
    'fnDrawCallback': function(oSettings) {
      $('#exRowTable_paginate ul').addClass('pagination-active-success');
    },
    'ajax': 'ajax/objects.txt',
    'columns': [{
      'class': 'details-control',
      'orderable': false,
      'data': null,
      'defaultContent': ''
    },
    { 'data': 'name' },
    { 'data': 'position' },
    { 'data': 'office' },
    { 'data': 'start_date'},
    { 'data': 'salary' }
    ],
    'order': [[1, 'asc']]
  });

  // Add event listener for opening and closing details
  $('#exRowTable tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = exRowTable.row( tr );

    if ( row.child.isShown() ) {
      // This row is already open - close it
      row.child.hide();
      tr.removeClass('shown');
    } else {
      // Open this row
      row.child( format(row.data()) ).show();
      tr.addClass('shown');
    }
  });

  function format (d) {
    // `d` is the original data object for the row
    return '<h4>'+d.name+'<small>'+d.position+'</small></h4>'+
    '<p class="nomargin">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
  }

  // Select2
  $('select').select2({ minimumResultsForSearch: Infinity });

});
</script>
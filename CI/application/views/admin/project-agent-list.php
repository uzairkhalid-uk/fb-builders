<div class="col-md-12 col-lg-12">
<h2 class="text-center">Link An Agent</h2> 
<div class="table-responsive">
  <table id="dataTable1" class="table table-bordered table-striped-col">
    <thead>
      <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Phone</th>
        <th>Email</th>
        <th>CNIC</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
    <?php if(isset($data)){
    foreach ($data as $agent) {?>
      <tr>
        <td><?php echo $agent->name ?></td>
        <td><?php echo $agent->address ?></td>
        <td><?php echo $agent->phoneno ?></td>
        <td><?php echo $agent->email ?></td>
        <td><?php echo $agent->cnic ?></td>
        <td>
          <div class="btn-group">
            <a href="../link_agent/<?php echo $this->uri->segment(4);?>/<?php echo $agent->id;?>" class="btn btn-success btn-quirk btn-wide mr5">Link</a>
            <a href="<?php echo base_url();?>project_management/project/showDetail/<?php echo $this->uri->segment(4);?>" type="reset" class="btn btn-quirk btn-wide btn-warning pull-right"><i class="fa fa-repeat"></i> Cancel </a>
          </div><!-- btn-group -->
        </td>
      </tr>
      <?php }}?>
    </tbody>
  </table>
</div>
</div>
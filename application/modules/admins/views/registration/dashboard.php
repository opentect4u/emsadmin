
            
<div class="col-lg-9 col-sm-12">

    <h3><strong>Organisations</strong></h3>
    <span class="confirm-div" style="color:green; float:right; "></span>

</div>



<div class="col-lg-12 container">

    <h3>
        <a href="<?php echo site_url("admin/organisation/add");?>" class="btn btn-primary" style="width: 100px; float:left;">Add</a>
        <div class="input-group" style="margin-left:75%;">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search..." id="search" style="z-index: 0;">
        </div>         
    </h3>

    <table class="table table-bordered table-hover">

        <thead>

            <tr>
            
                <th>Sl No.</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>State</th>
                <th>Option</th>

            </tr>

        </thead>

        <tbody> 

            <?php
                if($org){
                    $i=1;
                    foreach($org as $list){
            ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $list->org_name; ?></td>
                    <td><?php echo $list->org_phno; ?></td>
                    <td><?php echo $list->org_state; ?></td>
                </tr>

            <?php
                    }
                }
            ?>
        
        </tbody>

        <tfoot>

            <tr>
            
                <th>Sl No.</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>State</th>
                <th>Option</th>

            </tr>
        
        </tfoot>

    </table>
    
</div>
<div class="row container" >
    
    <div class="col-lg-9 col-sm-12">

        <h3><strong>Organisations</strong></h3>

    </div>

    <div class="col-lg-2 col-sm-12">

        <div class="alert alert-<?php echo $this->session->flashdata('msg')['status']; ?>"></div>    

    </div>

</div>

<div class="col-lg-12 container">

    <h3>
        <a href="<?php echo site_url("admin/organisation/add");?>" class="btn btn-primary" style="width: 100px; float:left;">Add</a>
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
                    <td valign="middle">
                        <a href="<?php echo site_url('admin/organisation/edit?id='.$list->org_id.''); ?>">
                            <img src="<?php echo base_url('admincss/images/b_edit.png'); ?>" alt="edit" border="0">
                        </a>
                    </td>
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

<script>
   
    $(document).ready(function() {

        $('.alert').hide();

        <?php if($this->session->flashdata('msg')['message']){ ?>

            $('.alert').html('<?php echo $this->session->flashdata('msg')['message']; ?> </button>').show();

        <?php } ?>

    });
    
</script>
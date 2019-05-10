<div class="wraper">      

    <div class="row">

        <form method="POST" 
            id="form"
            action="<?php echo site_url("admin/organisation/$url");?>" >

            <div class="col-md-8 container form-wraper" style="margin-left: 15%">
            
                <div class="form-header">
                
                    <h4>Organisation Entry</h4>
                
                </div>

                <div class="form-group row">

                    <label for="org_name" class="col-sm-2 col-form-label">Name:</label>

                    <div class="col-sm-10">

                        <input type="text"
                               class="form-control required"
                               name="org_name"
                               value="<?php echo $data->org_name; ?>"
                               id="org_name"
                            />

                    </div>

                </div>  

                <div class="form-group row">

                    <label for="start_date" class="col-sm-2 col-form-label">Start Date:</label>

                    <div class="col-sm-4">

                        <input type="date"
                               class="form-control required"
                               name="start_date"
                               value="<?php echo $data->start_dt; ?>"
                               id="start_date"
                            />

                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State:</label>

                    <div class="col-sm-4">

                        <select class="form-control required"
                                name="state"
                                value="<?php echo $data->org_state; ?>"
                                id="state"
                            >

                            <option value="">Select</option>

                            <?php
                                foreach($states as $list){
                            ?>
                                
                                <option value="<?php echo $list->id; ?>" 
                                <?php echo ($list->id == $data->org_state)? 'selected':''; ?>>
                                <?php echo $list->state; ?>
                                </option>
                                
                            <?php

                                }
                            ?>

                        </select>    

                    </div>

                </div>

                <div class="form-group row">

                    <label for="email" class="col-sm-2 col-form-label">Email:</label>

                    <div class="col-sm-4">

                        <input type="text"
                                class="form-control required"
                                name="email"
                                value="<?php echo $data->org_email; ?>"
                                id="email"
                            />

                    </div>

                    <label for="phn_no" class="col-sm-2 col-form-label">Phone No:</label>

                    <div class="col-sm-4">

                        <input type="text"
                                class="form-control required"
                                name="phn_no"
                                value="<?php echo $data->org_phno; ?>"
                                id="phn_no"
                            />

                    </div>

                </div>       

                <div class="form-group row">  

                    <label for="contact_person" class="col-sm-2 col-form-label">Contact Person:</label>

                    <div class="col-sm-4">

                        <input type="text"
                            class="form-control"
                            name="contact_person"
                            value="<?php echo $data->cnct_person; ?>"
                            id="contact_person"
                          />

                    </div>

                    <label for="designation" class="col-sm-2 col-form-label">Designation:</label>

                    <div class="col-sm-4">

                        <input type="text"
                                class="form-control"
                                name="designation"
                                value="<?php echo $data->designation; ?>"
                                id="designation"
                            />

                    </div>

                </div> 

                <div class="form-group row">  

                    <label for="user" class="col-sm-2 col-form-label">No of Users:</label>

                    <div class="col-sm-4">

                        <input type="text"
                                class="form-control"
                                name="user"
                                value="<?php echo $data->no_of_user; ?>"
                                id="user"
                          />

                    </div>

                </div> 

                <div class="form-group row">
                        
                    <label for="one_time_amt" class="col-sm-2 col-form-label">One Time Amount:</label>
                    
                    <div class="col-sm-4">
                        
                        <input type="text"
                            class="form-control"
                            name="one_time_amt"
                            value="<?php echo $data->one_time_amt; ?>"
                            id="one_time_amt"
                            />

                    </div>

                    <label for="monthly_amt" class="col-sm-2 col-form-label">Monthly Amount:</label>
                    
                    <div class="col-sm-4">
                        
                        <input type="text"
                            class="form-control"
                            name="monthly_amt"
                            value="<?php echo $data->monthly_amt; ?>"
                            id="monthly_amt"
                            />
                    </div>

                </div>

                <div class="form-group row">  
                    
                    <label for="org_status" class="col-sm-2 col-form-label">Org Status:</label>

                    <div class="col-sm-4">

                        <select class="form-control"
                                name="org_status"
                                id="org_status"
                            >
                            <option value="A" <?php echo ($data->org_status == 1)? 'selected':''; ?> >Active</option>
                            <option value="I" <?php echo ($data->org_status != 1)? 'selected':''; ?> >Inactive</option>

                        </select>

                    </div>

                </div> 

                <div class="form-group row">  
                    
                    <label for="website" class="col-sm-2 col-form-label">Website Link:</label>

                    <div class="col-sm-10">

                        <input  type="text"
                                class="form-control"
                                name="website"
                                value="<?php echo $data->org_website; ?>"
                                id="website"
                            >
                    </div>

                </div>

                <div class="form-group row">  
                    
                    <label for="address" class="col-sm-2 col-form-label">Address:</label>

                    <div class="col-sm-10">

                        <textarea class="form-control" name="address" id="address"><?php echo $data->org_addr; ?></textarea>

                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $data->org_id; ?>" />
                        <input type="submit" id="submit" class="btn btn-info" value="Save" />

                    </div>

                </div>

            </div>
        
        </form>    

    </div>

</div>
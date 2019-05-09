<div class="wraper">      

    <div class="row">

        <form method="POST" 
            id="form"
            action="<?php echo site_url("admin/organisation/add");?>" >

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
                               id="start_date"
                            />

                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State:</label>

                    <div class="col-sm-4">

                        <select class="form-control required"
                                name="state"
                                id="state"
                            >

                            <option value="">Select</option>

                            <?php
                                foreach($states as $list){
                            ?>
                                
                                <option value="<?php echo $list->id; ?>"><?php echo $list->state; ?></option>
                                
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
                                id="email"
                            />

                    </div>

                    <label for="phn_no" class="col-sm-2 col-form-label">Phone No:</label>

                    <div class="col-sm-4">

                        <input type="text"
                                class="form-control required"
                                name="phn_no"
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
                            id="contact_person"
                          />

                    </div>

                    <label for="designation" class="col-sm-2 col-form-label">Designation:</label>

                    <div class="col-sm-4">

                        <input type="text"
                                class="form-control"
                                name="designation"
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
                            id="one_time_amt"
                            />

                    </div>

                    <label for="monthly_amt" class="col-sm-2 col-form-label">Monthly Amount:</label>
                    
                    <div class="col-sm-4">
                        
                        <input type="text"
                            class="form-control"
                            name="monthly_amt"
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
                            <option value="A">Active</option>
                            <option value="I">Inactive</option>

                        </select>

                    </div>

                </div> 

                <div class="form-group row">  
                    
                    <label for="website" class="col-sm-2 col-form-label">Website Link:</label>

                    <div class="col-sm-10">

                        <input  type="text"
                                class="form-control"
                                name="website"
                                id="website"
                            >
                    </div>

                </div>

                <div class="form-group row">  
                    
                    <label for="address" class="col-sm-2 col-form-label">Address:</label>

                    <div class="col-sm-10">

                        <textarea class="form-control" name="address" id="address"></textarea>

                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-10">

                        <input type="submit" id="submit" class="btn btn-info" value="Save" />

                    </div>

                </div>

            </div>
        
        </form>    

    </div>

</div>
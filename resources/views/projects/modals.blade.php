

<div class="modal fade" id="modal-addvotehead">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Votehead</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
                <form role="form" method="post" action="/finance/public/votehead/store" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
                        <div class="form-group">
                          <div class="form-group">
                            <label>Votehead: </label>
                            <input type="text" name="votehead_name" id="votehead_name" class="form-control" placeholder="Votehead">
                        </div>
                        </div>
                        <label>Amount: </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar"></i></span>
                            </div>
                            <input type="number" name="amount_allocated" id="amount_allocated" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                    <input type="hidden" name="project_id" value="{{$project->project_id}}" >
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  
<div class="modal fade" id="modal-dispersfunds">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Issue Funds</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
                <form role="form" method="post" action="/finance/public/disbursment/store" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
  
                      

                       <div class="form-group">
                        <label>Funds Issued On</label>
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name="voucherdate">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                            </div><!-- input-group -->
                        </div>
                    </div>
  
                       <div class="form-group">
                        <div class="form-group">
                          <label>Votehead </label>
                          <select class="form-control select2" name="votehead_id" style="width: 100%;">
                            <option value=""></option>
                            @foreach ($voteheads as $votehead)
                              <option value="{{$votehead ->votehead_id}}">{{$votehead ->votehead_name}}</option>
                            @endforeach
                            
                        </select>
                      </div>
                      </div>
                        <label>Amount </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar"></i></span>
                            </div>
                            <input type="number" name="debit" id="debit" class="form-control" placeholder="Amount">
                        </div>
  
                        <div class="form-group">
                          <div class="form-group">
                            <label>Narration </label>
                            <input type="text" name="narration" id="narration" class="form-control" placeholder="Narration">
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                              <label>Paid To </label>
                              <input type="text" name="paid_to" id="paid_to" class="form-control" placeholder="Paid To">
                          </div>
                          </div>
                        

                        <div class="form-group">
                            <div class="form-group">
                              <label>Reference </label>
                              <input type="text" name="chequeno" id="chequeno" class="form-control" placeholder="Cheque No">
                          </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                    <input type="hidden" name="project_id" value="{{$project->project_id}}" >
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>



  <div class="modal fade" id="modal-addactivity">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Critical Milestone</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
                <form role="form" method="post" action="/finance/public/activity/store" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
                        <div class="form-group">
                          <div class="form-group">
                            <label>Activity Name </label>
                            <input type="text" name="activityname" id="activityname" class="form-control" placeholder="Activity Name">
                        </div>
                        </div>

                        

                        
                        
                        <div class="form-group">
                            <label>Start Date</label>
                            <div class="input-group date" id="projectstartdate" data-target-input="nearest">
                                <input type="text" name="start_date" class="form-control datetimepicker-input" data-target="#projectstartdate"/>
                                <div class="input-group-append" data-target="#projectstartdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                           </div>

                           <div class="form-group">
                            <label>Deadline Date</label>
                            <div class="input-group date" id="projectenddate" data-target-input="nearest">
                                <input type="text" name="deadline_date" class="form-control datetimepicker-input" data-target="#projectenddate"/>
                                <div class="input-group-append" data-target="#projectenddate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                           </div>

                </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                    <input type="hidden" name="project_id" value="{{$project->project_id}}" >
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>





  <div class="modal fade" id="modal-markactivity">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mark Milestone Complete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
                <form role="form" method="post" action="/finance/public/activity/update/1" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
                       
                        <div class="form-group">
                            <div class="form-group">
                              <label>Activity Name </label>
                              <input type="text" name="userd" id="userd" disabled class="form-control" >
                          </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="form-group">
                                <label for="curstatus" class="col-sm-2 col-form-label">Status</label>
                                <select class="form-control select2" name="curstatus" id="curstatus" style="width: 100%;">
                                    <option value="ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="onhold">On Hold</option>
                                </select>
                            </div>
                        </div>

        
                        
                        <div class="form-group">
                            <label>Date Completed</label>
                            <div class="input-group date" id="activityenddate" data-target-input="nearest">
                                <input type="text" name="activityenddate" class="form-control datetimepicker-input" data-target="#activityenddate"/>
                                <div class="input-group-append" data-target="#activityenddate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                           </div>
                </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                    <input type="hidden" name="userId" id="userId" class="form-control" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>




  


  <div class="modal fade" id="modal-uploadexcel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">UPLOAD EXCEL FROM DBAMS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
                <form role="form" method="post" action="/finance/public/disbursment/uploadexcel" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
  
  
                        <div class="form-group">
                          <div class="form-group">
                            <label>Upload Excel/Csv from DBAMS </label>
                            <input type="file" accept=".xls,.xlsx,.csv" name="import_file" id="import_file" class="form-control" size="150">
                        </div>

                        
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                        <input type="hidden" name="project_id" value="{{$project->project_id}}" >
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>





  
<div class="modal fade" id="modal-assignvotehead">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Assign Vote Head</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/finance/public/viewproject/updatevoteheads/1" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
                        <div class="form-group">
                            <div class="form-group">
                              <label>Narration </label>
                              <input type="text" name="narration" id="narration" disabled class="form-control" >
                          </div>
                          </div>
                       <div class="form-group">
                        <div class="form-group">
                          <label>Votehead </label>
                          <select class="form-control select2" name="votehead_id" style="width: 100%;">
                            <option value=""></option>
                            @foreach ($voteheads as $votehead)
                              <option value="{{$votehead ->votehead_id}}">{{$votehead ->votehead_name}}</option>
                            @endforeach
                        </select>
                      </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                        <input type="hidden" name="disbursmentid" id="disbursmentid" class="form-control" >
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  <div class="modal fade" id="modal-edittransaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Transaction</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
                <form role="form" method="post" action="/finance/public/disbursment/edit/1" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="box-body"> 
                   
                        <label>Amount </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar"></i></span>
                            </div>
                            <input type="number" name="debit" id="debit" class="form-control" >
                        </div>
  
                        <div class="form-group">
                            <div class="form-group">
                              <label>Narration </label>
                              <input type="text" name="narration" id="narration" disabled class="form-control" >
                          </div>
                          </div>

                        <div class="form-group">
                            <div class="form-group">
                              <label>Paid To </label>
                              <input type="text" name="paid_to" id="paid_to" class="form-control" >
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                              <label>Cheque No / Ref </label>
                              <input type="text" name="chequeno" id="chequeno" class="form-control" >
                          </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                    <input type="hidden" id="disbursment_id" name="disbursment_id" >
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>           
            </div>
  
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  
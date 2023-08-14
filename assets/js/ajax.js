
//ApproveRequest
function approveRequest() {   
    cid=arguments[0];
    Swal.fire({
      title: 'Are you sure?',
      text: "You're going to approve request!",   
      showCancelButton: true,
      confirmButtonColor: "#4CBB17",
      confirmButtonText: 'Yes'
          }
        ).then((result) => {
        if (result['isConfirmed']){      
          $.ajax({
                  url:"approveRequest.php",
                  method:"POST",                 
                  data:{id: cid},
                  enctype: 'multipart/form-data',                                             
                  success:function(data){                                        
                  if(data == 1)
                  {
                      Swal.fire({
                          icon: "success",
                          text: "Request Approved...",
                          type: "success",
                          timer: 2000,
                          showConfirmButton: false
                          })
                  setTimeout(function(){ location.reload(); },100);	 
                  }                      
                  else{
                      Swal.fire({
                          type: "Error!",
                          text:'Try again later...',
                          icon:'error'
                          })
                  }
                  },
                  error:function(exception){
                  console.log('error');
                  console.log(exception);
                  }
               });
          //window.location.href="phpaction/removeAccount.php?id="+x;			
        }
        else{
            console.log("back");
            return false;
        }	
    })		
}

//RejectRequest
function rejectRequest() {   
    cid=arguments[0];
    Swal.fire({
      title: 'Are you sure?',
      text: "You're going to reject request!",   
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: 'Yes'
          }
        ).then((result) => {
        if (result['isConfirmed']){      
          $.ajax({
                  url:"rejectRequest.php",
                  method:"POST",                 
                  data:{id: cid},
                  enctype: 'multipart/form-data',                                             
                  success:function(data){                                        
                  if(data == 1)
                  {
                      Swal.fire({
                          icon: "success",
                          text: "Request Denied...",
                          type: "success",
                          timer: 2000,
                          showConfirmButton: false
                          })
                  setTimeout(function(){ location.reload(); },100);	 
                  }                      
                  else{
                      Swal.fire({
                          type: "Error!",
                          text:'Try again later...',
                          icon:'error'
                          })
                  }
                  },
                  error:function(exception){
                  console.log('error');
                  console.log(exception);
                  }
               });
          //window.location.href="phpaction/removeAccount.php?id="+x;			
        }
        else{
            console.log("back");
            return false;
        }	
    })		
}

// AddTimetable
$("#saveTimetable").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // alert("1");    
    let myform = document.getElementById("saveTimetable");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "saveTimetable.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "Timetable updated...",                    
                    timer: 2000,
                    showConfirmButton: false
                  })
                // setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Already present...',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});




//Add Leave Request
$("#requestLeaveFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // alert("1");
    let myform = document.getElementById("requestLeaveFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "addLeaveRequest.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "Your Request submitted... Waiting for approval...",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                  })
                setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Redundant...',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});

// AddTodaySyllabus
$("#syllabusCompletionFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    alert("1");
    let myform = document.getElementById("syllabusCompletionFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "addSyllabusCompletion.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            // alert(data);
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "Noted about syllabus completion",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                  })
                setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Already Noted..',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});



//AddExpense
$("#addExpenseFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // alert("1");
    let myform = document.getElementById("addExpenseFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "save_expenses.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "Expense added...",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                  })
                setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Redundant...',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});

// ShowExpense
function editExpense(){
    var id=arguments[0];
    // alert(id);
    $.ajax({
        method: "POST",        
        url: "showExpense.php",
        data: {id:id}, // serializes the form's elements.        
        success: function(result){
            var data = jQuery.parseJSON(result);            
            $('#modalForEditExpense').modal('show');
            $('#edit_date1').val(data.date1);
            $('#edit_ex_type').val(data.ex_type);
            $('#edit_description').val(data.description);
            $('#edit_amount').val(data.amount);               
            $('#edit_id').val(id);                                    
        }
    });
}


//EditExpense
$("#editExpenseFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // alert("1");
    let myform = document.getElementById("editExpenseFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "editExpense.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "Expense updated...",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                  })                
                setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Redundant...',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});




//DeleteExpense
function deleteExpense() {   
    cid=arguments[0];
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",   
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: 'Yes, delete it!'
          }
        ).then((result) => {
        if (result['isConfirmed']){      
          $.ajax({
                  url:"deleteExpense.php",
                  method:"POST",                 
                  data:{id: cid},
                  enctype: 'multipart/form-data',                                             
                  success:function(data){                                        
                    if(data == 1)
                    {
                        Swal.fire({
                            icon: "success",
                            text: "Expense deleted...",
                            type: "success",
                            timer: 2000,
                            showConfirmButton: false
                            })
                    setTimeout(function(){ location.reload(); },2000);	 
                    }                      
                    else{
                        Swal.fire({
                            type: "Error!",
                            text:'Try again later...',
                            icon:'error'
                            })
                    }
                    },
                    error:function(exception){
                    console.log('error');
                    console.log(exception);
                    }
                 });
            //window.location.href="phpaction/removeAccount.php?id="+x;			
          }
          else{
              console.log("back");
              return false;
          }	
        })		
      }
    
    function submitImport(){
        
        $('#import').submit();
    }

    
//ApproveLeave
function approveRequest() {   
    cid=arguments[0];
    Swal.fire({
      title: 'Are you sure?',
      text: "You're going to approve attendance!",   
      showCancelButton: true,
      confirmButtonColor: "#4CBB17",
      confirmButtonText: 'Yes'
          }
        ).then((result) => {
        if (result['isConfirmed']){      
          $.ajax({
                  url:"approveLeave.php",
                  method:"POST",                 
                  data:{id: cid},
                  enctype: 'multipart/form-data',                                             
                  success:function(data){                                        
                  if(data == 1)
                  {
                      Swal.fire({
                          icon: "success",
                          text: "Attendance Approved...",
                          type: "success",
                          timer: 2000,
                          showConfirmButton: false
                          })
                  setTimeout(function(){ location.reload(); },100);	 
                  }                      
                  else{
                      Swal.fire({
                          type: "Error!",
                          text:'Try again later...',
                          icon:'error'
                          })
                  }
                  },
                  error:function(exception){
                  console.log('error');
                  console.log(exception);
                  }
               });
          //window.location.href="phpaction/removeAccount.php?id="+x;			
        }
        else{
            console.log("back");
            return false;
        }	
    })		
}

//RejectLeave
function rejectRequest() {   
    cid=arguments[0];
    Swal.fire({
      title: 'Are you sure?',
      text: "You're going to reject attendance!",   
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: 'Yes'
          }
        ).then((result) => {
        if (result['isConfirmed']){      
          $.ajax({
                  url:"rejectLeave.php",
                  method:"POST",                 
                  data:{id: cid},
                  enctype: 'multipart/form-data',                                             
                  success:function(data){                                        
                  if(data == 1)
                  {
                      Swal.fire({
                          icon: "success",
                          text: "Attendance Denied...",
                          type: "success",
                          timer: 2000,
                          showConfirmButton: false
                          })
                  setTimeout(function(){ location.reload(); },100);	 
                  }                      
                  else{
                      Swal.fire({
                          type: "Error!",
                          text:'Try again later...',
                          icon:'error'
                          })
                  }
                  },
                  error:function(exception){
                  console.log('error');
                  console.log(exception);
                  }
               });
          //window.location.href="phpaction/removeAccount.php?id="+x;			
        }
        else{
            console.log("back");
            return false;
        }	
    })		
}


// ShowProject
function editProject(){
    var id=arguments[0];
    // alert(id);
    $.ajax({
        method: "POST",        
        url: "showProject.php",
        data: {p_id:id}, // serializes the form's elements.        
        success: function(result){
            var data = jQuery.parseJSON(result);            
            $('#modalForEditProject').modal('show');
            $('#edit_date1').val(data.date1);                           
            $('#edit_p_id').val(id);                                    
        }
    });
}


//EditProject
$("#editProjectFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // alert("1");
    let myform = document.getElementById("editProjectFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "editProject.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "Project updated...",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                  })                
                setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Redundant...',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});


// ShowPayslip
function editPayslip(){
    var id=arguments[0];
    // alert(id);
    $.ajax({
        method: "POST",        
        url: "showPayslip.php",
        data: {e_id:id}, // serializes the form's elements.        
        success: function(result){
            var data = jQuery.parseJSON(result);            
            $('#modalForEditPayslip').modal('show');
            $('#edit_name').val(data.name);  
            $('#edit_supervisor').val(data.supervisor);
            $('#edit_designation').val(data.designation);
            $('#edit_salary').val(data.salary);                         
            $('#edit_e_id').val(id);                                    
        }
    });
}


//EditPayslip
$("#editPayslipFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // alert("1");
    let myform = document.getElementById("editPayslipFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "editPayslip.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            if(data == 1){
                Swal.fire({
                    icon: "success",
                    text: "PaySlip updated...",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                  })                
                setTimeout(function(){ location.reload(); },1000);	 
            }
            else if(data == 2){                
                Swal.fire({
                    type: "Error!",
                text:'Redundant...',
                icon:'error'
                })
            }
            else{
                Swal.fire({
                    type: "Error!",
                text:'Try again later...',
                icon:'error'
                })
            }
        }
    });   
});



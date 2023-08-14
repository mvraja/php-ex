$( document ).ready(function() {
    $.ajax({
        url:"phpaction/selectDepartment.php",
        method:"POST",
        data:{},
        success:function(data)
        {
            $('#department').html(data);            
        }
    });
});
$('#leave_type').on('change', function() {    
    if( this.value == 'L'){        
        $('#from_time').prop('required',false);
        $('#to_time').prop('required',false);
        $('#to_date_div').show();
        $('#from_time_div').hide();
        $('#to_time_div').hide();
        $("#to_date").prop('required',true);
    }
    else
    {
        $("#to_date").prop('required',false);        
        $('#to_date_div').hide();
        $('#from_time_div').show();
        $('#to_time_div').show();
        $('#from_time').prop('required',true);
        $('#to_time').prop('required',true);
    }
});

// AddLeaveRequest
$("#requestLeaveFrm").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    
    let myform = document.getElementById("requestLeaveFrm");
    let fd = new FormData(myform );
    $.ajax({
        method: "POST",
        dataType:"json",
        url: "phpaction/addLeaveRequest.php",
        data: fd, // serializes the form's elements.
        processData: false,
        contentType: false,
        success: function(data)
        {
            // alert(data);
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
                text:'Leave request submitted already...',
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
        url: "phpaction/addSyllabusCompletion.php",
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
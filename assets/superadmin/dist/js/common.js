// JavaScript Document
var site_url = location.protocol + "//" + location.hostname + (location.port && ":" + location.port) + "/steelez-code/";

$('#state').change(function(){
    var stateid = $(this).val(); 
    $.ajax({
      url: site_url+"common/getAjaxCity",
      type: 'POST',
      data: 'StateID='+stateid,
      success: function(result){ 
          $('#city').html(result);
      }
    });
});

$('#ClientID').change(function(){
    var ClientID = $(this).val();
    $.ajax({
      url: site_url+"common/getAjaxBranch",
      type: 'POST',
      data: 'ClientID='+ClientID,
      success: function(result){ 
          $('#BranchID').html(result);
      }
    });
});

$(".ajax_delete").on("click",function(){
    var id = $(this).attr("data-value");
    var split = id.split("_");
    //alert(split[0]);
    var table = $(this).attr("data-table");
    var result = confirm("Want to delete?");
    if(result) {
        $.ajax({
            url: site_url+"common/ajaxDelete",
            type: "POST",
            data: split[0]+"="+split[1]+"&table="+table,
            success: function(result){
                if(result==1)
                {
                    $("#"+table+"_"+split[1]).remove();
                }
            }
        });
    }
});

$(".import_csv").on("click",function(){
    $("#csv_popup").modal("show");
});
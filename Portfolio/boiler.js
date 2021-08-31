$("#frmUserForm").submit(function(){
    saveUserForm();
    return true;
});

function checkUserForm(){
    var d=new Date();
    var month=d.getMonth()+1;
    var date=d.getDate();
    var year=d.getFullYear();
    var currentDate=year+'/'+((''+month).length<2 ? '0':'')+month+'/'+((''+date).length<2 ? '0':'')+date;
    if(($('#txtManufacturer').val()!="")&&($('#datPurchaseDate').val()!="")&&($('#datPurchaseDate').val()<=currentDate)&&($('#txtBoilerID').val()!="")&&($('#txtMaxTemperature').val()!="")&&($('#txtMaxPressure').val()!="")){
        return true;
    }else{
        return false;
    }
}

function saveUserForm(){
    if (checkUserForm()){
        var user= {
            "Manufacturer" : $('#txtManufacturer').val(),
            "DateOfPurchase" : $('#datPurchaseDate').val(),
            "BoilerID"     : $('#txtBoilerID').val(),
            "MaxTemperature": $('#txtMaxTemperature').val(),
            "MaxPressure"  : $('#txtMaxPressure').val(),
            "NewPassword"  : $('#changePassword').val()
        };
        try{
            localStorage.setItem("user", JSON.stringify(user));
            alert("Saving Information");
            $.mobile.changePage("#pageMenu");
            window.location.reload();
        }
        catch(e){
            if (window.navigator.vendor==="Google Inc."){
                if(e==DOMException.QUOTA_EXCEEDED_ERR){
                    alert("Error: Local Storage limit exceeds");
                }
            }
            else if(e==QUOTA_EXCEEDED_ERR){
                alert("Error: Saving to local storage");
            }
            console.log(e);
        }
    }
    else{
        alert("Please complete the form properly.");
    }
}
function showUserForm(){
    try{
        var user = JSON.parse(localStorage.getItem("user"));
    }
    catch(e){
        if (window.navigator.vendor==="Google Inc."){
            if(e==DOMException.QUOTA_EXCEEDED_ERR){
                alert("Error: Local Storage limit exceeds");
            }
        }
        else if(e==QUOTA_EXCEEDED_ERR){
            alert("Error: Saving to local storage");
        }
        console.log(e);
    }
    if(user!=null){
        $("#txtManufacturer").val(user.Manufacturer);
        $("#datPurchaseDate").val(user.DateOfPurchase);
        $("#txtBoilerID").val(user.BoilerID);
        $("#MaxTemperature").val(user.MaxTemperature);
        $("#MaxPressure").val(user.MaxPressure);
        $("#changePassword").val(user.NewPassword);
    }
}
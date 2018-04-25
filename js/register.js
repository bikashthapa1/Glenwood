$(document).ready(function(){
    $flag=1;
    $("#myName").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_name").text("* You have to enter your full name!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_name").text("");

        }
   });
    $("#pwd").focusout(function(){
        $pho =$("#pwd").val();
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_pwd").text("* You have to enter your password!");
        }
        else if($pho.length<6) {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled',true);
            $("#error_pwd").text("*Password should be greater than 6 characters!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_pwd").text("");
        }
   });

   $("#confirmpwd").focusout(function(){
       $rpwd=$("#pwd").val();
    if($(this).val()==''){
        $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled',true);
            $("#error_confirmpwd").text("*Please enter value!");
    }

    else if($(this).val()!=$rpwd){
        $(this).css("border-color", "#FF0000");
        $('#submit').attr('disabled',true);
        $("#error_confirmpwd").text("*Password do not match!");
    }

   
    else
    {
        $(this).css("border-color", "#2eb82e");
        $('#submit').attr('disabled',false);
        $("#error_confirmpwd").text("");
    }
});
    $("#dob").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_dob").text("*Please enter your appointment Date!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_dob").text("");
        }
   });
    $("#gender").focusout(function(){
        $(this).css("border-color", "#2eb82e");
   
   });
    $("#email").focusout(function(){
        $em=$('#email').val();
        $emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_email").text("* You have to enter your email!");
        }

        else if(!$emailReg.test($em)){
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled',true);
            $("#error_email").text("* You have to enter valid email!");
        }
        else
        {
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_email").text("");

        }
        });
    $("#phone").focusout(function(){
        $pho =$("#phone").val();
         if ($pho.length!=10)
        {   
                $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        }
        else if(!$.isNumeric($pho))
        {
                $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_phone").text("* Phone Number Should Be Numeric");  
        }
        else{
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_phone").text("");
        }

    });

    $("#position").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_position").text("* You have to enter your Position!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_position").text("");

        }
   });



       $( "#submit" ).click(function() {
           if($("#myName" ).val()=='')
           {
            $("#myName").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_name").text("* You have to enter your first name!");
        }
        if($("#email" ).val()=='')
        {
         $("#email").css("border-color", "#FF0000");
             $('#submit').attr('disabled',true);
              $("#error_email").text("* You have to enter your email!");
     }

        if($("#pwd" ).val()=='')
           {
            $("#pwd").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_pwd").text("* You have to enter your Password!");
        }

        if($('#confirmpwd').val()=='')
        {
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_confirmpwd").text("*Please enter value!");
        }
           if($("#dob" ).val()=='')
           {
            $("#dob").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_dob").text("* You have to enter your Date of Enrollment!");
        }
          
        if($("#phone" ).val()=='')
           {
            $("#phone").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_phone").text("* You have to enter your Phone Number!");
        }

        if($("#position" ).val()=='')
        {
         $("#position").css("border-color", "#FF0000");
             $('#submit').attr('disabled',true);
              $("#error_position").text("* You have to enter your position!");
     }
        });


    
});
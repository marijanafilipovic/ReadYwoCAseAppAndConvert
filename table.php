<?php include_once 'secondCase.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <title>API</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="demo-header"></div>
<div class="container">



    <div class="row">
        <form action="pdf.php" method="POST">
            <div class="row">
                <input type="submit" name="submit" class="btn btn-primary" value="PDF generate" />
                <table class= "table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

$app = new secondCase();
$app_choice = $app->getData();
                 //   var_dump( $app_choice );
if($app_choice > 0){
                        $id = 1;
                      //  $id++;
//var_dump($app_choice);
    echo'<tr>
        <td>Nationality<br /><span class= "xedit" id="' . $id . '" key="nationality"><input type="text" name="nationality" value="' . $nationality = $app_choice['nationality'] . '"></span></td>
        <td>Russian Nat<br /><span class= "xedit" id="' . $id . '" key="russ_nationality"><input type="text" name="russian_nationality" value="' . $russian_nationality = $app_choice['russian_nationality'] . '"></span></td>
        <td>Russ Nat Date<br /><span class= "xedit" id="' . $id . '" key="russ_nationality_date"><input type="text" name="RUSSIAN_NATIONALITY_DATE" value="' . $russian_nationality_date = $app_choice['RUSSIAN_NATIONALITY_DATE'] . '"></span></td>
        <td>Russ Nat Reason<br /><span class= "xedit" id="' . $id . '" key="russ_nationality_reason"><input type="text" name="RUSSIAN_NATIONALITY_REASON" value="' . $russian_nationality_reason = $app_choice['RUSSIAN_NATIONALITY_REASON'] . '"></span></td>
                </tr><tr>
        <td>Purpose section<br /><span class= "xedit" id="' . $id . '" key="purpose_section"><input type="text" name="purpose_section" value="' . $purpose_section = $app_choice['purpose_section'] . '"></span></td>
        <td>Purpose<br /><span class= "xedit" id="' . $id . '" key="purpose"><input type="text" name="purpose" value="' . $purpose = $app_choice['purpose'] . '"></span></td>
        <td>Visa type<br /><span class= "xedit" id="' . $id . '" key="visa_type"><input type="text" name="visa_type" value="' . $visa_type = $app_choice['Visa_type'] . '"></span></td>
        <td>Entries<br /><span class= "xedit" id="' . $id . '" key="entries"><input type="text" name="entries" value="' . $entries = $app_choice['entries'] . '"></span></td>
                </tr><tr>
        <td>Enties date<br /><span class= "xedit" id="' . $id . '" key="entry_date"><input type="text" name="entry_date" value="' . $entry_date = $app_choice['entry_date'] . '"></span></td>
        <td>Exit date<br /><span class= "xedit" id="' . $id . '" key="exit_date"><input type="text" name="exit_date" value="' . $exit_date = $app_choice['exit date'] . '"></span></td>
        <td>Surname<br /><span class= "xedit" id="' . $id . '" key="surname"><input type="text" name="surname" value="' . $surname = $app_choice['surname'] . '"></span></td>
        <td>First Name<br /><span class= "xedit" id="' . $id . '" key="first_name"><input type="text" name="first_name" value="' . $first_name = $app_choice['first_name'] . '"></span></td>
                </tr><tr>
        <td>Other name<br /><span class= "xedit" id="' . $id . '" key="other_name"><input type="text" name="other_name" value="' . $other_name = $app_choice['other_name'] . '"></span></td>
        <td>That name<br /><span class= "xedit" id="' . $id . '" key="that_name"><input type="text" name="that_name" value="' . $that_name = $app_choice['that_name'] . '"></span></td>
        <td>Sex<br /><span class= "xedit" id="' . $id . '" key="sex"><input type="text" name="sex" value="' . $sex = $app_choice['sex'] . '"></span></td>
        <td>Birth date<br /><span class= "xedit" id="' . $id . '" key="birth_date"><input type="text" name="birth_date" value="' . $birth_date = $app_choice['birth_date'] . '"></span></td>
                </tr><tr>
        <td>Birth city<br /><span class= "xedit" id="' . $id . '" key="birth_city"><input type="text" name="birth_city" value="' . $birth_city = $app_choice['birth_city'] . '"></span></td>
        <td>Born in R<br /><span class= "xedit" id="' . $id . '" key="born_in_Russia"><input type="text" name="born_in_Russia" value="' . $born_in_Russia = $app_choice['born_in_Russia'] . '"></span></td>
         <td>Emigration dat<br /><span class= "xedit" id="' . $id . '" key="EMIGRATION_DATE"><input type="text" name="EMIGRATION_DATE" value="' . $emigration_date = $app_choice['EMIGRATION_DATE'] . '"></span></td>
         <td>EMIGRATION COUNTRY<br /><span class= "xedit" id="' . $id . '" key="EMIGRATION_COUNTRY"><input type="text" name="EMIGRATION_COUNTRY" value="' . $emigration_country = $app_choice['EMIGRATION_COUNTRY'] . '"></span></td>
               </tr><tr>
        <td>Passport number<br /><span class= "xedit" id="' . $id . '" key="passport_number"><input type="text" name="passport_number" value="' . $passport_number = $app_choice['passport_number'] . '"></span></td>
        <td>Issue date<br /><span class= "xedit" id="' . $id . '" key="issue_date"><input type="text" name="issue_date" value="' . $issue_date = $app_choice['issue_date'] . '"></span></td>
        <td>Expiry date<br /><span class= "xedit" id="' . $id . '" key="expiry_date"><input type="text" name="expiry_date" value="' . $expiry_date = $app_choice['expiry_date'] . '"></span></td>
        <td>Visiting institution<br /><span class= "xedit" id="' . $id . '" key="visiting_institution"><input type="text" name="visiting_institution" value="' . $visiting_institution = $app_choice['visiting_institution'] . '"></span></td>
           </tr><tr>
        <td>Organization name<br /><span class= "xedit" id="' . $id . '" key="organization_name"><input type="text" name="organization_name" value="' . $organization_name = $app_choice['organization_name'] . '"></span></td>
        <td>Address<br /><span class= "xedit" id="' . $id . '" key="address"><input type="text" name="address" value="' . $address = $app_choice['address'] . '"></span></td>
        <td>Refreence num<br /><span class= "xedit" id="' . $id . '" key="reference_number"><input type="text" name="reference_number" value="' . $reference_number = $app_choice['reference_number'] . '"></span></td>
        <td>Conf numb<br /><span class= "xedit" id="' . $id . '" key="conformation_number"><input type="text" name="conformation_number" value="' . $conformation_number = $app_choice['conformation_number'] . '"></span></td>
                </tr><tr>
        <td>Itinerary<br /><span class= "xedit" id="' . $id . '" key="itinerary"><input type="text" name="itinerary" value="' . $itinerary = $app_choice['Itinerary'] . '"></span></td>
        <td>Insurance details<br /><span class= "xedit" id="' . $id . '" key="insurance_details"><input type="text" name="insurance_details" value="' . $insurance_details = $app_choice['insurance_details'] . '"></span></td>
        <td>Insurance<br /><span class= "xedit" id="' . $id . '" key="insurance"><input type="text" name="insurance" value="' . $insurance = $app_choice['insurance'] . '"></span></td>
        <td>Previous visit<br /><span class= "xedit" id="' . $id . '" key="previous_visit"><input type="text" name="previous_visit" value="' . $previous_visit = $app_choice['previous_visit'] . '"></span></td>
                </tr><tr>
        <td>Previous visit num<br /><span class= "xedit" id="' . $id . '" key="PREVIOUSE_VISIT_NUMBER"><input type="text" name="PREVIOUS_VISIT_NUMBER" value="' . $p_visit_num = $app_choice['PREVIOUS_VISIT_NUMBER'] . '"></span></td>
        <td>Previous visit from<br /><span class= "xedit" id="' . $id . '" key="PRVIOUSE_VISIT_FROM"><input type="text" name="PRVIOUSE_VISIT_FROM" value="' . $p_visit_from = $app_choice['PREVIOUS_VISIT_FROM'] . '"></span></td>
        <td>Previous visit till<br /><span class= "xedit" id="' . $id . '" key="PERVIOUSE_VISIT_TILL"><input type="text" name="PERVIOUSE_VISIT_TILL" value="' . $p_visit_till = $app_choice['PREVIOUS_VISIT_TILL'] . '"></span></td>
        <td>Residential address<br /><span class= "xedit" id="' . $id . '" key="residential_address"><input type="text" name="residential_address" value="' . $residential_address = $app_choice['residential_address'] . '"></span></td>
                </tr><tr>
        <td>Your address<br /><span class= "xedit" id="' . $id . '" key="your_address"><input type="text" name="your_address" value="' . $your_address = $app_choice['your_address'] . '"></span></td>
        <td>Your phone<br /><span class= "xedit" id="' . $id . '" key="your_phone"><input type="text" name="your_phone" value="' . $your_phone = $app_choice['your_phone'] . '"></span></td>
        <td>Your fax<br /><span class= "xedit" id="' . $id . '" key="your_fax"><input type="text" name="your_fax" value="' . $your_fax = $app_choice['your_fax'] . '"></span></td>
        <td>Your email<br /><span class= "xedit" id="' . $id . '" key="your_email"><input type="text" name="your_email" value="' . $your_email = $app_choice['your_email'] . '"></span></td>
                </tr><tr>
        <td>Work study<br /><span class= "xedit" id="' . $id . '" key="work_study"><input type="text" name="work_study" value="' . $work_study = $app_choice['work_study'] . '"></span></td>
        <td>Employer name<br /><span class= "xedit" id="' . $id . '" key="employer_name"><input type="text" name="employer_name" value="' . $employer_name = $app_choice['employer_name'] . '"></span></td>
        <td>Position<br /><span class= "xedit" id="' . $id . '" key="position"><input type="text" name="position" value="' . $position = $app_choice['position'] . '"></span></td>
        <td>Work address<br /><span class= "xedit" id="' . $id . '" key="work_address"><input type="text" name="work_address" value="' . $work_address = $app_choice['work_address'] . '"></span></td>
                </tr><tr>
        <td>Work phone<br /><span class= "xedit" id="' . $id . '" key="work_phone"><input type="text" name="work_phone" value="' . $work_phone = $app_choice['work_phone'] . '"></span></td>
        <td>Work fax<br /><span class= "xedit" id="' . $id . '" key="work_fax"><input type="text" name="work_fax" value="' . $work_fax = $app_choice['work_fax'] . '"></span></td>
        <td>Work email<br /><span class= "xedit" id="' . $id . '" key="work_email"><input type="text" name="work_email" value="' . $work_email = $app_choice['work_email'] . '"></span></td>
        <td>Children<br /><span class= "xedit" id="' . $id . '" key="children"><input type="text" name="children" value="' . $children = $app_choice['children'] . '"></span></td>
           </tr><tr>
        <td>CHILDREN DATA<br /><span class= "xedit" id="' . $id . '" key="CHILDREN_DATA"><input type="text" name="CHILDREN_DATA" value="' . $children_data = $app_choice['CHILDREN_DATA'] . '"></span></td>
        <td>Insurance<br /><span class= "xedit" id="' . $id . '" key="insurance"><input type="text" name="insurance" value="' . $insurance = $app_choice['insurance'] . '"></span></td>
        <td>Relatives<br /><span class= "xedit" id="' . $id . '" key="relatives"><input type="text" name="relatives" value="' . $relatives = $app_choice['relatives'] . '"></span></td>
        <td>Relatives data<br /><span class= "xedit" id="' . $id . '" key="RELATIVES_DATA"><input type="text" name="RELATIVES_DATA" value="' . $relatives_data = $app_choice['RELATIVES_DATA'] . '"></span></td>
               </tr><tr>
        <td>Destination name<br /><span class= "xedit" id="' . $id . '" key="destionation_name"><input type="text" name="destionation_name" value="' . $destination_name = $app_choice['destination_name'] . '"></span></td>
        ';

}
                    ?>
        </form>
 </tr></tbody><tfoot></tfoot></table></div>

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-editable.js" type="text/javascript"></script>
    <script type="text/javascript">
      /*  jQuery(document).ready(function() {
            $.fn.editable.defaults.mode = 'popup';
            $('.xedit').editable();
            $(document).on('click','.editable-submit',function(){
                var x = $(this).closest('td').children('span').attr('id');
                var y = $('.input-sm').val();
                var z = $(this).closest('td').children('input');
                $.ajax({
                    url: "secondCase.php?id="+x+"&data="+y+'&key='+key,
                    type: 'GET',
                    success: function(s){
                        if(s == 'status'){
                            $(z).html(y);}
                        if(s == 'error') {
                            alert('Error Processing your Request!');}
                    },
                    error: function(e){
                        alert('Error Processing your Request!!');
                    }
                });
            });
        });
*/
    </script>
</div>
</div>
</div>
</div>
</body>
</html>
$(document).ready(function(){
 var rowIdx=0;
 var country=[];


    $('#image').change(function(){
        let reader = new FileReader();
     
        reader.onload = (e) => { 
          $('#preview-image-before-upload').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
       });

       //Add New Row
       $('#addBtn').on('click', function () {
        if(rowIdx<5){
            $('#tbody').append(`<tr id="R${++rowIdx}">
                  <td class="row-index text-center">
                   <div class="form-group  mb-2">
                            <input class="form-control" name='person_name[]' placeholder="Enter Person Name">
                    </div>
                  </td>
                   <td class="row-index text-center">
                   <div class="form-group">
                            <select class ="form-control" name="relation[]" >
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="grandfather">Grand Father</option>  
                            <option value="grandmother">Grand Mother</option>
                            </select>
                        </div>
                   </td>

                   <td class="row-index text-center">
                   <div class="form-group  mb-2">
                            <input class="form-control" name='contact[]' placeholder="Enter Mobile No.">
                    </div>
                   </td>

                    <td class="text-center">
                      <button class="btn btn-danger remove"
                        type="button">Remove Person</button>
                      </td>
                    </tr>`);
        }else{
            alert('Only 5 parents Allowed for Children');
        }
    });

    // remove a row.
    $('#tbody').on('click', '.remove', function () {
        var child = $(this).closest('tr').nextAll();
        child.each(function () {
            var id = $(this).attr('id');
            var idx = $(this).children('.row-index').children('p');
            var dig = parseInt(id.substring(1));
            idx.html(`Row ${dig - 1}`);
            $(this).attr('id', `R${dig - 1}`);
        });
        $(this).closest('tr').remove();
        rowIdx--;
    });

    //Validation on change
    $('#name').on('keyup',function(){ 
      if($(this).val().length<3){
        $('#name').css('border-color','red').css('border-width','2px');
      }else{
        $('#name').css('border-color','');
      }
    });


//Validation on click
$('#save').on('click',function(){
    let err=0;
    //Name Validation
    let name=$('#name').val();
    let dob=$('#dob').val();
    let classs=$('#class').val();
    let add=$('#add').val();
    let country_val=$('#country').val();
    let state_val=$('#state').val();
    let city=$('#city').val();
    let pincode=$('#pincode').val();

    if(name.length<3){
        $('#name').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#name').css('border-color','');  
    }

    if(!dob){
        $('#dob').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#dob').css('border-color','');  
    }

    if(classs==0){
        $('#class').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#class').css('border-color','');  
    }

    if(add.length<5){
        $('#add').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#add').css('border-color','');  
    }

    if(city.length<1){
        $('#city').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#city').css('border-color','');  
    }

    if(pincode.length!=7){
        $('#pincode').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#pincode').css('border-color','');  
    }

    if(country_val==0){
        $('#country').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#country').css('border-color','');  
    }

    if(state_val==0){
        $('#state').css('border-color','red').css('border-width','2px');
        err=1;
    }else{
        $('#state').css('border-color','');  
    }

    if(!err){
        $('#upload-data').submit();
    }
});

//fetch country and state
$.ajax({
    url: '/fetch-country',
    type: 'get',
    success: function (res) {
        if (res.code == 'success') {
            let country_html='<option value=0>Select Country </option>';
            country=res.data.countries;
            country.forEach(function(element){
                country_html+='<option value="'+element['country']+'">'+element['country']+'</option>';
            });
            $('#country').html(country_html);
        }
    }
});

4
$('#country').change(function(){
    let state_html='<option value=0>Select State</option>';
     let temp_country=$(this).val();
     country.forEach(function(element){
         if(element['country']==temp_country){
            element['states'].forEach(function(states){
                state_html+='<option value="'+states+'">'+states+'</option>';
            })
         }
     })
     $('#state').html(state_html);
});






















});
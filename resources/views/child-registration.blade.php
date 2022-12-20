<!DOCTYPE html>
<html lang="">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Children Entry</title>
  @include('bootstrap-file')
  <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 20px;
            }
        </style>
          <script src="{{url('/js/new_child.js')}}" type="text/javascript"></script>
           </head>
    <body>

    <form method="POST" enctype="multipart/form-data" id="upload-data" action="{{ url('dashboard') }}">
      <h1 style="text-align:center">New Children Registration</h1>
      @if(!empty($msg))
<p style="color:red; font-size:30px">{{$msg}} </p>
      @endif
    <div style="text-align:center" class="col-md-12 mb-2 center">
                  <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                      alt="preview image" style="height: 250px;width: 240px;" class="rounded-circle">

                      <div class="form-group">
                      <input type="file" name="image" placeholder="Choose image" id="image">
                  </div>
              </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input  name="name" class="form-control" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-3">
      <label for="dob">Date of Birth</label>
      <input type="date" name="dob" class="form-control" id="dob">
    </div>
    <div class="form-group col-md-3">
    <label for="class">Class</label>
    <select class ="form-control" name="class" id="class">
    <option value="0">Select Class</option>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>
        <option value="9">IX</option>
        <option value="10">X</option>
        <option value="11">XI</option>
        <option value="12">XII</option>
    </select>
  </div>
  </div>
 
  <div class="form-group">
    <label for="add">Address</label>
    <input type="text" name="Add" class="form-control" id="add" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="inputCity">Country</label>
      <select class="form-control" name="country" id="country">

      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="state">State</label>
      <select id="state" name="state" class="form-control">
        <option selected value="0">Select State</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="city">City</label>
      <input type="text" class="form-control" name="city" id="city">
    </div>
    
    <div class="form-group col-md-3">
      <label for="pincode">Zip</label>
      <input type="number" name="pincode" class="form-control" id="pincode" maxlength="7">
    </div>
  </div>

  <h2 style="text-align:center; padding-top:100px"> Parents Picked Up Data <h2>

  <div style="margin: 15px;" class="justify-content-between">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center col-3" style="font-weight: 400;font-size: 20px;">Person Name</th>
                                                    <th class="text-center col-3" style="font-weight: 400;font-size: 20px;">Relation</th>
                                                    <th class="text-center col-3" style="font-weight: 400;font-size: 20px;">Contact No.</th>
                                                    <th class="text-center col-2" style="font-weight: 400;font-size: 20px;">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                            <tr>
                  <td class="row-index text-center">
                   <div class="form-group  mb-2">
                            <input class="form-control" id="per_name" name='person_name[]' placeholder="Enter Person Name">
                    </div>
                  </td>
                   <td class="row-index text-center">
                   <div class="form-group">
                            <select class ="form-control" name="relation[]" id="per_rel">
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
                            <input class="form-control" name='contact[]' id="per_cont" placeholder="Enter Mobile No.">
                    </div>
                   </td>

                   <td class="text-center">
                      <button class="btn btn-danger"
                        type="button" disabled>Remove Person</button>
                      </td>
                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button class="btn btn-md btn-primary" id="addBtn" type="button">
                                        Add more Person
                                    </button>
                                </div>


  <button type="button" id="save" class="btn btn-primary">Insert Children Data</button>
</form>
        </body>
        </html>
 

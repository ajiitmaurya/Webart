<!DOCTYPE html>
<html lang="">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{\Arr::get($child,'name','User')}} Data</title>
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

      <h1 style="text-align:center">{{\Arr::get($child,'name','User')}} Data</h1>
    <div style="text-align:center" class="col-md-12 mb-2 center">
                  <img src="{{asset('get-image/'.\Arr::get($child,'img',''))}}"
                      alt="preview image" style="height: 240px;width: 240px;" class="rounded-circle">
    </div>
  <div class="form-group ">
    <div class="form-row col-md-12">
      <h4 for="name">Name:</h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'name','User')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">Date of Birth:</h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'dob','')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">Class:</h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'class','')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">Address: </h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'Add','')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">City: </h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'city','')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">State: </h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'state','')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">Country: </h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'country','')}}</p>
    </div>

    <div class="form-row col-md-12">
      <h4 for="name">Pincode: </h4>
      <p style="margin-top:4px"> {{\Arr::get($child,'pincode','')}}</p>
    </div>

    <h2 style="text-align:center">{{\Arr::get($child,'name','User')}} Picked Up Persons</h2>

    <div class="form-row col-md-12">
    <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center col-3" style="font-weight: 400;font-size: 20px;">Person Name</th>
                                                    <th class="text-center col-3" style="font-weight: 400;font-size: 20px;">Relation</th>
                                                    <th class="text-center col-3" style="font-weight: 400;font-size: 20px;">Contact No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(\Arr::get($child,'person_name',[]) as $i => $person)
                                                 <tr>
                                                 <td class="row-index text-center">{{$person}}</td>
                                                 <td class="row-index text-center">{{$child['relation'][$i]}}</td>
                                                 <td class="row-index text-center">{{$child['contact'][$i]}}</td>
        </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
        </div>
  </div>
        </body>
        </html>
 

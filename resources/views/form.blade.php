<html>
    <head>
        <title>CHO Laboratory</title>
    </head>
    <body>
        <div>
            <link href="{{asset('css/laboratorytest.css')}}" rel="stylesheet" />
            <div class="component-1-container">
              <div class="component-1-container01">
                <div class="component-1-container02">
                  <img
                    src="{{asset('img/CDO FULL LOGO.png')}}"
                    alt="image"
                    class="component-1-image"
                  />
                  <h1>City Health Office</h1>
                </div>
                <!-- This Div is the Site's Nav Bar -->
              </div>
              <!-- Error Message will be Displayed here -->
              
                <span style="color: red">@foreach ($errors->all() as $error)
                    {{$error}}<br>
                @endforeach</span>
            
              <form action="/submit" method="POST">
                @csrf
                <div class="component-1-container04">
                    <div class="component-1-container05">
                    <div class="component-1-container06"><h1>Request for Laboratory Testing</h1></div>
                    <div class="component-1-container07"></div>
                    <div class="component-1-container08">
                        <h1 class="component-1-text02">Purpose:</h1>
                    </div>
                    <div class="component-1-container09">
                        <div class="component-1-batch1">
                        <div class="component-1-container10">
                            <input type="checkbox" class="component-1-checkbox" name="purpose[]" value="COMPLETE BLOOD COUNT"/>
                            <span>COMPLETE BLOOD COUNT</span>
                        </div>
                        <div class="component-1-container11">
                            <input type="checkbox" class="component-1-checkbox01" name="purpose[]" value="FASTING BLOOD SUGAR TEST"/>
                            <span>FASTING BLOOD SUGAR TEST</span>
                        </div>
                        </div>
                        <div class="component-1-batch2">
                        <div class="component-1-container12">
                            <input type="checkbox" class="component-1-checkbox02" name="purpose[]" value="BLOOD TYPE"/>
                            <span>BLOOD TYPE</span>
                        </div>
                        <div class="component-1-container13">
                            <input type="checkbox" class="component-1-checkbox03" name="purpose[]" value="BLOOD URIC ACID TEST"/>
                            <span>BLOOD URIC ACID TEST</span>
                        </div>
                        </div>
                        <div class="component-1-batch3">
                        <div class="component-1-container14">
                            <input type="checkbox" class="component-1-checkbox04" name="purpose[]" value="STOOL EXAM"/>
                            <span>STOOL EXAM</span>
                        </div>
                        <div class="component-1-container15">
                            <input type="checkbox" class="component-1-checkbox05" name="purpose[]" value="BLOOD CHOLESTEROL TEST"/>
                            <span>BLOOD CHOLESTEROL TEST</span>
                        </div>
                        </div>
                        <div class="component-1-batch4">
                        <div class="component-1-container16">
                            <input type="checkbox" class="component-1-checkbox06" name="purpose[]" value="URINALYSIS"/>
                            <span>URINALYSIS</span>
                        </div>
                        <div class="component-1-container17">
                            <input type="checkbox" class="component-1-checkbox07" name="purpose[]" value="BLOOD CREATININE TEST"/>
                            <span>BLOOD CREATININE TEST</span>
                        </div>
                        </div>
                        <div class="component-1-batch5">
                        <div class="component-1-container18">
                            <input type="checkbox" class="component-1-checkbox08" name="purpose[]" value="SYPHILIS RAPID TEST"/>
                            <span>SYPHILIS RAPID TEST</span>
                        </div>
                        <div class="component-1-container19">
                            <input type="checkbox" class="component-1-checkbox09" name="purpose[]" value="ACID FAST STAINING"/>
                            <span>ACID FAST STAINING</span>
                        </div>
                        </div>
                        <div class="component-1-batch6">
                        <div class="component-1-container20">
                            <input type="checkbox" class="component-1-checkbox10" name="purpose[]" value="HEPATITIS B"/>
                            <span>HEPATITIS B</span>
                        </div>
                        <div class="component-1-container21">
                            <input type="checkbox" class="component-1-checkbox11" name="purpose[]" value="X-RAY TEST"/>
                            <span>X-RAY TEST</span>
                        </div>
                        </div>
                        <div class="component-1-batch7">
                        <div class="component-1-container22">
                            <input type="checkbox" class="component-1-checkbox12" name="purpose[]" value=">ANTI-HAV TEST"/>
                            <span>ANTI-HAV TEST</span>
                        </div>
                        <div class="component-1-container23">
                            <input type="checkbox" class="component-1-checkbox13" name="purpose[]" value="DRUG TEST"/>
                            <span>DRUG TEST</span>
                        </div>
                        </div>
                        <div class="component-1-batch8">
                        <div class="component-1-container24">
                            <input type="checkbox" class="component-1-checkbox14" name="purpose[]" value="PREGNANCY TEST"/>
                            <span>PREGNANCY TEST</span>
                        </div>
                        <div class="component-1-container25">
                            <input type="checkbox" class="component-1-checkbox15" name="purpose[]" value="SEROLOGY"/>
                            <span>SEROLOGY</span>
                        </div>
                        </div>
                        <div class="component-1-batch9">
                        <div class="component-1-container261">
                            <input type="checkbox" class="component-1-checkbox16" name="purpose[]" value="HEMATOLOGY"/>
                            <span>HEMATOLOGY</span>
                        </div>
                        <div class="component-1-container271">
                            <input type="checkbox" class="component-1-checkbox17" name="purpose[]" value="FECALYSIS"/>
                            <span>FECALYSIS</span>
                        </div>
                        </div>
                        <div class="component-1-batch10">
                            <div class="component-1-container281">
                                <input type="checkbox" class="component-1-checkbox18" name="purpose[]" value="Medical Certificate"/>
                                <span>Medical Certificate</span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="component-1-container26">
                    <div class="component-1-container27">
                        <img
                        src="https://play.teleporthq.io/static/svg/default-img.svg"
                        alt="image"
                        class="component-1-image1"
                        />
                    </div>
                    <div class="component-1-container28">
                        <span class="component-1-text19">NAME</span>
                        <input
                        type="text"
                        placeholder="Name"
                        name="name"
                        class="component-1-textinput input"
                        />
                    </div>
                    <div class="component-1-container29">
                        <div class="component-1-container30">
                        <span class="component-1-text20">AGE</span>
                        <input
                            type="text"
                            placeholder="Age"
                            name="age"
                            class="component-1-textinput1 input"
                        />
                        </div>
                        <div class="component-1-container31">
                        <span class="component-1-text21">BIRTHDATE</span>
                        <input
                            type="date"
                            placeholder="Date of Birth"
                            name="birthdate"
                            class="component-1-textinput2 input"
                        />
                        </div>
                        <div class="component-1-container32">
                        <span class="component-1-text22">GENDER</span>
                        <select class="component-1-select1" name="gender">
                            <option value="Option 1">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="component-1-container33">
                        <div class="component-1-container34">
                        <span class="component-1-text23">ADDRESS</span>
                        <input
                            type="text"
                            placeholder="Home Address"
                            name="address"
                            class="component-1-textinput3 input"
                        />
                        </div>
                    </div>
                    <div class="component-1-container36">
                        <input type="submit" class="component-1-button button" value="ENTER">
                    </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
    </body>
</html>
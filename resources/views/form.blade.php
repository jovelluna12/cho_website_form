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
                <div class="component-1-container03">
                  <select class="component-1-select">
                    <option value="Menu">Menu</option>
                    <option value="Option 2">Settings</option>
                    <option value="Option 3">Logout</option>
                  </select>
                </div>
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
                    <input type="checkbox" class="component-1-checkbox" />
                    <span>COMPLETE BLOOD COUNT</span>
                  </div>
                  <div class="component-1-container11">
                    <input type="checkbox" class="component-1-checkbox01" />
                    <span>FASTING BLOOD SUGAR TEST</span>
                  </div>
                </div>
                <div class="component-1-batch2">
                  <div class="component-1-container12">
                    <input type="checkbox" class="component-1-checkbox02" />
                    <span>BLOOD TYPE</span>
                  </div>
                  <div class="component-1-container13">
                    <input type="checkbox" class="component-1-checkbox03" />
                    <span>BLOOD URIC ACID TEST</span>
                  </div>
                </div>
                <div class="component-1-batch3">
                  <div class="component-1-container14">
                    <input type="checkbox" class="component-1-checkbox04" />
                    <span>STOOL EXAM</span>
                  </div>
                  <div class="component-1-container15">
                    <input type="checkbox" class="component-1-checkbox05" />
                    <span>BLOOD CHOLESTEROL TEST</span>
                  </div>
                </div>
                <div class="component-1-batch4">
                  <div class="component-1-container16">
                    <input type="checkbox" class="component-1-checkbox06" />
                    <span>URINALYSIS</span>
                  </div>
                  <div class="component-1-container17">
                    <input type="checkbox" class="component-1-checkbox07" />
                    <span>BLOOD CREATININE TEST</span>
                  </div>
                </div>
                <div class="component-1-batch5">
                  <div class="component-1-container18">
                    <input type="checkbox" class="component-1-checkbox08" />
                    <span>SYPHILIS RAPID TEST</span>
                  </div>
                  <div class="component-1-container19">
                    <input type="checkbox" class="component-1-checkbox09" />
                    <span>ACID FAST STAINING</span>
                  </div>
                </div>
                <div class="component-1-batch6">
                  <div class="component-1-container20">
                    <input type="checkbox" class="component-1-checkbox10" />
                    <span>HEPATITIS B</span>
                  </div>
                  <div class="component-1-container21">
                    <input type="checkbox" class="component-1-checkbox11" />
                    <span>X-RAY TEST</span>
                  </div>
                </div>
                <div class="component-1-batch7">
                  <div class="component-1-container22">
                    <input type="checkbox" class="component-1-checkbox12" />
                    <span>ANTI-HAV TEST</span>
                  </div>
                  <div class="component-1-container23">
                    <input type="checkbox" class="component-1-checkbox13" />
                    <span>DRUG TEST</span>
                  </div>
                </div>
                <div class="component-1-batch8">
                  <div class="component-1-container24">
                    <input type="checkbox" class="component-1-checkbox14" />
                    <span>PREGNANCY TEST</span>
                  </div>
                  <div class="component-1-container25">
                    <input type="checkbox" class="component-1-checkbox15" />
                    <span>SEROLOGY</span>
                  </div>
                </div>
                <div class="component-1-batch9">
                  <div class="component-1-container26">
                    <input type="checkbox" class="component-1-checkbox16" />
                    <span>HEMATOLOGY</span>
                  </div>
                  <div class="component-1-container27">
                    <input type="checkbox" class="component-1-checkbox17" />
                    <span>FECALYSIS</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="component-1-container28">
              <div class="component-1-container29">
                <img
                  alt="image"
                  src="https://play.teleporthq.io/static/svg/default-img.svg"
                  class="component-1-image1"
                />
              </div>
              <div class="component-1-container30">
                <span class="component-1-text21">NAME</span>
                <input
                  type="text"
                  placeholder="placeholder"
                  class="component-1-textinput input"
                />
              </div>
              <div class="component-1-container31">
                <div class="component-1-container32">
                  <span class="component-1-text22">AGE</span>
                  <input
                    type="text"
                    placeholder="placeholder"
                    class="component-1-textinput1 input"
                  />
                </div>
                <div class="component-1-container33">
                  <span class="component-1-text23">BIRTHDATE</span>
                  <input
                    type="text"
                    placeholder="placeholder"
                    class="component-1-textinput2 input"
                  />
                </div>
                <div class="component-1-container34">
                  <span class="component-1-text24">GENDER</span>
                  <select class="component-1-select1">
                    <option value="Option 1">-select-</option>
                    <option value="Option 2">Male</option>
                    <option value="Option 3">Female</option>
                  </select>
                </div>
              </div>
              <div class="component-1-container35">
                <div class="component-1-container36">
                  <span class="component-1-text25">ADDRESS</span>
                  <input
                    type="text"
                    placeholder="placeholder"
                    class="component-1-textinput3 input"
                  />
                </div>
                <div class="component-1-container37">
                  <span class="component-1-text26">DATE</span>
                  <input type="text" placeholder="placeholder" class="input" />
                </div>
              </div>
              <div class="component-1-container38">
                <button class="component-1-button button">ENTER</button>
              </div>
            </div>
          </div>
          <div class="component-1-container39"></div>
        </div>
      </div>
      
    </body>
</html>
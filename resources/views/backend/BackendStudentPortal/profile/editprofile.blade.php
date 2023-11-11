@extends('backend.BackendStudentPortal.layouts.master')
@section('title')
    Update Profile
@endsection

@section('content')
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('backend.BackendStudentPortal.layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('backend.BackendStudentPortal.layouts.topbar')
            <!-- End of Topbar -->

            <!-- Content Area Start -->
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
                                            Update Profile
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Form Start -->
                                <form action="{{route('user.profile.updateprofile', $profile->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <!-- Personal Information card start-->
                                <div class="card mb-4">
                                    <div class="card-header">Personal Information</div>
                                    <div class="card-body">  

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputFirstName">First name</label>
                                                <input class="form-control" id="inputFirstName" name="f_name" type="text" placeholder="Enter your first name" value="{{$profile->f_name}}">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            {{-- <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastName">Last name</label>
                                                <input class="form-control" id="inputLastName" name="l_name" type="text" placeholder="Enter your last name" value="{{$profile->l_name}}">
                                            </div> --}}
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (Email)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputEmail">Email</label>
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="Enter your Email Address" value="{{$profile->email}}">
                                            </div>
                                            <!-- Form Group (Phone)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputMobile">Mobile</label>
                                                <input class="form-control" id="inputMobile" name="mobile" type="tel" placeholder="Enter your Mobile Number" value="{{$profile->mobile}}">
                                            </div>
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (birthday)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputBirthday">Date of Birth</label>
                                                <input class="form-control" id="inputBirthday" type="date" name="birthday" value="{{$profile->birthday}}">
                                            </div>

                                            <!-- Form Group (gender)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputGender">Gender</label>
                                                <select class="form-control" name="gender" id="inputGender">
                                                    <option {{$profile->gender == 'Male' ? 'selected' : ''}} value="Male">Male</option>
                                                    <option {{$profile->gender == 'Female' ? 'selected' : ''}} value="Female">Female</option>
                                                    <option {{$profile->gender == 'Other' ? 'selected' : ''}} value="Other">Other</option>
                                                 </select>
                                            </div>

                                            <!-- Form Group (marital status)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputMaritalStatus">Marital Status</label>
                                                <select class="form-control" name="maritalStatus" id="inputMaritalStatus">
                                                    <option {{$profile->maritalStatus == 'Married' ? 'selected' : ''}} value="Married">Married</option>
                                                    <option {{$profile->maritalStatus == 'Unmarried' ? 'selected' : ''}} value="Unmarried">Unmarried</option>
                                                    <option {{$profile->maritalStatus == 'Other' ? 'selected' : ''}} value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Form Group (address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputAddress">Address (As shown your passport)</label>
                                            <input class="form-control" id="inputAddress" type="text" placeholder="Enter Your Address" name="address" value="{{$profile->address}}">
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (passport)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputPassportNumber">Passport Number</label>
                                                <input class="form-control" id="inputPassportNumber" type="text" placeholder="Enter Your Passport Number" name="passportNumber" value="{{$profile->passportNumber}}">
                                            </div>

                                                <!-- Form Group (passport expire date)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputExpireDate">Passport Expire Date</label>
                                                <input class="form-control" id="inputExpireDate" type="date" name="passportDate" value="{{$profile->passportDate}}">
                                            </div>
                                            
                                            <!-- Form Group (visa refusal)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputVisaRefusal">Do you have any Visa Refusal?</label>
                                                <select class="form-control" name="visaRefusal" id="inputVisaRefusal">
                                                    <option value="">Select Visa Refusal</option>
                                                    <option {{$profile->visaRefusal == 'Yes' ? 'selected' : ''}} value="Yes">Yes</option>
                                                    <option {{$profile->visaRefusal == 'No' ? 'selected' : ''}} value="No">No</option>   
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (disability)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputDisability">Any Disability</label>
                                                <select class="form-control" name="disability" id="inputDisability">
                                                    <option value="">Select Disability</option>
                                                    <option {{$profile->disability == 'Yes' ? 'selected' : ''}} value="Yes">Yes</option>
                                                    <option {{$profile->disability == 'No' ? 'selected' : ''}} value="No">No</option>  
                                                </select>
                                            </div>

                                                <!-- Form Group (who will pay)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputWhoPaid">Who will finance your studies?</label>
                                                <input class="form-control" id="inputWhoPaid" type="text" name="whowillpay" value="{{$profile->whowillpay}}" placeholder="Enter Who will finance your studies?">
                                            </div>
                                            
                                            <!-- Form Group (emergency contact)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputEmergencyContact">Emergency Contact Number</label>
                                                <input class="form-control" id="inputEmergencyContact" type="tel" name="emergencyContact" value="{{$profile->emergencyContact}}" placeholder="Enter Your Emergency Contact">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Personal Information card end -->

                                <!-- Academic History card start-->
                                <div class="card mb-4">
                                    <div class="card-header">Academic History</div>
                                    <div class="card-body">
                                        
                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (education level)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="highestEducation">Highest Level of Education</label>
                                                <select class="form-control" name="highesteducation" id="highestEducation">
                                                    {{-- <option value="">Select Highest Level of Education</option> --}}
                                                    <option {{$profile->highesteducation == "Post-graduate/Master's" ? 'selected' : ''}} value="Post-graduate/Master's">Post-graduate/Master's</option> 
                                                    <option {{$profile->highesteducation == 'Undergraduate/Honours' ? 'selected' : ''}} value="Undergraduate/Honours">Undergraduate/Honours</option> 
                                                    <option {{$profile->highesteducation == 'A-Level/12th grade' ? 'selected' : ''}} value="A-Level/12th grade">A-Level/12th grade</option> 
                                                    <option {{$profile->highesteducation == 'O-Level/10th Grade' ? 'selected' : ''}} value="O-Level/10th Grade">O-Level/10th Grade</option> 
                                                </select>
                                            </div>

                                            <!-- Form Group (institution)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputInstitution">Name of the Institution</label>
                                                <input class="form-control" id="inputInstitution" type="text" name="institution" value="{{$profile->institution}}" placeholder="Enter Education Institution Name">
                                            </div>

                                            <!-- Form Group (degree name)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputDegreeName">Degree Name</label>
                                                <input class="form-control" id="inputDegreeName" type="text" name="degree" value="{{$profile->degree}}" placeholder="Enter Education Degree Name">
                                            </div>

                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                                <!-- Form Group (grading system)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputGradingSystem">Grading System</label>
                                                <select class="form-control" name="gradingSystem" id="inputGradingSystem">
                                                    
                                                    <option {{$profile->gradingSystem == "Division" ? 'selected' : ''}} value="Division">Division</option> 
                                                    <option {{$profile->gradingSystem == "CGPA" ? 'selected' : ''}} value="CGPA">CGPA</option> 
                                                    <option {{$profile->gradingSystem == "GPA" ? 'selected' : ''}} value="GPA">GPA</option> 
                                                </select>
                                            </div>

                                            <!-- Form Group (result)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="result">Final Result</label>
                                                <input class="form-control" id="result" type="text" name="result" value="{{$profile->result}}" placeholder="Enter Education Result">
                                            </div>

                                            <!-- Form Group (instruction)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputMedium">Medium of Instruction</label>
                                                <select class="form-control" name="inputMedium" id="inputMedium">
                                                  
                                                    <option {{$profile->inputMedium == "Bangla" ? 'selected' : ''}} value="Division">Bangla</option> 
                                                    <option {{$profile->inputMedium == "English" ? 'selected' : ''}} value="CGPA">English</option> 
                                                    <option {{$profile->inputMedium == "Other" ? 'selected' : ''}} value="GPA">Other</option> 
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (start date)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputStartDate">Start Date</label>
                                                <input class="form-control" id="inputStartDate" type="date" name="startDate" value="{{$profile->startDate}}">
                                            </div>

                                            <!-- Form Group (end date)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputEndDate">End Date</label>
                                                <input class="form-control" id="inputEndDate" type="date" name="endDate" value="{{$profile->endDate}}">
                                            </div>
                                            
                                            <!-- Form Group (visa refusal)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputBacklog">Any backlog?</label>
                                                <select class="form-control" name="backlog" id="inputBacklog">
                                                    {{-- <option value="">Select Any Backlog</option> --}}
                                                    <option {{$profile->backlog == "Yes" ? 'selected' : ''}} value="Yes">Yes</option> 
                                                    <option {{$profile->backlog == "No" ? 'selected' : ''}} value="No">No</option> 
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>      

                                    </div>
                                </div>
                                <!-- Academic History card end -->

                                <!-- English Language Test card start-->
                                <div class="card mb-4">
                                    <div class="card-header">English Language Test</div>
                                    <div class="card-body">
                                        
                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (english test name)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputEnglishTest">Name of the Test</label>
                                                <select class="form-control" name="englishTest" id="inputEnglishTest">
                                                    {{-- <option value="">Select English Test Name</option> --}}
                                                    <option {{$profile->englishTest == "IELTS" ? 'selected' : ''}} value="IELTS">IELTS</option> 
                                                    <option {{$profile->englishTest == "TOEFL" ? 'selected' : ''}} value="TOEFL">TOEFL</option> 
                                                    <option {{$profile->englishTest == "PTE" ? 'selected' : ''}} value="PTE">PTE</option> 
                                                    <option {{$profile->englishTest == "Duolingo" ? 'selected' : ''}} value="Duolingo">Duolingo</option> 
                                                    <option {{$profile->englishTest == "GRE" ? 'selected' : ''}} value="GRE">GRE</option> 
                                                    <option {{$profile->englishTest == "SAT" ? 'selected' : ''}} value="SAT">SAT</option> 
                                                    <option {{$profile->englishTest == "ACT" ? 'selected' : ''}} value="ACT">ACT</option> 
                                                    <option {{$profile->englishTest == "TOEFL" ? 'selected' : ''}} value="TOEFL">TOEFL</option> 
                                                </select>
                                            </div>

                                            <!-- Form Group (date of examination) -->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputExamDate">Date of Examination
                                                </label>
                                                <input class="form-control" id="inputExamDate" type="date" name="examDate" value="{{$profile->examDate}}">
                                            </div>

                                            <!-- Form Group (TRF number) -->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputTRFNumber">TRF number</label>
                                                <input class="form-control" id="inputTRFNumber" type="text" name="TRFNumber" value="{{$profile->TRFNumber}}" placeholder="Enter TRF Number">
                                            </div>
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (listening)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputListening">Listening</label>
                                                <input class="form-control" id="inputListening" type="text" name="listening" value="{{$profile->listening}}" placeholder="Enter Listening Result">
                                            </div>

                                            <!-- Form Group (result)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputReading">Reading</label>
                                                <input class="form-control" id="inputReading" type="text" name="reading" value="{{$profile->reading}}" placeholder="Enter Reading Result">
                                            </div>

                                            <!-- Form Group (writing)-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputWriting">Writing</label>
                                                <input class="form-control" id="inputWriting" type="text" name="writing" value="{{$profile->writing}}" placeholder="Enter Writing Result">
                                            </div>
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (Speaking)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputSpeaking">Speaking</label>
                                                <input class="form-control" id="inputSpeaking" type="text" name="speaking" value="{{$profile->speaking}}" placeholder="Enter Speaking Result">
                                            </div>

                                            <!-- Form Group (overall score)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputScore">Overall Score</label>
                                                <input class="form-control" id="inputScore" type="text" name="score" value="{{$profile->score}}" placeholder="Enter Overall Score">
                                            </div>

                                        </div>   

                                    </div>
                                </div>
                                <!-- English Language Test card end -->

                                <!-- Upload Documents card start-->
                                <div class="card mb-4">
                                    <div class="card-header">Upload Documents</div>
                                    <div class="card-body">
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (profile photo) -->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputProfilePhoto">Profile Photo
                                                </label>
                                                <img width="200" src="{{asset($profile->profilePhoto)}}" alt="">
                                                <input class="form-control" id="inputProfilePhoto" type="file" name="profilePhoto" value="{{$profile->profilePhoto}}">
                                            </div>

                                            <!-- Form Group (epassport) -->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputPassport">Passport
                                                </label>
                                                <img width="200" src="{{asset($profile->passportPhoto)}}" alt="">
                                                <input class="form-control" id="inputPassport" type="file" name="passportPhoto" value="{{$profile->passportPhoto}}">
                                                
                                            </div>

                                        </div>
                                        
                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">

                                            <!-- Form Group (education certificate) -->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputEducationCertificate">Highest Education Certificate
                                                </label>
                                                <img width="200" src="{{asset($profile->educationCertificate)}}" alt="">
                                                <input class="form-control" id="inputEducationCertificate" type="file" name="educationCertificate" value="{{$profile->educationCertificate}}">
                                            </div>
                                            <!-- Form Group (education transcript) -->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputEducationTranscript">Highest Education Transcript
                                                </label>
                                                <img width="200" src="{{asset($profile->educationtranscript)}}" alt="">
                                                <input class="form-control" id="inputEducationTranscript" type="file" name="educationtranscript" value="{{$profile->educationtranscript}}">
                                            </div>                                    
                                        </div>

                                        <!-- Form Row -->
                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputEnglishTestCertificate">English Test Certificate
                                                </label>
                                                <img width="200" src="{{asset($profile->englishTestCertificate)}}" alt="">
                                                <input class="form-control" id="inputEnglishTestCertificate" type="file" name="englishTestCertificate" value="{{$profile->englishTestCertificate}}" >
                                            </div>
                                            <!-- Form Group (academic preference) -->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputacademicpreference">Academic Preference
                                                </label>
                                                <img width="200" src="{{asset($profile->academicpreference)}}" alt="">
                                                <input class="form-control" id="inputacademicpreference" type="file" name="academicpreference" value="{{$profile->academicpreference}}">
                                            </div>                                    
                                        </div>
                                        <div class="row gx-3 mb-3">
                                           <!-- Form Group (Job Preference) -->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputjobpreference">Job Preference
                                                </label>
                                                <img width="200" src="{{asset($profile->jobpreference)}}" alt="">
                                                <input class="form-control" id="inputjobpreference" type="file" name="jobpreference" value="{{$profile->jobpreference}}">
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                                <!-- Upload Documents card end -->

                                <!-- Upload Documents card start-->
                               
                                <!-- Upload Documents card end -->

                                <button class="btn btn-primary" type="submit">Update & Save Information</button>
                                 <!-- Save changes button-->
                                </form>
                                <!-- Form End -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- Content Area End -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('backend.BackendStudentPortal.layouts.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
{{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div> --}}
@endsection
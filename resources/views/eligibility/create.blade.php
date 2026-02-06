<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* =========================
   SIDEBAR ONLY
========================= */

    .side-bars {
        background-color: #230083;
        color: #ffffff;
        height: 100vh;
        width: 250px;
        position: fixed;
        box-shadow: 4px 0 12px rgba(0, 0, 0, 0.12);
    }

    .title {
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        padding: 20px 20px 16px;
    }

    .title p:first-child {
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 0.4px;
        margin-bottom: 4px;
    }

    .title p:last-child {
        font-size: 12px;
        opacity: 0.85;
    }

    .btns {
        margin-top: 24px;
    }

    .btns a {
        width: 210px;
        color: #ffffff;
        border: none;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 14px;
        text-align: left;
        text-decoration: none;
        border-radius: 10px;
        margin-left: 10px;
        font-size: 14px;
        transition: all 0.25s ease;
    }

    .btns a i {
        opacity: 0.9;
        font-size: 16px;
    }

    .btns a:hover {
        background-color: rgba(139, 109, 221, 0.18);
    }

    .btns a.active {
        background-color: rgba(139, 109, 221, 0.35);
        font-weight: 600;
        box-shadow: inset 3px 0px 0px #ffffff; 
    }

    .bottom-btn {
        position: absolute;
        bottom: 0;
        width: 250px;
        background-color: rgba(139, 109, 221, 0.18);
        padding: 14px;
    }

    .bottom-btn a {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .bottom-btn a i {
        font-size: 20px;
        margin-right: 6px;
    }


    .vertical-section {
        display: flex;
        background-color: #ffffff;
    }

    .top-bar {
        position: fixed;
        top: 0;
        width: calc(100% - 250px);
        z-index: 1030;
        background-color: white;
        height: 70px;
        padding: 15px 24px;
        font-size: 18px;
        font-weight: 600;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }



    .topbar-para {
        height: 40px;
        width: 40px;
        background-color: #9ad1d4;
        border-radius: 50%;
        color: darkblue;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: bold;
    }

    .hero-section {
        background-color: white;
        padding: 20px;
        width: 800px;
        border-radius: 8px;
        box-shadow: 0 0px 8px rgba(0, 0, 0, 0.1);
    }

    .hero-section form label {
        font-weight: 600;
        font-size: 14px;
    }

    .btn-custom {
        background-color: #3a0ca3;
        color: white;
        border: none;
    }

    .btn-custom:hover {
        background-color: #541ca1;
        color: white;
    }

    .btn-light {
        background-color: #ffffff;
        color: black;
        border: none;
        outline: 1px solid #c2bebe;
    }

    .btn-light:hover {
        background-color: #f1f1f1;
        color: black;
    }

    .step-content {
        display: none;
    }

    .step-content.active {
        display: block;
    }

    .mode-script {
        background-color: #caf0f8;
        padding: 15px;
        border-radius: 8px;
        margin-top: 15px;
        margin-bottom: 4px;
    }

    .mode-script .mode-para1 {
        font-size: 16px;
        color: darkblue;
        font-weight: bold;
    }

    .mode-script .mode-para2 {
        font-size: 14px;
        color: purple;
        margin-top: 5px;
        text-align: justify;
    }

    .status {
        font-size: 14px;
        margin-top: 20px;
        color: #494747;
    }

    .status-msg {
        font-size: 12px;
        color: rgb(141, 119, 7);
        text-align: justify;
        background-color: rgba(255, 223, 65, 0.2);
        display: block;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid rgb(241, 223, 107);

    }

    .status-update {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
        background-color: #f5f4f4e7;
        padding: 12px;
        border-radius: 8px;
        font-size: 14px;
    }

    .active-msg {
        font-size: 20px;
        color: #008000;
        font-weight: bold;
    }

    .policy-effective,
    .policy-term,
    .type-of-plan,
    .participation-status,
    .OON-Coverage,
    .referral-script {
        font-size: 12px;
        color: purple;
        font-weight: 600;
    }

    .participation-box {
        background-color: #f5f4f4e7;
        padding: 15px;
        border-radius: 8px;
    }

    .final-details {
        background-color: #F2F5FB;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #B6C6FF;
    }

    .mail-address {
        background-color: #F7F8FA;
        padding: 10px;
        border-radius: 8px;
        outline: 1px solid #c2bebe;
        margin-left: 10px;
    }

    .comments-box {
        background-color: #F7F8FA;
        padding: 20px;
        border-radius: 8px;
        outline: 1px solid #c2bebe;
    }

    .btn-primary {
        font-size: 14px;
        color: darkblue;
        font-weight: 400;
        background-color: #cae9ff !important;
        border: 1px solid #B6C6FF;
    }

    .btn-primary:hover {
        background-color: #cae9ff !important;
        border: 1px solid #B6C6FF;
        color: darkblue;
    }

    #dynamicInput {
        background-color: rgba(230, 230, 250, 0.4);
        color: #eef2ff;
    }

    #dynamicInput::placeholder {
        color: purple;
        font-size: 12px;
        opacity: 1;
        font-style: italic;
        font-weight: 500;
    }


    .form-group-tight label {
        margin-bottom: 2px !important;
        font-size: 14px;
        font-weight: 600;
    }

    .form-group-tight .subtitle {
        margin: 0 0 4px 0;
        font-size: 14px;
        line-height: 1.2;
    }

    .form-group-tight .helper {
        margin: 2px 0 4px 0;
        font-size: 12px;
        color: purple;
        line-height: 1.2;
    }


    .section-title {
        margin: 16px 0 4px 0;
        font-size: 18px;
        font-weight: 500;
    }

    .section-divider {
        margin: 0 0 12px 0;
        border-color: #555555;
    }

    .main-coordination {
        background-color: #F2F5FB;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #B6C6FF;
    }

    /* dashboard */
    .dashboard {
        background-color: white;
        box-shadow: 0 0px 8px rgba(0, 0, 0, 0.1);
        width: 900px;
        height: max-content;
        border-radius: 8px;
        margin-top: 152px;
        margin-left: 450px;
    }

    .records div {
        background-color: #cae9ff;
        color: darkblue;
        font-weight: 600;
        gap: 15px;
        padding: 10px 20px;
        border-radius: 8px;
    }

    .table th,
    small {
        color: #919090f5;
        font-size: 14px;
        font-weight: 500;
        font-family: sans-serif;
    }

    .btns a.active {
        background-color: rgba(139, 109, 221, 0.35);
        font-weight: 600;
    }
</style>

<body>
    <div class="vertical-section" style="background-color: rgb(252, 252, 252); height: 100vh;">
        <div class="side-bars">
            <div class="title">
                <p style="font-size: 20px; font-weight: bold;">Pre-registration Verify</p>
                <p style="font-size: 12px;">EV & BV Tool</p>
            </div>
            <span></span>
            <div class="btns">
                <a href="#" class="mt-4" onclick="showNewVerification()">
                    <i class='far fa-file-alt' style="margin-right: 12px;"></i>
                    New Verification
                </a>

                <a href="#" class="mt-3" onclick="showDashboard()">
                    <i class='fas fa-clinic-medical' style="margin-right: 12px;"></i>
                    Dashboard
                </a>
            </div>
            <div class="bottom-btn">
                <a href=""><i class="material-icons">lock_outline</i> HIPAA Compliant Mode</a>
            </div>
        </div>

        <div class="top-bar" style="margin-left: 250px;">

            <div class="d-flex justify-content-between align-items-center">
                <p id="topBarTitle">New Verification Entry</p>
                <div class="d-flex gap-3 align-items-center">
                    <p class="topbar-para">US</p>
                    <div class="d-block session-status">
                        <p style="margin-top: 2px; font-size: 16px; margin-bottom: 0;">User Session</p>
                        <p style="line-height: 1.2; font-size: 14px; color: #008000;">Active</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="newVerificationSection" class="p-3 mt-5" style="margin-left:500px;">
            <div class="hero-section container mt-5">
                <form id="wizardForm">
                    <h4 class="mb-0">Eligibility & Benefits Verification</h4>
                    <p style="font-size: 14px;">Athena / Commercial Flow (E2E Encrypted)</p>
                    <!-- STEP 1 -->
                    <div class="step-content active">


                        <div class="row mt-4">
                            <div class="col">
                                <label>Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="col">
                                <label>Employee ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Employee ID">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label>Time Zone (US) <span class="text-danger">*</span></label>
                                <select class="form-select">
                                    <option selected disabled>Select Time Zone</option>
                                    <option>Pacific Time</option>
                                    <option>Mountain Time</option>
                                    <option>Central Time</option>
                                    <option>Eastern Time</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Date Worked <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label>Department <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label>Patient ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3 mb-5">
                            <div>
                                <label>Date of Service <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <hr style="color: #b9b7b7;">
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="step-content mt-3">


                        <div class="mt-3">
                            <label>Insurance Name <span class="text-danger">*</span></label>
                            <select class="form-select mt-2">
                                <option selected disabled>Select Insurance Name</option>
                                <option value="Aetna">Aetna</option>
                                <option value="Bluecard">Bluecard</option>
                                <option value="CIGNA">CIGNA</option>
                                <option value="Emblem Health">Emblem Health</option>
                                <option value="Meritain">Meritain</option>
                                <option value="United Healthcare">United Healthcare</option>
                                <option value="United Healthcare Global">United Healthcare Global</option>
                                <option value="UMR">UMR</option>
                                <option value="CMO">CMO</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Mode of Verification <span class="text-danger">*</span></label>
                                <select class="form-select" id="mySelect" onchange="myFunction()">
                                    <option selected disabled>Select Mode of Verification</option>
                                    <option value="Call">Call</option>
                                    <option value="Web (Portal)">Web (Portal)</option>
                                    <option value="RTE (Real-Time Eligibility)">RTE (Real-Time Eligibility)</option>
                                </select>
                            </div>
                            <div class="col" id="Web" style="display: none;">
                                <label>Portal Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Portal Name">
                            </div>
                        </div>

                        <div class="mode-script" id="RTE" style="display: none;">
                            <i class="mode-para2"><span class="mode-para1" style="color: purple;font-weight: bold;">RTE
                                    Selected:</span> Proceed directly to the closing step to update manual fields
                                (Policy Name, CC, Action, etc.). Detailed verification steps will be skipped.</i>
                        </div>

                        <div class="mode-script" id="Call" style="display: none;">

                            <i class="mode-para1">Opening Script:</i><br>
                            <i class="mode-para2" style="color: darkblue;font-weight: 400;">"Hello, my name is [Your
                                Name], and I am calling from the provider's office. I would like to verify the
                                eligibility and benefits for our patients. Could you assist me with this, please?"</i>

                            <div class="row">
                                <div class="col">
                                    <label for="">Insurance Phone # <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " placeholder="(XXX) XXX-XXXX">
                                </div>

                                <div class="col">
                                    <label for="">Rep Name <span class="text-danger">*</span></label><br>
                                    <i class="mode-para2">Script: "Sorry, I didn’t get your name. Could you please spell
                                        it out for my documentation?"</i>
                                    <input type="text" class="form-control ">
                                </div>
                            </div>

                        </div>
                        <hr style="color: #b9b7b7;">
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step px-4">Back</button>
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="step-content">
                        <p class="status mb-1">ELIGIBILITY STATUS</p>
                        <i class="status-msg">Script: "Could you confirm the member’s eligibility before moving on to
                            the benefits?"</i>
                        <div class="status-update mt-4">
                            <div>
                                <p class="mb-1">Policy Status</p>
                                <p class=" mb-0 active-msg">Active</p>
                                <p style="color: #6c757d;">Status updates automatically based on dates.</p>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size: 12px;color: #6c757d;">Date of Service</p>
                                <p style="font-size: 14px;">09/15/2023</p>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col">
                                <label>Policy Effective Date <span class="text-danger">*</span><br>
                                    <i class="policy-effective">Script: "May I have the patient policy effective
                                        date?"</i>
                                </label>
                                <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="col">
                                <label>Policy Term Date <span class="text-danger">*</span><br>
                                    <i class="policy-term">Script: "Could you confirm if there is a future termination
                                        date for the plan?"</i>
                                </label>
                                <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <div>
                                <label>Type of Plan<br>
                                    <i class="type-of-plan">Script: "May I know what type of plan does the patient
                                        have?"</i>
                                </label>
                                <select name="type_of_plan-select" class="form-select">
                                    <option value="" disabled selected>Select Type of Plan</option>
                                    <option value="HMO">HMO</option>
                                    <option value="PPO">PPO</option>
                                    <option value="EPO">EPO</option>
                                    <option value="POS">POS</option>
                                    <option value="Medicaid">Medicaid</option>
                                    <option value="Medicare">Medicare</option>
                                    <option value="Medicare Supplement">Medicare Supplement</option>
                                    <option value="Open Access">Open Access</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        </div>
                        <hr style="color: #b9b7b7;">
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step px-4">Back</button>
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>
                    </div>

                    <!-- STEP 4 -->
                    <div class="step-content">
                        <div class="participation-box">
                            <p style="color: #6c757d;font-size: 14px;">PROVIDER PARTICIPATION</p>
                            <label>Participation Status <span class="text-danger">*</span><br>
                                <i class="participation-status">Script: "May I know whether our provider is In network
                                    or Out of network with the patient plan?"</i>
                            </label>
                            <select name="participation-status-select" class="form-select mt-2 mb-1"
                                id="participation-selection" onchange="participationFunction()">
                                <option value="In Network">In Network</option>
                                <option value="Out of Network">Out of Network</option>
                                <option value="Other">Other</option>
                            </select>
                            <p style="color: #6c757d;font-size: 12px;">BCBS Script: "May I know whether our provider
                                would be considered as In-network provider if they are par with the local?"</p>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <label>Provider Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="eg: Dr. Skarthi">
                            </div>
                            <div class="col" id="Out of Network" style="display: none;">
                                <label>Has OON Coverage? <br>
                                    <i class="OON-Coverage">Script: "May I know whether the patient has Out of network
                                        coverage for the services?"</i>
                                </label>
                                <select name="OON-Coverage-select" class="form-select mt-2 mb-0" id="coverage-selection"
                                    onchange="coverageFunction()">
                                    <option value="" disabled selected>Select coverage</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <p style="font-size:12px;color:red;display:none;" id="No">Action: Proceed to Closing.
                                </p>
                            </div>
                        </div>

                        <hr style="color: #b9b7b7;">
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step px-4">Back</button>
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>
                    </div>

                    <!-- step - 5 -->

                    <div class="step-content mt-3">

                        <div class="row g-3">


                            <div class="col-12 form-group-tight">
                                <p style="color: #6c757d;font-size: 14px;">SERVICE SELECTION</p>
                                <label class="subtitle">Service or CPT <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="dynamicInput">
                            </div>

                            <div class="col-12 form-group-tight">
                                <label>Mode Of Verification</label>
                                <select class="form-select" id="modeSelect">
                                    <option value="Specialist_office">Specialist office</option>
                                    <option value="telehealth">Telehealth</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-12 form-group-tight" id="otherCPTContainer"
                                style="display: none; margin-top: 12px;">
                            </div>



                            <div class="col-12">
                                <p class="section-title">Special Benefits: Specialist Office</p>
                                <hr class="section-divider">
                            </div>

                            <div class="col-md-6 form-group-tight">
                                <label>Co-pay <br>
                                    <i class="helper">Script: "May I have co-pay for the services?"</i>
                                </label>
                                <input type="text" class="form-control" placeholder="$0.00">
                            </div>

                            <div class="col-md-6 form-group-tight">
                                <label>Co-insurance <br>
                                    <i class="helper">Script: "May I have co-insurance for the services?"</i>
                                </label>
                                <input type="text" class="form-control" placeholder="0%">
                                <i class="helper" style="color:#9e9d9d;">
                                    IF &gt; 50%, ask "May I know whether it is patient responsibility or insurance cover
                                    amount?"
                                </i>
                            </div>

                            <div class="col-md-6 form-group-tight" id="outOfStateSection">
                                <label>Out of State Restrictions (BCBS) <br>
                                    <i class="helper">
                                        Script: "May I know whether the patient has any out of state restrictions?"
                                    </i>
                                </label>
                                <select class="form-select">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>


                            <div class="col-12">
                                <p class="section-title">General Benefits</p>
                                <hr class="section-divider">
                            </div>

                            <div class="col-md-6 form-group-tight">
                                <label>Deductible Total <br>
                                    <i class="helper">
                                        Script: "May I know what is the general deductible for the patient plan?"
                                    </i>
                                </label>
                                <input type="text" class="form-control" placeholder="$0.00">
                            </div>

                            <div class="col-md-6 form-group-tight">
                                <label>Deductible Met <br>
                                    <i class="helper">
                                        Script: "May I know how much deductible has been met so far?"
                                    </i>
                                </label>
                                <input type="text" class="form-control" placeholder="$0.00">
                            </div>

                            <div class="col-md-6 form-group-tight">
                                <label>OOP MAX <br>
                                    <i class="helper">
                                        Script: "May I know out of pocket maximum for the member?"
                                    </i>
                                </label>
                                <input type="text" class="form-control" placeholder="$0.00">
                            </div>

                            <div class="col-md-6 form-group-tight">
                                <label>OOP MIN <br>
                                    <i class="helper">
                                        Script: "May I know how much out of pocket has been met so far?"
                                    </i>
                                </label>
                                <input type="text" class="form-control" placeholder="$0.00">
                            </div>

                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step">Back</button>
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>

                    </div>





                    <!-- step -6 -->
                    <div class="step-content">

                        <p style="color: #6c757d;font-size: 14px;">REFERRAL DETAILS</p>

                        <div class="mb-3">
                            <label>Referral Required? <span class="text-danger">*</span><br>
                                <i class="referral-script">
                                    Script: "May I know whether referral is required for the services to meet a
                                    specialist from the PCP?"
                                </i>
                            </label>
                            <select class="form-select" id="referral-selection" onchange="referralFunction()">
                                <option>Required</option>
                                <option>Not Required</option>
                            </select>
                            <p id="not_required_ReferralMsg" style="font-size:12px;color:#6c757d;display:none;"
                                class="mt-1">
                                PDF Rule: Skip Referral Details.
                            </p>
                        </div>
                        <div id="Not Required">
                            <div class="row mt-3">
                                <div class="col">
                                    <label>PCP Name<br>
                                        <i class="referral-script">
                                            Script: "May I have the PCP Name?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col">
                                    <label>PCP NPI<br>
                                        <i class="referral-script">
                                            Script: "May I know the NPI of the PCP if available?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label>PCP Phone<br>
                                        <i class="referral-script">
                                            Script: "May I have the PCP Phone #?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control ">
                                </div>

                                <div class="col">
                                    <label>Referral Updated with Insurance?<br>
                                        <i class="referral-script">
                                            Script: "May I know whether there is any referral on file for our provider?"
                                        </i>
                                    </label>
                                    <select class="form-select mt-1">
                                        <option selected disabled>Select</option>
                                        <option>On File</option>
                                        <option>Not On File</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label>Referral Number <span class="text-danger">*</span><br>
                                        <i class="referral-script">
                                            Script: "May I have the referral Number?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control ">
                                </div>

                                <div class="col">
                                    <label>Referral Effective<br>
                                        <i class="referral-script">
                                            Script: "May I have the effective date of the referral?"
                                        </i>
                                    </label>
                                    <input type="date" class="form-control ">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label>Referral Term<br>
                                        <i class="referral-script">
                                            Script: "May I know when the referral expires / terms for our provider?"
                                        </i>
                                    </label>
                                    <input type="date" class="form-control ">
                                </div>

                                <div class="col">
                                    <label>Visits Allowed</label>
                                    <input type="number" class="form-control ">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div>
                                    <label>Visits Used</label>
                                    <input type="text" class="form-control w-50">
                                </div>
                            </div>
                        </div>


                        <hr style="color:#b9b7b7;">

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step px-4">Back</button>
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>

                    </div>

                    <!-- step-7 -->
                    <div class="step-content mt-3">
                        <div class="row gx-4 gy-1">
                            <div class="main-coordination">
                                <!-- COB -->
                                <div class="col-12 form-group-tight">
                                    <p style="color: #6c757d;font-size: 12px;">COORDINATION OF BENEFITS</p>
                                    <label class="subtitle">COB Status <span class="text-danger">*</span></label> <br>
                                    <i class="helper" style="font-weight: 600;">
                                        Script: "May I know whether this plan is acting as primary?"
                                    </i>

                                    <select class="form-select" id="cobStatus">
                                        <option value="primary">Primary</option>
                                        <option value="secondary">Secondary</option>
                                        <option value="tertiary">Tertiary</option>
                                    </select>
                                </div>

                                <!-- SECONDARY / TERTIARY DETAILS -->
                                <div id="secondaryDetails" class="col-12 row gx-4 gy-1" style="display:none;">

                                    <div class="col-12 form-group-tight">
                                        <hr class="section-divider my-2">
                                        <i class="helper" style="font-weight:600;font-size:13px;">
                                            Script: "Since this plan is Secondary, who is updated as Primary? Could you
                                            please provide the other insurance information if available?"
                                        </i>
                                    </div>

                                    <div class="col-md-6 form-group-tight">
                                        <label>Other Insurance Name</label>
                                        <input type="text" class="form-control" placeholder="e.g. Medicare">
                                    </div>

                                    <div class="col-md-6 form-group-tight">
                                        <label>Other Member ID</label>
                                        <input type="text" class="form-control" placeholder="e.g. #12345">
                                    </div>

                                </div>
                            </div>

                            <!-- PRIOR AUTH -->
                            <div class="col-12 row gx-4 gy-1 align-items-end">

                                <div class="col-md-6 form-group-tight">
                                    <p style="color: #6c757d;font-size: 14px;font-weight: 450;" class="mb-0">PRIOR AUTH
                                    </p>
                                    <label class="subtitle">Authorization Required?</label><br>
                                    <i class="helper" style="font-weight: 600;">
                                        Script: "May I know whether authorization is required for the services?"
                                    </i>

                                    <select class="form-select" id="authRequired">
                                        <option value="required">Required</option>
                                        <option value="not_required">Not required</option>
                                    </select>
                                    <p class="helper mt-1 mb-0 text-muted">PDF Rule: Skip Auth Details</p>
                                </div>

                                <div class="col-md-6 form-group-tight" id="authOnFileWrapper">
                                    <label>Auth Updated with Insurance? <br>
                                        <i class="helper mt-0 mb-0">
                                            Script: "May I know whether authorization is on file for our provider?"
                                        </i>
                                    </label>
                                    <select class="form-select" id="authOnFile">
                                        <option value="onfile">On File</option>
                                        <option value="not_on_file">Not a file</option>
                                    </select>
                                </div>

                            </div>

                            <!-- AUTH DETAILS -->
                            <div id="authNumberRow" class="col-12 row gx-4 gy-1 align-items-end">

                                <div class="col-md-6 form-group-tight">
                                    <label>Auth Number<br>
                                        <i class="helper">
                                            Script: "May I have the authorization number?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-md-6 form-group-tight">
                                    <label>Effective <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                                </div>

                            </div>

                            <div id="authTermRow" class="col-12 row gx-4 gy-1 align-items-end">

                                <div class="col-md-6 form-group-tight">
                                    <label>Term</label>
                                    <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                                </div>

                                <div class="col-md-6 form-group-tight">
                                    <label>Units Allowed</label>
                                    <input type="text" class="form-control">
                                </div>

                            </div>

                            <div id="authUnitsRow" class="col-12 row gx-4 gy-1">

                                <div class="col-md-6 form-group-tight">
                                    <label>Units Used</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-md-6"></div>

                            </div>

                            <!-- FAX DETAILS -->
                            <div id="faxDetailsSection" class="col-12 row gx-4 gy-1" style="display:none;">

                                <div class="col-md-6 form-group-tight">
                                    <label>Auth Fax# <br>
                                        <i class="helper">
                                            Script: "May I know the fax# to send the medical records?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-md-6 form-group-tight">
                                    <label>Fax Attention <br>
                                        <i class="helper">
                                            Script: "May I know to whose attention I need to send the documentation?"
                                        </i>
                                    </label>
                                    <input type="text" class="form-control">
                                </div>

                            </div>

                        </div>

                        <!-- NAVIGATION -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step px-4">Back</button>
                            <button type="button" class="btn btn-custom px-4 next-step">Next</button>
                        </div>
                    </div>

                    <!-- Step- 9 -->

                    <div class="step-content">
                        <p style="color: #6c757d;font-size: 14px;" class="mt-3">FINAL DETAILS</p>
                        <div class="final-details">
                            <p class="mb-0" style="font-size: 16px;">Employee Updates</p>
                            <hr style="color: #446494;" class="mt-2 mb-3">
                            <div class="row mt-3">
                                <div class="col">
                                    <label>Action <span class="text-danger">*</span></label>
                                    <select name="action-selects" class="form-select mb-1">
                                        <option value="" disabled selected>Select Action</option>
                                        <option value="New Verification">New Verification</option>
                                        <option value="Old Verification">Old Verification</option>
                                        <option value="Calling-Auth">Calling-Auth</option>
                                        <option value="Calling-Benefits">Calling-Benefits</option>
                                        <option value="Calling-Patients">Calling-Patients</option>
                                        <option value="Calling-Referral">Calling-Referral</option>
                                        <option value="Klara">Klara</option>
                                    </select>
                                    <p style="color: #6c757d;font-size: 12px;">Select the outcome of your verification
                                        (Call/Web/RTE).</p>
                                </div>
                                <div class="col">
                                    <label>Policy Name / Plan Type</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label>Flag Alert</label>
                                    <input type="text" class="form-control" placeholder="Any Critical Flags?">
                                </div>
                                <div class="col">
                                    <label>CC on File?</label>
                                    <select class="form-select">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="w-50">
                                    <label>CC Expiration</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label>Appointment Notes</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4">
                            <div class="col mail-address">
                                <p style="font-size: 14px;">Claim Mailing Address</p>
                                <input type="text" class="form-control mb-3" placeholder="Address Line 1">
                                <input type="text" class="form-control mb-3" placeholder="Address Line 2 (Optional)">
                                <div class="row">
                                    <div class="col mb">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Zip">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label>Electronic Payer ID</label>
                                <input type="text" class="form-control mb-2">
                                <label>Timely Filing Limit (Days)</label>
                                <input type="tel" class="form-control mb-2">
                                <label>Reference Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="comments-box">
                                <label class="mb-2">Comments / Call Notes</label>
                                <textarea rows="4" class="form-control"></textarea>
                                <div class="d-flex justify-content-end mt-2">
                                    <button type="button" class="btn btn-primary">Refine with AI Bot</button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex justify-content-center mb-4">
                            <i style="color: #6c757d;font-size: 14px;">Closing Script: "Thank you for your assistance
                                and have a wonderful day/Happy weekend."</i>
                        </div>

                        <hr style="color:#b9b7b7;">

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-light prev-step px-4">Back</button>
                            <button type="submit" class="btn btn-success px-4">Secure Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div id="dashboardSection" class="container dashboard" style="display:none;">
            <div class="p-4">
                <div class="d-flex justify-content-between py-2">
                    <div>
                        <h4 class="mb-0">Verification Records</h4>
                        <small>Manage, Import, and Export data (Decrypted View)</small>
                    </div>
                    <div class="d-flex" style="gap: 5px; height: 45px;">
                        <input type="text" id="myInput" class="form-control" style="width: 230px; font-size: 13px;"
                            placeholder="Search Patient ID, Insurance or Plan.">
                        <button class="btn btn-primary "
                            style="background-color: rgb(5, 113, 255) !important; color: white !important; padding: 8px;">
                            <i class="fa-solid fa-file-import"></i> Import Queue
                        </button>
                        <button class="btn btn-success">
                            <i class="fa-solid fa-file-export"></i> Export CSV
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-5 records">
                    <div style="width: 30%;">
                        <p>TOTAL RECORDS</p>
                        <h4>0</h4>
                    </div>
                    <div style="width: 68%;">
                        <p>INSURANCE DISTRIBUTION</p>
                    </div>
                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>DATE/APPT ID</th>
                            <th>DETAILS</th>
                            <th>INSURANCE/PLAN</th>
                            <th>STATUS/ACTION</th>
                            <th>GENERATED COMMENT</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>Kamesh</td>
                            <td>Aakash</td>
                            <td>Saran</td>
                            <td>Jacob</td>
                            <td>Karthick</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script>
        document.querySelectorAll('.next-step').forEach(button => {
            button.addEventListener('click', () => {
                const current = document.querySelector('.step-content.active');
                const next = current.nextElementSibling;
                if (next) {
                    current.classList.remove('active');
                    next.classList.add('active');
                }
            });
        });

        document.querySelectorAll('.prev-step').forEach(button => {
            button.addEventListener('click', () => {
                const current = document.querySelector('.step-content.active');
                const prev = current.previousElementSibling;
                if (prev) {
                    current.classList.remove('active');
                    prev.classList.add('active');
                }
            });
        });
    </script>

    <script>
        function myFunction() {
            const x = document.getElementById("mySelect").value;

            const call = document.getElementById("Call");
            const web = document.getElementById("Web");
            const rte = document.getElementById("RTE");
            call.style.display = "none";
            web.style.display = "none";
            rte.style.display = "none";

            if (x === "Call") {
                call.style.display = "block";
            } else if (x === "Web (Portal)") {
                web.style.display = "block";
            } else {
                rte.style.display = "block";
            }
        }
    </script>

    <script>
        function participationFunction() {
            const value = document.getElementById("participation-selection").value;
            const O_network = document.getElementById("Out of Network");

            O_network.style.display = "none";

            if (value === "Out of Network") {
                O_network.style.display = "block";
            }
        }
    </script>

    <script>
        function coverageFunction() {
            const value = document.getElementById("coverage-selection").value;
            const not_in_coverage = document.getElementById("No");

            not_in_coverage.style.display = "none";

            if (value === "No") {
                not_in_coverage.style.display = "block";
            }
        }
    </script>

    <script>
        function referralFunction() {
            const value = document.getElementById("referral-selection").value;
            const referral_not = document.getElementById("Not Required");
            const not_required_Msg = document.getElementById("not_required_ReferralMsg");

            if (value === "Not Required") {
                referral_not.style.display = "none";
                not_required_Msg.style.display = "block";
            } else {
                referral_not.style.display = "block";
                not_required_Msg.style.display = "none";
            }
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modeSelect = document.getElementById("modeSelect");
            const dynamicInput = document.getElementById("dynamicInput");
            const outOfStateSection = document.getElementById("outOfStateSection");
            const otherCPTContainer = document.getElementById("otherCPTContainer");

            function handleModeChange() {
                switch (modeSelect.value) {
                    case "Specialist_office":
                        dynamicInput.placeholder =
                            'Script: "May I know the general benefits for specialist office for patient?"';
                        break;

                    case "telehealth":
                        dynamicInput.placeholder =
                            'Script: "May I know the general benefits for telehealth for patient?"';
                        break;

                    case "other":
                        dynamicInput.placeholder =
                            'Script: "May I know the general benefits for other services?"';
                        break;
                }


                if (modeSelect.value === "telehealth") {
                    outOfStateSection.style.display = "none";
                } else {
                    outOfStateSection.style.display = "block";
                }


                if (modeSelect.value === "other") {
                    otherCPTContainer.style.display = "block";
                    otherCPTContainer.innerHTML = `
                <p style="font-style: italic; color: #541ca1; font-size:12px;margin-bottom:2px;">
                    Script: "May I have the benefits for the CPT XXXXX?"
                </p>
                <input type="text" class="form-control" placeholder="Enter CPT code">
            `;
                } else {
                    otherCPTContainer.style.display = "none";
                    otherCPTContainer.innerHTML = "";
                }
            }


            modeSelect.addEventListener("change", handleModeChange);


            handleModeChange();
        });
    </script>

    <script>
        const authRequired = document.getElementById("authRequired");
        const authOnFile = document.getElementById("authOnFile");
        const authOnFileWrapper = document.getElementById("authOnFileWrapper");

        const authNumberRow = document.getElementById("authNumberRow");
        const authTermRow = document.getElementById("authTermRow");
        const authUnitsRow = document.getElementById("authUnitsRow");
        const faxDetailsSection = document.getElementById("faxDetailsSection");

        const cobStatus = document.getElementById("cobStatus");
        const secondaryDetails = document.getElementById("secondaryDetails");

        function updateAuthUI() {
            if (authRequired.value === "not_required") {
                // Hide all auth fields
                authOnFileWrapper.style.display = "none";
                authNumberRow.style.display = "none";
                authTermRow.style.display = "none";
                authUnitsRow.style.display = "none";
                faxDetailsSection.style.display = "none";
                return;
            }

            // Auth is required, show fields
            authOnFileWrapper.style.display = "";
            authNumberRow.style.display = "";
            authTermRow.style.display = "";
            authUnitsRow.style.display = "";

            if (authOnFile.value === "not_on_file") {
                faxDetailsSection.style.display = "";
                authNumberRow.style.display = "none";
                authTermRow.style.display = "none";
                authUnitsRow.style.display = "none";
            } else {
                faxDetailsSection.style.display = "none";
            }
        }

        function toggleSecondaryDetails() {
            secondaryDetails.style.display = (cobStatus.value === "secondary" || cobStatus.value === "tertiary") ? "flex" : "none";
        }

        // Listeners
        authRequired.addEventListener("change", updateAuthUI);
        authOnFile.addEventListener("change", updateAuthUI);
        cobStatus.addEventListener("change", toggleSecondaryDetails);

        // Initial load
        updateAuthUI();
        toggleSecondaryDetails();
    </script>

    <!-- For new verification and dashboard -->
    <script>
        const newVerificationSection = document.getElementById("newVerificationSection");
        const dashboardSection = document.getElementById("dashboardSection");
        const topBarTitle = document.getElementById("topBarTitle");

        const newVerificationBtn = document.querySelector('.btns a[onclick="showNewVerification()"]');
        const dashboardBtn = document.querySelector('.btns a[onclick="showDashboard()"]');

        // Default view
        showNewVerification();

        function setActive(btn) {
            newVerificationBtn.classList.remove("active");
            dashboardBtn.classList.remove("active");
            btn.classList.add("active");
        }

        function showNewVerification() {
            newVerificationSection.style.display = "block";
            dashboardSection.style.display = "none";
            topBarTitle.innerText = "New Verification Entry";
            setActive(newVerificationBtn);
        }

        function showDashboard() {
            newVerificationSection.style.display = "none";
            dashboardSection.style.display = "block";
            topBarTitle.innerText = "Dashboard";
            setActive(dashboardBtn);
        }

        // Dashboard table search
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


</body>

</html>